<?php

class MediaContentWrapper
{
    var $link;
    var $image;
    var $facebookVideo;
    var $youtubeVideo;

    function __construct($link)
    {
        $this->link = $link;
        $this->image = new image($link);
        $this->facebookVideo = new facebookVideo($link);
        $this->youtubeVideo = new youtubeVideo($link);
    }

    function chooseMediaType($mediaType)
    {
        switch ($mediaType) {
            case MediaType::Image:
                return $this->image->renderImage();
            case MediaType::FacebookVideo:
                return $this->facebookVideo->renderFacebook();
            case MediaType::YoutubeVideo:
                return $this->youtubeVideo->renderYoutube();
        }
    }
}
enum MediaType
{
    case Image;
    case FacebookVideo;
    case YoutubeVideo;
}

class facebookVideo
{
    var $videoUrl;

    function __construct($videoUrl)
    {
        $this->videoUrl = $videoUrl;
    }

    function renderFacebook() {
        return '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0" nonce="r1vN9evv"></script> <div class="fb-video" data-href="' . $this->videoUrl . '" data-width="500" data-show-text="false"><blockquote cite="' . $this->videoUrl . '" class="fb-xfbml-parse-ignore"><a href="' . $this->videoUrl . '">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://facebook.com/facebook">Facebook</a> on Friday, December 5, 2014</blockquote></div>';
    }
}
class youtubeVideo
{
    var $videoUrl;
    function __construct($videoUrl)
    {
        $this->videoUrl = $videoUrl;
    }
    function renderYoutube()
    {
        return '<iframe width="560" height="315" src='.$this->videoUrl.' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
    }
}
class image
{
    var $imageUrl;
    function renderImage()
    {
        return '<img src="' . $this->imageUrl . '" class="d-block w-100" alt="...">';
    }

    public function __construct($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
}