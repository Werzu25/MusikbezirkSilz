<script setup></script>

<template>
  <v-container fluid class="bg-black container">
    <v-row justify="center" align="center">
      <v-col cols="auto">
        <a class="footer-link" href="#">
          <v-icon>mdi-facebook</v-icon>
          Facebook
        </a>
      </v-col>
      <v-col cols="auto">
        <a class="footer-link" href="#">
          <v-icon>mdi-email-outline</v-icon>
          Email
        </a>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
.container {
  position: fixed;
  bottom: 0;
}

.footer-link {
  padding: 0.65rem;
  margin: 0.75rem;
  border: solid transparent 1px;
}

.footer-link:hover {
  border: solid #181818 1px;
  border-radius: 0.5rem;
}

.footer-link > * {
  margin-bottom: 2px;
}

a:link {
  color: white;
  text-decoration: none;
}
a:visited {
  color: white;
}
</style>
