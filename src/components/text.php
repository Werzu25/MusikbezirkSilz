<?php

function renderText($text)
{
  echo '<div class="previewText loadedElement"><span style="' .
    htmlspecialchars($text['style'], ENT_QUOTES, 'UTF-8') .
    '">' .
    htmlspecialchars($text['text'], ENT_QUOTES, 'UTF-8') .
    '</span></div>';
}
?>
