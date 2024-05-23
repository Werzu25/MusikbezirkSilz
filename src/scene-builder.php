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
<div class="container-fluid mainContainer h-100vh">
  <div class="row h-100vh">
    <div class="spCol text-center" id="templateRenderer">
    test1
      <div class="border rounded draggable">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="border rounded draggable">
        Raphi hat a skill issue
      </div>
    </div>
    <div class="verticalRuler h-100vh" id="pageDivider" ></div>
    <div class="spCol text-center" id="pagePreview">
      test
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

  let draggable = document.querySelectorAll('.draggable');

  draggable.forEach((element) => {
    element.draggable = true;
    element.addEventListener('dragstart',(e) => templateRendererDragStart(e));
    element.id = Math.random().toString(36).substring(7);
  });

  pageDivider.addEventListener('dragover',(e) => preventDefault(e));
  pagePreview.addEventListener('dragover', (e) => preventDefault(e));
  pagePreview.addEventListener('drop', (e) => drop(e));

  templateRenderer.addEventListener('dragover', (e) => preventDefault(e));
  templateRenderer.addEventListener('drop', (e) => deleteElement(e));

  function deleteElement(e) {
    debugger
    e.preventDefault();
    let data = e.dataTransfer.getData("text");
    document.getElementById(data).remove();
  }

  function preventDefault(e) {
    e.preventDefault();
  }

  function templateRendererDragStart(e) {
    e.dataTransfer.setData("text", e.target.id);
    e.dataTransfer.effectAllowed = "copy";
  }

  function pagePreviewDragStart(e) {
    e.dataTransfer.setData("text", e.target.id);
  }

  function resetDragBehavior(element)  {
    element.removeEventListener('dragstart',(e) => templateRendererDragStart(e));
    element.addEventListener('dragstart',(e) => pagePreviewDragStart(e));
  }

  function drop(e) {
    e.preventDefault();
    let data = e.dataTransfer.getData("text");
    let element = document.getElementById(data).cloneNode(true);
    element.id = Math.random().toString(36).substring(7);
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
    let rightWidth = bodyWidth - x - 1;
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

  pageDivider.addEventListener("mousedown", mouseDown);
</script>
</html>