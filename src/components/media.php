<?php
function renderMedia($type, $content)
{
    switch ($type) {
        case 'image':
            echo '<img src="' . htmlspecialchars($content, ENT_QUOTES, 'UTF-8') . '" class="d-block w-50" alt="...">';
            break;
        case 'youtube':
            echo '<iframe width="560" height="315" src="' . htmlspecialchars($content, ENT_QUOTES, 'UTF-8') . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
            break;
        case 'facebook':
            echo '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0" nonce="r1vN9evv"></script> <div class="fb-video" data-href="' . htmlspecialchars($content, ENT_QUOTES, 'UTF-8') . '" data-width="500" data-show-text="false"><blockquote cite="' . htmlspecialchars($content, ENT_QUOTES, 'UTF-8') . '" class="fb-xfbml-parse-ignore"><a href="' . htmlspecialchars($content, ENT_QUOTES, 'UTF-8') . '">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://facebook.com/facebook">Facebook</a> on Friday, December 5, 2014</blockquote></div>';
            break;
    }
}
?>
