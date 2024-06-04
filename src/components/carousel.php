
<?php

function renderCarousel($images)
{
  echo '<div id="carouselExampleIndicators" class="carousel slide w-25 h-auto" data-bs-ride="carousel"  >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
  for ($i = 1; $i < sizeof($images); $i++) {
    echo ' <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' .
      $i .
      '" aria-label="Slide ' .
      ($i + 1) .
      '"></button>';
  }
  echo '</div>
    <div class="carousel-inner">';
  $first = true;
  foreach ($images as $image) {
    echo ' <div class="carousel-item' .
      ($first ? ' active' : '') .
      '">
            <img src="' .
      $image .
      '" class="d-block w-100 image" alt="...">
        </div>';
    $first = false;
  }
  echo '</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next text-black" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<style>
.carousel {
    width: 100%; /* Adjust width as necessary */
    height: 500px; /* Set a fixed height */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* cover to fill the area, contain to fit inside */
}
.image {
  height: 250px !important;
}
</style>';
}

?>