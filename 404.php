<?php
/* 
*This templete for diplaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body class="<?php body_class() ?>">

    <!-- This is header area -->
    <header id="header_area" class="<?php echo get_theme_mod('anik_menu_position'); ?>">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_theme_mod('anik_logo'); ?>" alt="">
                </a>
            </div>
            <div class="col-md-9">

                <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'));   ?>

            </div>
        </div>
    </header>
    <h3>This is 404 page</h3>

    <!-- Footer Area Start -->

    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php echo get_theme_mod('anik_copyright_section'); ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>

</html>