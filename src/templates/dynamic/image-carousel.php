<?php

function renderimaecarousel ($images) {
    $i=0;

    echo '<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
    foreach ($images as $image) {
        $i++;
        echo ' <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" aria-label="Slide ' . $i + 1 . '"></button>';
    }
    echo '</div>
    <div class="carousel-inner">';
    foreach ($images as $image) {
        echo ' <div class="carousel-item">
            <img src="' . $image . '" class="d-block w-100" alt="...">
        </div>';
    }


    echo ' </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>';
}
?>