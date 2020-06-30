<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="right-side">
        <div class="text-title">
            <h6>Search</h6>
        </div>
        <div class="search-box">
            <form method="post" action="<?php echo BASE_URL; ?>">
                <input type="search" name="search" placeholder="Enter to Search" required="">
            </form>
        </div>
        <div class="categorise-menu">
            <div class="text-title">
                <h6>Categories</h6>
            </div>
            <ul class="categorise-list">

                <?php foreach (array_unique($categories) as $category): ?>

                    <li><a href="#"><?php echo $category; ?> <span>(

                    <?php
                    foreach (array_count_values($categories) as $k => $getNumber) {
                        if ($k == $category) echo $getNumber;
                        else echo '';
                    }
                    ?>
                                            )</span></a></li>

                <?php endforeach; ?>

            </ul>
        </div>
        <div class="tag-list">
            <div class="text-title">
                <h6>Tags</h6>
            </div>

            <?php $string = "";
            foreach ($tags as $array) {
                $string .= implode(',', $array) . ',';
                $cleanString = trim(str_replace(', ', ',', $string), ',');
                $uniqueTags = array_unique(explode(',', $cleanString));
            }
            foreach ($uniqueTags as $tag) {
                echo '<a href="#">' . $tag . '</a>';
            }
            ?>

        </div>
    </div>
</div>