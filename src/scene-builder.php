<?php
session_start();
require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';
require_once 'util.php';
if (!isset($_SESSION['logedIn']) || $_SESSION['logedIn'] !== true) {
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scene Builder</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body data-bs-theme="dark">

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
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changeFont()">Inset Text</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="imageInsert" tabindex="-1" aria-labelledby="imageInsertLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imageInsertLabel">Insert Image</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="h2 mt-3 mb-3">
          Image Path
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="imagePathInput" aria-label="pathInput" placeholder="Image Path" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Width
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="widthImageInput" aria-label="widthImageInput" placeholder="Width" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="h2 mt-3 mb-3">
          Height
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="heightImageInput" aria-label="heightImageInput" placeholder="Height" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insetImage()">Insert Image</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="carouselInsert" tabindex="-1" aria-labelledby="carouselInsertLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="carouselInsertLabel">Insert Images</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="h2 mt-3 mb-3">
                    Image Path
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="imagePathInput" aria-label="pathInput" placeholder="Image Path" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insertImage()">Add Image</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insertCarousel()">Add Image</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="websiteInsert" tabindex="-1" aria-labelledby="websiteInsertLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="websiteInsertLabel">New Website</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="h2 mt-3 mb-3">
                    Website Name
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="websiteName" aria-label="name Input" placeholder="New Website" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="h2 mt-3 mb-3">
                    Website renderd in navbar
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Renderd in navbar
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="insertWebsite()">Add Website</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-1 mb-1">
  <div class="row">
    <div class="col-9">

    </div>
    <div class="col-2">
      <select class="form-select" id="pageSelect" aria-label="Floating label select example">
        <option selected id="defaultSelected">Choose Page</option>
          <?php
          $sub = select('SELECT * FROM subMenuEntry');
          foreach ($sub as $entry) {
            echo '<option value="' .
              htmlspecialchars($entry['smeId'], ENT_QUOTES, 'UTF-8') .
              '">' .
              htmlspecialchars($entry['name'], ENT_QUOTES, 'UTF-8') .
              '</option>';
          }
          ?>
        <option id="newPage">New Page</option>
      </select>
    </div>
    <div class="col-1">
      <button type="button" onclick="fullscreen()" class="btn btn-outline-light">Fullscreen</button>
    </div>
  </div>
  <div class="row mt-1">
    <div class="col">
      <button type="button" onclick="setContentEditable()" id="containerEditableButton" class="btn btn-outline-light">Enter Container Edit Mode</button>
    </div>
    <div class="col text-end">
      <button type="button" onclick="saveContent()" class="btn btn-outline-light">Save Content</button>
    </div>
  </div>
</div>
<div class="container-fluid mainContainer h-100vh">
  <div class="row h-100vh">
    <div class="spCol rounded bg-body-secondary text-center" id="templateRenderer">
      <div class="border rounded previewText">
          <span>
            Text
          </span>
      </div>
      <div class="border rounded previewLink">
        <a href="">
          Link
        </a>
      </div>
      <div class="border rounded previewContainer">
        Container
      </div>
      <div class="border rounded previewImage">
        <span>Image</span>
      </div>
      <div class="previewCarousel">
          <?php
          $images = [
            '../assets/placeholder-image.webp',
            '../assets/placeholder-image.webp',
            '../assets/placeholder-image.webp',
          ];
          renderCarousel($images);
          ?>
      </div>
    </div>
    <div class="verticalRuler bg-white" id="pageDivider"></div>
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
  let articleName;
  let smeId;
  let previousSpacing = {
    margin: 0,
    padding: 0,
    width: 0,
    height: 0
  };
  
  document.getElementById('pageSelect').addEventListener('change' ,(e) => loadSite(e))
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

  function setChildNodes(element) {
      if (element.nodeType === Node.ELEMENT_NODE) {
        resetEventBehavior(element);
        if (element.id === "") {
          element.id = Math.random().toString(36).substring(7);
        }
        if (element.childNodes.length !== 0) {
          element.childNodes.forEach((child) => {
            setChildNodes(child);
          });
        }
      }
  }

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
      e.preventDefault();
      if (e.code === 'KeyAlt' && e.code === 'KeyW') {
        currentElement = e.target;
        new bootstrap.Modal(document.getElementById("dimensionChange")).toggle();
        setChangeDimensionsModalDefaults();
      }
    });
    if (element.classList.contains("previewText")) {
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
      if (!element.classList.contains("loadedElement")) {
        new bootstrap.Modal(document.getElementById("textInsert")).toggle();
      }
      else {
        element.draggable = true;
      }
      element.addEventListener('keydown', (e) => {
        e.preventDefault();
        if (e.code === 'KeyAlt' && e.code === 'KeyF') {
          currentElement = e.target;
          new bootstrap.Modal(document.getElementById("textInsert")).toggle();
          setFontModalDefaults();
        }
      });
    }
    if (element.classList.contains("previewImage")) {
      document.getElementById('imagePathInput').value = '';
      document.getElementById('widthInput').value = '';
      document.getElementById('heightInput').value = '';
      currentElement = element;
      new bootstrap.Modal(document.getElementById("imageInsert")).toggle();
    }
    if (element.classList.contains("previewLink") && !element.classList.contains("loadedLink")) {
      currentLinkElement = element;
      element.innerHTML = "";
      new bootstrap.Modal(document.getElementById("linkInsert")).toggle();
      element.addEventListener('keydown', (e) => {
        e.preventDefault();
        if (e.code === 'KeyAlt' && e.code === 'KeyL') {
          currentLinkElement = element;
          if (element.parentElement.querySelector("a") === null) {
            new bootstrap.Modal(document.getElementById("linkInsert")).toggle();
          }
        }
      });
    }
    if (element.classList.contains("previewCarousel")) {
      element.addEventListener('keydown', (e) => {
        e.preventDefault();
        if (e.code === 'KeyAlt' && e.code === 'KeyI') {
          currentElement = element;
          new bootstrap.Modal(document.getElementById("carouselInsert")).toggle();
        }
      });
    }
    if (!element.classList.contains("previewContainer")) {
      element.classList.remove("border");
      element.classList.remove("rounded");
    } else {
      element.classList.add("border");
      element.classList.add("rounded");
      currentContainerElement = element;
      if (!element.classList.contains("loadedContainer"))
      {
        element.innerHTML = "";
        new bootstrap.Modal(document.getElementById("containerInsert")).toggle();
      } else  {
        element.draggable = true;
      }
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
    if (e.target.classList.contains("insertedContainerElement") || element.classList.contains("previewContainer")) {
      e.target.appendChild(element);
      resetEventBehavior(element);
    }
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
      // Store the previous spacing and dimensions
      previousSpacing.margin = getComputedStyle(pagePreview).getPropertyValue("margin").replace("px", "");
      previousSpacing.padding = getComputedStyle(pagePreview).getPropertyValue("padding").replace("px", "");
      previousSpacing.width = getComputedStyle(pagePreview).getPropertyValue("width").replace("px","") - previousSpacing.margin*2 - previousSpacing.padding*2;
      previousSpacing.height = getComputedStyle(pagePreview).getPropertyValue("height").replace("px","") - previousSpacing.margin*2 - previousSpacing.padding*2;

      console.log(previousSpacing);

      // Set to fullscreen
      templateRenderer.style.display = "none";
      pageDivider.style.display = "none";
      pagePreview.style.width = "100vw";
      pagePreview.style.height = "100vh";
      pagePreview.style.boxSizing = "border-box";
      pagePreview.style.margin = "0px";
      pagePreview.style.padding = "0px";
      isFullscreen = true;
    } else {
      // Restore previous dimensions and spacing
      pagePreview.style.width = previousSpacing.width + "px";
      pagePreview.style.height = previousSpacing.height + "px";
      pagePreview.style.margin = previousSpacing.margin + "px";
      pagePreview.style.padding = previousSpacing.padding + "px";
      pagePreview.style.boxSizing = "content-box";

      // Restore other elements' visibility
      templateRenderer.style.display = "block";
      pageDivider.style.display = "block";

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
    let numCols = 1;
    let numRows = document.getElementById('rowsInput').value;
    let container = document.createElement('div');
    container.classList.add('container-fluid');
    document.getElementById('rowsInput').value = '';
    for (let i = 0; i < numRows; i++) {
      let row = document.createElement('div');
      row.classList.add('row');
      for (let j = 0; j < numCols; j++) {
        let col = document.createElement('div');
        col.classList.add('col');
        col.innerHTML = (i+1)+"";
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

  function insetImage() {
    let imagePath = document.getElementById('imagePathInput').value;
    let width = document.getElementById('widthImageInput').value;
    let height = document.getElementById('heightImageInput').value;
    let image = document.createElement('img');
    image.src = "../assets/images/" + imagePath;
    image.style.width = width;
    image.style.height = height;
    currentElement.innerHTML = "";
    currentElement.appendChild(image);
  }

  function setContentEditable() {
    editing = !editing;
    if (editing) {
      debugger
      document.getElementById('containerEditableButton').innerHTML = "Exit Container Edit Mode"
      document.querySelectorAll('.previewText').forEach((element) => {
        if (element.parentElement !== document.getElementById('templateRenderer')) {
          element.children[0].contentEditable = true;
          debugger
          element.draggable = false;
          element.children[0].focus();
        }
      });
    } else {
      document.getElementById('containerEditableButton').innerHTML = "Enter Container Edit Mode"
      document.querySelectorAll('.previewText').forEach((element) => {
        if (element.parentElement !== document.getElementById('templateRenderer')) {
          element.children[0].contentEditable = false;
          element.draggable = true;
        }
      });
    }
  }
  function saveContent() {
    class JsonOutput {
      constructor(smeId, content) {
        this.smeId = '';
        this.content = [];
      }
    }

    class Entry {
      constructor(type, id, entryContent) {
        this.type = type;
        this.id = id;
        this.entryContent = entryContent;
      }
    }

    class Container {
      constructor(id, containerContent) {
        this.id = id;
        this.containerContent = containerContent;
      }
    }

    let output = new JsonOutput();
    document.querySelectorAll('.previewContainer').forEach((element) => {
      if (element.parentElement.id === 'pagePreview') {
        let container = new Container(element.id, []);
        element.children[0].childNodes.forEach((row) => {
          debugger
          let rowContent = row.children[0].children[0];
          let entry;
          if (rowContent !== null && rowContent !== undefined) {
            if (rowContent.nodeType === Node.ELEMENT_NODE) {
              if (rowContent.classList.contains('previewText')) {
                entry = new Entry('text', rowContent.id, {
                  style: rowContent.children[0].style.cssText,
                  text: rowContent.children[0].innerHTML.trim()
                });
              } else if (rowContent.classList.contains('previewLink')) {
                entry = new Entry('link', rowContent.id, {
                  href: rowContent.children[0].href,
                  text: rowContent.children[0].innerHTML.trim(),
                  style: rowContent.children[0].style.cssText
                });
              } else if (rowContent.classList.contains('previewImage')) {
                entry = new Entry('image', rowContent.id, {
                  content : rowContent.children[0].src,
                  style: rowContent.children[0].style.cssText
                });
              } else if (rowContent.classList.contains('previewCarousel')) {
                entry = new Entry('carousel', rowContent.id, {});
              } else {
                debugger
                entry = new Entry('empty');
              }
            }
          } else {
            entry = new Entry('empty');
          }
          container.containerContent.push(entry);
        });
        output.smeId = smeId;
        output.content.push(container);
      }
    });

    console.log(output)
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insertApi.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    xhr.send(JSON.stringify(output));
  }

  function loadSite(event) {
    if (document.getElementById('defaultSelected').selected) {
      document.getElementById("pagePreview").innerHTML = "";
      return;
    }
    smeId = event.target.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "pagePreviewContent.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("pagePreview").innerHTML = xhr.responseText;
        pagePreview.childNodes.forEach((element) => {
          setChildNodes(element);
        });
      }
    };
    xhr.send("smeId="+JSON.stringify({ smeId: smeId }));
  }

  function insertCarouselField() {

  }
</script>
</html>