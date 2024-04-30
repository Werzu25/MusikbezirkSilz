<?php
$modalJSON =     file_get_contents( "../../assets/modal.json", true);
$modalData = json_decode($modalJSON, true);
$imageUrl = $modalData["imageUrl"];
$title = $modalData["title"];
$modalText = $modalData["modalText"];
echo '
<link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link href="../../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">'.$title.'</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span>'.$modalText.'</span>
              <img src='.$imageUrl.'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus()
})

window.onload = () => {
  data.bs.toggle = "modal"
}

</script>
';
?>