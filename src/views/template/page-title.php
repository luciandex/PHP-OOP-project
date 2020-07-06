<?php

if (isset($_GET['controller']))
{

    if (isset($_GET['slug']))
    {

        if ($_GET['slug'] == 'home')
        {
            echo '';
        }
        else
        {
            goto titleSection;
        }

    }
    else {

        titleSection:

        ?>

        <!--          Page Title-->
        <section class="page-title text-center"
                 style="background-image:url(<?php echo RESOURCES_PATH; ?>images/background/3.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1><?php echo $page->getTitle(); ?>
                    </h1>
                    <ul class="title-menu clearfix">
                        <li>
                            <a href="<?php echo BASE_URL; ?>">Home &nbsp;/</a>
                        </li>
                        <li><?php echo $page->getTitle(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--            End Page Title-->

        <?php

    }

}