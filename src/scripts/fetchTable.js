const mysql = require('mysql')

function fetchTable(host, user, password, database, table) {
    return new Promise((resolve, reject) => {
        const connection = mysql.createConnection({
            host: host,
            user: user,
            password: password,
            database: database
        })

        connection.connect((err) => {
            if (err) {
                reject('Error connecting to database: ' + err.stack)
                return
            }
            console.log('Connected to database as ID ' + connection.threadId)

            connection.query(`SELECT * FROM ${table}`, (err, rows) => {
                if (err) {
                    reject(err)
                    return
                }

                const jsonData = JSON.stringify(rows)

                connection.end((endErr) => {
                    if (endErr) {
                        console.error('Error ending database connection: ' + endErr.stack)
                    }
                    console.log('Database connection ended')
                })

                resolve(jsonData)
            })
        })
    })
}
