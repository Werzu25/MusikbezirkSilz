<?php
function renderLink($href, $text, $style = '')
{
  echo '<a href="' .
    htmlspecialchars($href) .
    '" style="' .
    htmlspecialchars($style) .
    '">' .
    htmlspecialchars($text) .
    '</a>';
}
