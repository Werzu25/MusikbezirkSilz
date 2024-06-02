<?php
require_once 'components/title.php';
require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scene Builder</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
</head>
<body data-bs-theme="dark" class="bg-body-tertiary">
<div class="modal fade" id="containerInsert" tabindex="-1" aria-labelledby="containerInsertLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="containerInsertLabel">Insert Container</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="h2 mt-3 mb-3">
          Rows
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="rowsInput" aria-label="rowsInput" placeholder="Rows" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Columns
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="colsInput" aria-label="colsInput" placeholder="Columns" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insertContainer()">Insert Container</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="linkInsert" tabindex="-1" aria-labelledby="linkInsertLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="linkInsertLabel">Insert Link</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="h2 mt-3 mb-3">
          Link Text
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="linkText" aria-label="linkText" placeholder="Link Text" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Insert Link
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="linkInput" aria-label="linkInput" placeholder="Link" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insertLink()">Insert Link</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dimensionChange" tabindex="-1" aria-labelledby="dimensionChangeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="dimensionChangeLabel">Insert Container</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="h2 mt-3 mb-3">
          Width
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="widthInput" aria-label="WidthInput" placeholder="Width" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Height
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="heightInput" aria-label="HeightInput" placeholder="Height" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changeDimensions()">Change Dimensions</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="textInsert" tabindex="-1" aria-labelledby="textInsertLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="textInsertLabel">Inset Text</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="h2 mt-3 mb-3">
          Font Color
        </div>
        <div class="input-group mb-3">
          <input type="color" class="form-control" id="fontColorInput" aria-label="fontColorInput" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Font Size
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="fontSizeInput" aria-label="fontSizeInput" placeholder="Font Size" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Underline
        </div>
        <div class="input-group mb-3">
          <input class="form-check-input me-1 rounded" type="checkbox" value="" id="underlineInput">
          <label class="form-check-label" for="underlineInput">
            Underline
          </label>
        </div>
        <div class="h2 mt-3 mb-3">
          Text Alignment
        </div>
        <div class="input-group mb-3">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Text alignment Selector">
              <option value="left">Left</option>
              <option value="Right">Right</option>
              <option value="Center">Center</option>
            </select>
            <label for="floatingSelect">Text Alignment</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changeFont()">Change Font</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-1 mb-1">
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
      <button type="button" onclick="fullscreen()" class="btn btn-outline-light">Fullscreen</button>
    </div>
  </div>
  <div class="row">
    <div class="col-2">
      <button type="button" onclick="setContentEditable()" id="containerEditableButton" class="btn btn-outline-light">Enter Edit Mod</button>
    </div>
  </div>
</div>
<div class="container-fluid mainContainer h-100vh">
  <div class="row h-100vh">
    <div class="spCol rounded bg-body-secondary text-center" id="templateRenderer">
      <div class="border rounded previewTitle">
          <span class="h5">
            Title
          </span>
      </div>
      <div class="border rounded previewText">
          <span class="h6">
            Text
          </span>
      </div>
      <div class="border rounded previewLink">
        <a href="">Link</a>
      </div>
      <div class="border rounded previewContainer">
        Container
      </div>
      <div class="border rounded previewImage">
        <span>Image</span>
      </div>
    </div>
    <div class="verticalRuler bg-white h-100vh" id="pageDivider"></div>
    <div class="spCol rounded bg-body-secondary" id="pagePreview">
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
        max-width: 100vw !important;
    }
    .spCol {
        width: calc(50% - 7px);
        min-width: 200px;
        margin: 3px;
        border: 2px solid !important;
        padding: 12px;
    }
    .spCol > * {
        padding: 5px !important;
        margin-bottom: 15px;
    }
    .verticalRuler {
        width: 2px;
        padding: 0;
        height: 100%;
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
  let editing = false;
  let pagePreviewWidth = bodyWidth / 2 - 7;
  let currentLinkElement;
  let currentContainerElement;
  let currentElement;

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

  function resetEventBehavior(element)  {
    element.removeEventListener('dragstart',(e) => templateRendererDragStart(e));
    element.removeEventListener('drop', (e) => {
      e.preventDefault();
    });
    element.addEventListener('dragstart',(e) => pagePreviewDragStart(e));
    element.addEventListener('keydown', (e) => {
      if (e.code === 'KeyAlt' && e.code === 'KeyW') {
        currentElement = e.target;
        new bootstrap.Modal(document.getElementById("dimensionChange")).toggle();
        setChangeDimensionsModalDefaults();
      }
    });
    if (element.classList.contains("previewTitle") || element.classList.contains("previewText")) {
      element.addEventListener('dblclick', (e) => {
        e.target.contentEditable = true;
        e.target.focus();
        currentElement = e.target;
      });
      element.addEventListener('blur', (e) => {
        e.target.contentEditable = false;
        if (e.target.innerHTML === "" || e.target.innerHTML === "<br>") {
          e.target.remove();
        }
      });
      currentElement = element.children[0];
      new bootstrap.Modal(document.getElementById("textInsert")).toggle();
      element.addEventListener('keydown', (e) => {
        if (e.code === 'KeyAlt' && e.code === 'KeyF') {
          currentElement = e.target;
          new bootstrap.Modal(document.getElementById("textInsert")).toggle();
          setFontModalDefaults();
        }
      });
    }
    if (element.classList.contains("link")) {
      currentLinkElement = element;
      element.innerHTML = "";
      new bootstrap.Modal(document.getElementById("linkInsert")).toggle();
      element.addEventListener('keydown', (e) => {
        if (e.code === 'KeyAlt' && e.code === 'KeyL') {
          currentLinkElement = element;
          if (element.parentElement.querySelector("a") === null) {
            new bootstrap.Modal(document.getElementById("linkInsert")).toggle();
          }
        }
      });
    }
    if (!element.classList.contains("previewContainer")) {
      element.classList.remove("border");
      element.classList.remove("rounded");
    } else {
      element.innerHTML = "";
      currentContainerElement = element;
      new bootstrap.Modal(document.getElementById("containerInsert")).toggle();
    }
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
    if (e.target === document.getElementById("pagePreview")) {
      addClassToChildren(element, "insertedElement")
    }
    if (e.target.classList.contains("insertedElement") || e.target.classList.contains("insertedContainerElement")) {
      e.target.innerHTML = "";
    }
    if (e.target.classList.contains("insertedContainerElement") || e.target === document.getElementById("pagePreview")) {
      e.target.appendChild(element);
    }
    resetEventBehavior(element);
  }

  function mouseDown(e) {
    document.addEventListener("mousemove", mouseMove);
    document.addEventListener("mouseup", mouseUp);
    pageDivider.style.userSelect = "none";
    templateRenderer.style.userSelect = "none";
  }

  function mouseMove(e) {
    let x = e.clientX;
    let leftWidth = x - 7;
    pagePreviewWidth = bodyWidth - x - 7;
    let minWidth = getComputedStyle(templateRenderer).getPropertyValue("min-width").replace("px", "");
    if (leftWidth < minWidth || pagePreviewWidth < minWidth) {
      return;
    }
    templateRenderer.style.width = leftWidth + "px";
    pagePreview.style.width = pagePreviewWidth + "px";
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
      pagePreview.style.width = bodyWidth + "px"
      isFullscreen = true;
    } else if (isFullscreen) {
      templateRenderer.style.display = "block";
      pageDivider.style.display = "block";
      pagePreview.style.width = pagePreviewWidth + "px";
      isFullscreen = false;
    }
  }

  function insertLink() {
    let linkText = document.getElementById('linkText').value;
    let linkInput = document.getElementById('linkInput').value;
    let link = document.createElement('a');
    document.getElementById('linkText').value = '';
    document.getElementById('linkInput').value = '';
    link.href = linkInput;
    link.innerHTML = linkText;
    currentLinkElement.appendChild(link);
    currentLinkElement = null;
  }

  function insertContainer() {
    let numCols = document.getElementById('colsInput').value;
    let numRows = document.getElementById('rowsInput').value;
    let container = document.createElement('div');
    container.classList.add('container-fluid');
    document.getElementById('colsInput').value = '';
    document.getElementById('rowsInput').value = '';
    for (let i = 0; i < numRows; i++) {
      let row = document.createElement('div');
      row.classList.add('row');
      for (let j = 0; j < numCols; j++) {
        let col = document.createElement('div');
        col.classList.add('col');
        col.innerHTML = (j+1) +" " + i
        row.appendChild(col);
      }
      container.appendChild(row);
    }
    currentContainerElement.appendChild(container);
    addClassToChildren(currentContainerElement, "insertedContainerElement");
    currentContainerElement = null;
    setContentEditable();
  }

  function addClassToChildren(parent, className) {
    parent.childNodes.forEach((child) => {
      if (child.nodeType === 1) {
        child.classList.add(className);
        addClassToChildren(child, className);
      }
    });
  }

  function changeDimensions() {
    let width = document.getElementById('widthInput').value;
    let height = document.getElementById('heightInput').value;
    currentElement.style.width = width;
    currentElement.style.height = height;
  }

  function setChangeDimensionsModalDefaults() {
    document.getElementById('widthInput').value = currentElement.style.width.replace("px", "");
    document.getElementById('heightInput').value = currentElement.style.height.replace("px", "");
  }

  function changeFont() {
    let fontColor = document.getElementById('fontColorInput').value;
    let fontSize = document.getElementById('fontSizeInput').value;
    let underline = document.getElementById('underlineInput').checked;
    let alignment = document.getElementById('floatingSelect').value;
    currentElement.style.color = fontColor;
    currentElement.style.fontSize = fontSize + "px";
    if (underline) {
      currentElement.style.textDecoration = "underline";
    } else {
      currentElement.style.textDecoration = "none";
    }
    currentElement.classList.remove("text-start");
    currentElement.classList.remove("text-center");
    currentElement.classList.remove("text-end");
    switch (alignment) {
      case 'Left':
        currentElement.parentElement.classList.add("text-start");
        break;
      case 'Right':
        currentElement.parentElement.classList.add("text-end");
        break;
      case 'Center':
        currentElement.parentElement.classList.add("text-center");
        break;
    }
  }

  function setFontModalDefaults() {
    document.getElementById('fontColorInput').value = currentElement.style.color;
    document.getElementById('fontSizeInput').value = currentElement.style.fontSize.replace("px", "");
    document.getElementById('underlineInput').checked = currentElement.style.textDecoration === "underline";
  }

  function setContentEditable() {
    editing = !editing;
    if (editing) {
      document.getElementById('containerEditableButton').innerHTML = "Exit Container Edit Mode"
      document.querySelectorAll('.previewContainer').forEach((element) => {
        if (element.parentElement === document.getElementById('pagePreview')) {
          element.contentEditable = true;
          element.focus();
        }
      });
    } else {
      document.getElementById('containerEditableButton').innerHTML = "Enter Container Edit Mode"
      document.querySelectorAll('.previewContainer').forEach((element) => {
        if (element.parentElement === document.getElementById('pagePreview')) {
          element.contentEditable = false;
        }
      });
    }
  }
</script>
</html>