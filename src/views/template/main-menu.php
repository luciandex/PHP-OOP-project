<?php

// identify current page from URI and highlight the menu item text to the user
$requestUri = $_SERVER['REQUEST_URI'];
$uri = preg_replace('((.*)=)', '', "$requestUri");

?>
<!--Main Header-->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?php foreach ($menuItems as $menuItem) {
                    echo '<li ';
                    if ($menuItem->getText() == $uri || ($menuItem->getText() == 'home' && $uri == 'index')) {
                        echo 'class="active"';
                    }
                    echo '><a href="' . $menuItem->getUrl() . '">' . $menuItem->getText() . '</a></li>';
                }
                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

