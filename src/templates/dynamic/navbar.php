<?php
$MainEntries = fetchTable('mainMenuEntry');
$content = '
<nav class="navbar navbar-expand  bg-body-secondary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">';
foreach ($MainEntries as $MainEntry) {
  $sql = 'SELECT * FROM subMenuEntry where mainID = ' . $MainEntry['mainID'];
  $SubEntries = customSelect($sql);
  $content .=
    '
                <li class="nav-item dropdown border-start mainEntry">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="mdi ' .
    $MainEntry['icon'] .
    '">' .
    $MainEntry['name'] .
    '</span>
                    </a>
                    <ul class="dropdown-menu">
                    ';
  foreach ($SubEntries as $SubEntry) {
    $content .=
      '<li><a class="dropdown-item" href="index.php?sideId=' .
      $SubEntry['subID'] .
      '">' .
      $SubEntry['name'] .
      '</a></li>';
  }
  $content .= '
                   </ul>
                </li>
                ';
}

$content .= '
            </ul>
        </div>
    </div>
</nav>
<style lang="scss">
    .dropdown-menu {
        &.show {
            display: block;
            animation: dropdown-expand 0.5s;
        }
    }
    @keyframes dropdown-expand {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }
        to {
            opacity: 1;
            transform: translateY(0px);
        }
    }
</style>
';
echo $content;
