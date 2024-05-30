<?php
require_once 'templates/dynamic/textWithLink.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scene Builder</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
</head>
<body>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Example Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>Link</div>
                <input type="text" class="w-100" id="link_text_field">
                <div class="mt-5">Displayed Link</div>
                <input type="text" class="w-100" id="displayedlink_text_field">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid bg-body-secondary">
  <div class="row">
    <div class="col-9">
      test1
    </div>
    <div class="col-2">
      <div class="w-50 dropdown">
        test2
      </div>
    </div>
    <div class="col-1">
      <button type="button" onclick="fullscreen()" class="btn">Fullscreen</button>
    </div>
  </div>
</div>
<div class="container-fluid mainContainer h-100vh">
  <div class="row h-100vh">
    <div class="spCol text-center" id="templateRenderer">
    test1
      <div class="border rounded template">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="border rounded template">
        Raphi hat a skill issue
      </div>
    </div>
    <div class="verticalRuler h-100vh" id="pageDivider" ></div>
    <div class="spCol text-center" id="pagePreview">
      test
    </div>
  </div>
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EPIC TEXT WITH TEXTö</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>EPCI LEON GAY SEX WOW I LOVE SEX 69 WOW AMAZING</div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <div>EPCI LEON GAY SEX WOW I LOVE SEX 69 WOW AMAZING PART2</div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>
<style>
    .h-100vh {
        min-height: 100vh;
    }
    body {
        min-height: 100vh;
    }
    .spCol {
        width: calc(50% - 1px);
        min-width: 200px;
    }
    .verticalRuler {
        width: 2px;
        padding: 0;
        height: 100%;
        background: #003262;
    }
    .verticalRuler:hover {
        cursor: ew-resize;
    }
</style>
<script>
  let pageDivider = document.getElementById('pageDivider');
  let templateRenderer = document.getElementById('templateRenderer');
  let pagePreview = document.getElementById('pagePreview');
  let bodyWidth = document.body.clientWidth;
  let isFullscreen = false;
  let rightWidth = 0;

  pageDivider.addEventListener("mousedown", mouseDown);
  pageDivider.addEventListener('dragover',(e) => preventDefault(e));
  pagePreview.addEventListener('dragover', (e) => preventDefault(e));
  pagePreview.addEventListener('drop', (e) => drop(e));

  templateRenderer.addEventListener('dragover', (e) => preventDefault(e));
  templateRenderer.addEventListener('drop', (e) => deleteElement(e));
  templateRenderer.childNodes.forEach((element) => {
    element.draggable = true;
    element.addEventListener('dragstart',(e) => templateRendererDragStart(e));
    element.addEventListener('drop', (e) => {
      e.preventDefault();
    });
    element.id = Math.random().toString(36).substring(7);
  });

  function deleteElement(e) {
    e.preventDefault();
    let data = JSON.parse(e.dataTransfer.getData("text"));
    if (data["source"] === "templateRenderer") {
      return;
    }
    document.getElementById(data["id"]).remove();
  }

  function preventDefault(e) {
    e.preventDefault();
  }

  function templateRendererDragStart(e) {
    let output = {
      id: e.target.id,
      source: e.target.parentNode.id
    };
    e.dataTransfer.effectAllowed = "copy";
    e.dataTransfer.setData("text", JSON.stringify(output));
  }

  function pagePreviewDragStart(e) {
    let output = {
      id: e.target.id,
      source: e.target.parentNode.id
    };
    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.setData("text", JSON.stringify(output));
  }

  function resetDragBehavior(element)  {
    element.removeEventListener('dragstart',(e) => templateRendererDragStart(e));
    element.removeEventListener('drop', (e) => {e.preventDefault();});
    element.addEventListener('dragstart',(e) => pagePreviewDragStart(e));
    element.addEventListener('dblclick', (e) => {
      e.target.contentEditable = true;
      e.target.focus();
    });
    element.addEventListener('blur', (e) => {
      e.target.contentEditable = false;
    });
  }

  function drop(e) {
    e.preventDefault();
    let data = JSON.parse(e.dataTransfer.getData("text"));
    let id = data["id"];
    let element;
    if (e.target.classList.contains("template")) {
      return
    }
    if (data["source"] === "templateRenderer") {
      element = document.getElementById(id).cloneNode(true);
      element.id = Math.random().toString(36).substring(7);
    } else if (data["source"] === "pagePreview") {
      element = document.getElementById(id);
    }
    e.target.appendChild(element);
    resetDragBehavior(element);
  }

  function mouseDown(e) {
    document.addEventListener("mousemove", mouseMove);
    document.addEventListener("mouseup", mouseUp);
    pageDivider.style.userSelect = "none";
    templateRenderer.style.userSelect = "none";
  }

  function mouseMove(e) {
    let x = e.clientX;
    let leftWidth = x - 1;
    rightWidth = bodyWidth - x - 1;
    let minWidth = getComputedStyle(templateRenderer).getPropertyValue("min-width").replace("px", "");
    if (leftWidth < minWidth || rightWidth < minWidth) {
      return;
    }
    templateRenderer.style.width = leftWidth + "px";
    pagePreview.style.width = rightWidth + "px";
  }

  function mouseUp(e) {
    document.removeEventListener("mousemove", mouseMove);
    document.removeEventListener("mouseup", mouseUp);
    pageDivider.style.userSelect = "auto";
    templateRenderer.style.userSelect = "auto";
  }

  function fullscreen() {
    if (!isFullscreen) {
      templateRenderer.style.display = "none";
      pageDivider.style.display = "none";
      pagePreview.style.width = "100%";
      isFullscreen = true;
    } else if (isFullscreen) {
      templateRenderer.style.display = "block";
      pageDivider.style.display = "block";
        pagePreview.style.width = rightWidth + "px";
      isFullscreen = false;
    }
  }
</script>
</html>