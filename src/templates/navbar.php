<?php
$TableFetcher = require_once "utils.php";
$MainEntries = $TableFetcher.fetchTable("");
$SubEntries = $TableFetcher.fetchTable("");
echo '
<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNav"
        >
         <ul class="navbar-nav">
        ';
foreach ($MainEntries as $MainEntry) {
  echo '<li class="nav-item border-start">
                    <a class="nav-link active"><span class="mdi'.$MainEntry[icon].'">'.$MainEntry[text].'</span></a>
                </li>';
}
foreach ($SubEntries as $SubEntry) {
  echo '<li class="nav-item dropdown border-start">
                    <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                    >
                    <span>'.$SubEntry[text].'</span>
                    </a>';
}
echo '
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
?>
