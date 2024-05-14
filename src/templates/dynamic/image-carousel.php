<link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link href="../../../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<?php
if (!function_exists('renderimaecarousel')) {
  function renderimaecarousel($images)
  {
    echo '<div id="carouselExampleIndicators" class="carousel slide">
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
        '" class="d-block w-100" alt="...">
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
</div>';
  }
}

renderimaecarousel([
  '../../../assets/images/Logo-MB-Silz-mini2.jpeg',
  '../../../assets/images/Logo-MB-Silz-mini2.jpeg',
  '../../../assets/images/Logo-MB-Silz-mini2.jpeg',
]);

?>
