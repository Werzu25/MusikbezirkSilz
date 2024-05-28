
<?php
function rendertext_with_link($title, $content, $time, $link, $link_text)
{
  echo '
<div class="container">
    <div class=" align-items-center" style="height: 100vh;">
        <div class="card mb-3 border-light" style="max-width: 540px;">
            <div class="row ">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-danger">' .
    $title .
    '</h5>
                        <p class="card-text">' .
    $content .
    '</p>
                        <p class="card-text abstand"><small class="text-muted">' .
    $time .
    '</small></p>
                        <p><a class="link-opacity-100 mt-4" href="' .
    $link .
    '">' .
    $link_text .
    '</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .abstand {
        margin-bottom: +40px;
    }
</style>
';
}
?>
