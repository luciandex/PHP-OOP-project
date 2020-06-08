<?php

foreach ($socialMediaItems as $socialMediaItem) {
    echo '<li><a href="' . $socialMediaItem->getUrl() . '"><i class="' . $socialMediaItem->getIcon() . '" aria-hidden="true"></i></a></li>';

}