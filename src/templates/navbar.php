<?php
$MainEntries = select('SELECT * FROM mainMenuEntry');
$content = '
<nav class="navbar navbar-expand  bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">';
foreach ($MainEntries as $MainEntry) {
  $SubEntries = select('SELECT * FROM subMenuEntry WHERE mmeId = ' . $MainEntry['mmeId']);
  $content .=
    '
                <li class="nav-item dropdown mainEntry">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="mdi ' .
    $MainEntry['icon'] .
    '"> ' .
    $MainEntry['name'] .
    '</span>
                    </a>
                    <ul class="dropdown-menu">
                    ';
  foreach ($SubEntries as $SubEntry) {
    $content .=
      '<li><a class="dropdown-item" href="index.php?sideId=' .
      $SubEntry['smeId'] .
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
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(2px);
    }
    .dropdown-item:hover {
        color: white;
        background-color: transparent;
        animation: selectedItemColorChange 0.3s;
    }
    .dropdown-item {
        color: #818181;
        background-color: transparent;
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
    @keyframes selectedItemColorChange {
        from {
            color: #818181;
        }
        to {
            color: white;
        }
    
    }
    .navbar {
      border-bottom: 1px solid #ffffff;
    }
</style>
';
echo $content;
?>
