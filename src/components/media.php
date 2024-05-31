<?php

function renderMedia($type, $content)
{
  switch ($type) {
    case 'image':
      echo '<img src="' . $content . '" class="d-block w-100" alt="...">';
      break;
    case 'youtube':
      '<iframe width="560" height="315" src=' .
        $content .
        ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
      break;
    case 'facebook':
      '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0" nonce="r1vN9evv"></script> <div class="fb-video" data-href="' .
        $content .
        '" data-width="500" data-show-text="false"><blockquote cite="' .
        $content .
        '" class="fb-xfbml-parse-ignore"><a href="' .
        $content .
        '">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://facebook.com/facebook">Facebook</a> on Friday, December 5, 2014</blockquote></div>';
      break;
  }
}
