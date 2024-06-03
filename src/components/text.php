<?php

function renderText($text)
{
  echo '<div class="previewText loadedElement"><span style="' . $text["style"] .'">' . $text["text"] . '</span></div>';
}
