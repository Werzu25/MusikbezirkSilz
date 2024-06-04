<?php
session_start();

$artId = 1;

require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';

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

<div class="container-fluid mt-1 mb-1">
  <div class="row">
    <div class="col-9">

    </div>
    <div class="col-2">
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Choose Page</option>
        <option value="1">Page One</option>
        <option value="2">Page Two</option>
        <option value="3">Page Three</option>
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
    </div>
    <div class="verticalRuler bg-white h-100vh" id="pageDivider"></div>
    <div class="spCol rounded bg-body-secondary" id="pagePreview">
      <?php
      require_once './util.php';
      $smeId = 1;
      // drop doesnt work and currently defaults to article 1
      $articles = select("SELECT * FROM articles WHERE smeId = $smeId");
      foreach ($articles as $article) {
        $components = select(
          'SELECT * FROM components WHERE artId =' . $article['artId'] . ' ORDER BY displayOrder ASC'
        );
        echo '<div class="previewContainer loadedContainer">';
        foreach ($components as $component) {
          render($component);
        }
        echo '</div>';
      }
      ?>
    </div>
  </div>
</div>
</body>
<style>
    .h-100vh {
        min-height: 110vh;
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
  let previousSpacing = {
    margin: 0,
    padding: 0,
  };

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

  pagePreview.childNodes.forEach((element) => {
    if (element.nodeType === Node.ELEMENT_NODE) {
      resetEventBehavior(element);
      if (element.id === "") {
        element.id = Math.random().toString(36).substring(7);
      }
    }
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
    if (element.classList.contains("previewLink")) {
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
        previousSpacing.margin = pagePreview.style.margin + "px";
        previousSpacing.padding = pagePreview.style.padding + "px";
        templateRenderer.style.display = "none";
        pageDivider.style.display = "none";
        pagePreview.style.width = "100vw";
        pagePreview.style.height = "100vh";
        pagePreview.style.boxSizing = "border-box";
        pagePreview.style.margin = "0";
        pagePreview.style.padding = "0";
        isFullscreen = true;
      } else if (isFullscreen) {
          templateRenderer.style.display = "block";
          pageDivider.style.display = "block";
          pagePreview.style.width = pagePreviewWidth + "px";
          pagePreview.style.height = "auto";
          pagePreview.style.boxSizing = "content-box";
          pagePreview.style.margin = previousSpacing.margin;
          pagePreview.style.padding = previousSpacing.padding;

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
  function saveContent() {
    class JsonOutput {
      constructor() {
        this.articleID = '';
        this.content = [];
      }
    }

    class Entry {
      constructor(type, id, content) {
        this.id = id;
        this.type = type;
        this.content = content;
      }
    }

    class Container {
      constructor(type, id, content) {
        this.type = type;
        this.id = id;
        this.content = content;
      }
    }

    let output = new JsonOutput();

    document.querySelectorAll('.previewText').forEach((element) => {
      if (element.parentElement === document.getElementById('pagePreview')) {
        let child = element.children[0];
        let content = {
          text: child.innerHTML,
          style: child.style.cssText
        };
        let entry = new Entry('text', content);
        output.content.push(entry);
      }
    });

    document.querySelectorAll('.previewLink').forEach((element) => {
      if (element.parentElement === document.getElementById('pagePreview')) {
        let child = element.children[0];
        let linkElement = {
          text: child.innerHTML,
          href: child.href,
        };
        let entry = new Entry('link', linkElement);
        output.content.push(entry);
      }
    });

    document.querySelectorAll('.previewContainer').forEach((element) => {
      if (element.parentElement === document.getElementById('pagePreview')) {
        if (!element.classList.contains("loadedElement")) {
          let containerContent = [];
          let child = element.children[0];
          child.childNodes.forEach((row) => {
            row.childNodes.forEach((col) => {
              if (col.children.length !== 0) {
                let subEntry = col.children[0].children[0];
                if (subEntry.parentElement.classList.contains("previewText")) {
                  let content = {
                    text: subEntry.innerHTML,
                    style: subEntry.style.cssText
                  };
                  containerContent.push(new Entry('text', subEntry.parentElement.id, content));
                } else if (subEntry.parentElement.classList.contains("previewLink")) {
                  let linkElement = {
                    text: subEntry.innerHTML,
                    href: subEntry.href,
                  };
                  containerContent.push(new Entry('link', subEntry.parentElement.id, linkElement));
                } else if (subEntry.parentElement.classList.contains("previewImage")) {
                  let content = {
                    type: "image",
                    src: subEntry.src,
                    width: subEntry.style.width,
                    height: subEntry.style.height
                  };
                  containerContent.push(new Entry('media', subEntry.parentElement.id, content));
                }
              } else {
                containerContent.push(new Entry('empty', 'empty'));
              }
            });
          });
          let container = new Container("container", element.id, containerContent);
          output.content.push(container);
        }
      }
    });
    console.log(output)
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "save-content.php", true);
    xhr.send(JSON.stringify(output));
  }

</script>
</html>