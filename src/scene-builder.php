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
    </div>
    <div class="verticalRuler h-100vh" id="pageDivider"></div>
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
        min-width: 100px;
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


  function mouseDown(e) {
    console.log('Dragging started');
    document.addEventListener("mousemove", mouseMove);
    document.addEventListener("mouseup", mouseUp);
  }

  function mouseMove(e) {
    let x = e.clientX;
    let min_width = templateRenderer.style.minWidth;
    let leftWidth = Math.max(x - 1, min_width);
    let rightWidth = Math.max(bodyWidth - x - 1, min_width);
    templateRenderer.style.width = leftWidth + "px";
    pagePreview.style.width = rightWidth + "px";
  }

  function mouseUp(e) {
    console.log('Dragging ended');
    document.removeEventListener("mousemove", mouseMove);
    document.removeEventListener("mouseup", mouseUp);
  }

  pageDivider.addEventListener("mousedown", mouseDown);
</script>
</html>