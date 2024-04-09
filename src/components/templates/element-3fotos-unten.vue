<script setup>

</script>

<template>
  <div class="container-fluid">
    <h4 class="text-center text-danger card-title">Content_titel</h4>
    <div class="text-center">Placeholder_content</div>
    <div class="container-fluid d-flex justify-content-center">
      <!-- Bild 1 mit Modal -->
      <img
        src="Placeholder.png"
        class="grow m-2"
        data-bs-toggle="modal"
        data-bs-target="#modal1"
      />

      <!-- Modal für Bild 1 -->
      <div
        class="modal fade"
        id="modal1"
        tabindex="-1"
        aria-labelledby="modalLabel1"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel1">
                Bild 1 Vergrößerung
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <img src="Placeholder.png" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>

      <!-- Bild 2 mit Modal -->
      <img
        src="Placeholder.png"
        class="grow m-2"
        data-bs-toggle="modal"
        data-bs-target="#modal2"
      />

      <!-- Modal für Bild 2 -->
      <div
        class="modal fade"
        id="modal2"
        tabindex="-1"
        aria-labelledby="modalLabel2"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel2">
                Bild 2 Vergrößerung
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <img src="Placeholder.png" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>

      <!-- Bild 3 mit Modal -->
      <img
        src="Placeholder.png"
        class="grow m-2"
        data-bs-toggle="modal"
        data-bs-target="#modal3"
      />

      <!-- Modal für Bild 3 -->
      <div
        class="modal fade"
        id="modal3"
        tabindex="-1"
        aria-labelledby="modalLabel3"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel3">
                Bild 3 Vergrößerung
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <img src="Placeholder.png" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.grow {
  transition: all 0.3s ease-in-out;
  max-width: 200px;
}
.grow:hover {
  transform: scale(1.1);
}
</style>
