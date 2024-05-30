
<?php function rendertext_with_link($title, $content, $time, $link, $link_text)
{
  echo '
<div class="container-fluid" style="width: 100%;">
    <div class=" align-items-center">
        <div class="card mb-3 border-light" >
            <div class="row ">
                <div class="col-md-8">
                    <div class="card-body" >
                        <h5 class="card-title text-danger  "  >' .
    $title .
    '</h5>
                        <p class="card-text "   >' .
    $content .
    '</p>
                        <p class="card-text spacer editable"><small class="text-muted">' .
    $time .
    '</small></p>
                        <p class="editable"><a class="link-opacity-100 " href="' .
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
    .spacer {
        margin-bottom: 20px;
    }
</style>
';
}
?>
