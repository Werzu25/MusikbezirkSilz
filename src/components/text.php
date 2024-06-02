<?php

function renderText($text)
{
  echo '<div class="previewText"><span style="' . $text["style"] .'">' . $text["text"] . '</span></div>';
}
