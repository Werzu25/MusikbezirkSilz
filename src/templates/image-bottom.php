<?php

function renderImageBottom($content) {
echo '<div class="container-fluid">
    <h4 class="text-center text-danger card-title">Content_titel</h4>
    <div class="text-center">Placeholder_content</div>
    <div class="container-fluid d-flex justify-content-center">
 
        <img
                alt=""
                src=""
                class="grow m-2"
                data-bs-toggle="modal"
                data-bs-target="#modal1"
        />
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
                        <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <img src="../Placeholder.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
</div>
<style>
    .grow {
        transition: all 0.3s ease-in-out;
        max-width: 200px;
    }
    .grow:hover {
        transform: scale(1.1);
    }
</style>';

}


