<?php
require_once 'wrappers/mediaContentWrapper.php';

function mediaRight($content, $link, $mediaType)
{
  $mediaContent = new MediaContentWrapper($link);
  echo '<div class="card mb-3 border-light" style="max-width: 540px">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">' .
    $content .
    '</p>
        </div>
      </div>
      <div class="col-md-4">
      ' .
    $mediaContent->chooseMediaType($mediaType) .
    '
    </div>
  </div>';
}
function mediaLeft($content, $link, $mediaType)
{
  $mediaContent = new MediaContentWrapper($link);
  echo '<div class="card mb-3 border-light" style="max-width: 540px">
      <div class="col-md-4">
      ' .
    $mediaContent->chooseMediaType($mediaType) .
    '
    </div>
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">' .
    $content .
    '</p>
        </div>
      </div>
  </div>';
}