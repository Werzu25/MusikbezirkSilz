<?php
function renderLink($href, $text, $style)
{
  echo '<div class="previewLink loadedLink" style="'.$style.'"><a href=' . $href . '>' . $text . '<a/></div>';
}
