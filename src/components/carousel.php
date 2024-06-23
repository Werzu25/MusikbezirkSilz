<?php
function renderCarousel($images)
{
  echo '
<div class="container-fluid mt-2">
<div class="carousel slide" id="imageCarousel">
  <div class="carousel-inner">
    ';
  $first = true;
  foreach ($images as $image) {
    echo '<div class="carousel-item' .
      ($first ? ' active' : '') .
      '">
              <img src="' .
      htmlspecialchars($image, ENT_QUOTES, 'UTF-8') .
      '" class="d-block mx-auto w-100 image" alt="...">
          </div>';
    $first = false;
  }
  echo '
  </div>
  <div class="carousel-indicators">
  <div class="carousel-indicators-button">
    <button type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
      <span class="mdi mdi-chevron-left selector"></span>
    </button>
  </div>
  <div class="select-button-container">';
  foreach ($images as $index => $image) {
    echo '<button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="' .
      htmlspecialchars($index, ENT_QUOTES, 'UTF-8') .
      '" class="' .
      ($index == 0 ? 'active' : '') .
      '" aria-current="' .
      ($index == 0 ? 'true' : 'false') .
      '" aria-label="Slide ' .
      htmlspecialchars($index + 1, ENT_QUOTES, 'UTF-8') .
      '"></button>';
  }
  echo '
</div>
  <div class="carousel-indicators-button">
    <button type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
      <span class="mdi mdi-chevron-right selector"></span>
    </button>
  </div>
    </div>
  </div>
</div>
<style>
  .carousel-indicators {
    position: relative !important;
    width: 100% !important;
    height: 2rem !important;
    margin: 0.5rem 0 0.5rem 0 !important;
    background: #212529 !important;
    border-radius: 10px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center; /* Ensure children are vertically centered */
}

.carousel-indicators > div > button {
    background-color: #fff !important;
    border-radius: 50% !important;
    width: 10px !important;
    height: 10px !important;
    vertical-align: middle !important;
}

.carousel-indicators > div  {
    display: flex !important;
    align-items: center !important;
    vertical-align: middle !important
}

.image {
    height: 25rem !important;
    width: auto !important;
    border-radius: 5px !important;
}

.carousel-indicators-button > [data-bs-target] {
    all: unset !important;
    height: 100% !important;
    margin-left: 1rem !important;
    margin-right: 1rem !important;
    display: flex; /* Ensure it uses flex to align its content */
    align-items: center; /* Align its content vertically */
    justify-content: center; /* Center content horizontally */
}

.select-button-container {
    height: 100% !important;
}

.selector {
    height: 100% !important;
    vertical-align: middle !important;
    font-size: 1.5rem !important;
}

</style>';
}
?>
