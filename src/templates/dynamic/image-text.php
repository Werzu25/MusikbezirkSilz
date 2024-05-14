<?php
function mediaLeft($title, $content, $mediaContent, $time)
{
  echo '<div class="card mb-3 border-light" style="max-width: 540px">
    <div class="row g-0">
        <div class="col-md-4">
        ' .
    $mediaContent .
    '
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-danger">' .
    $title .
    '</h5>
                <p class="card-text">' .
    $content .
    '</p>
                <p class="card-text">
                    <small class="text-muted">' .
    $time .
    '</small>
                </p>
            </div>
        </div>
    </div>
</div>';
}
function mediaRight($title, $content, $mediaContent, $time)
{
  echo '<div class="card mb-3 border-light" style="max-width: 540px">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-danger">' .
    $title .
    '</h5>
          <p class="card-text">' .
    $content .
    '</p>
          <p class="card-text">
            <small class="text-muted">' .
    $time .
    '</small>
          </p>
        </div>
      </div>
      <div class="col-md-4">
      ' .
    $mediaContent .
    '
      </div>
    </div>
  </div>';
}
?>
