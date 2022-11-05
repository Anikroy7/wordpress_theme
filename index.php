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

<body class="" <?php body_class() ?>>
    <div id="header_area">
        <div class="row">
            <div class="col-md-3">
                <a href="">
                    <img src="<?php echo get_theme_mod('anik_logo'); ?>" alt="">
                </a>
            </div>
            <div class="col-md-9">
                <ul id="nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Midea</a></li>
                    <li><a href="">Download</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Services</a>
                        <ul>
                            <li><a href="">Dropdown menu</a></li>
                            <li><a href="">Dropdown menu</a></li>
                            <li><a href="">Dropdown menu</a></li>
                            <li><a href="">Dropdown menu</a></li>
                            <li><a href="">Dropdown menu</a></li>
                            <li>
                                <a href="">Dropdown menu</a>
                                <ul>
                                    <li><a href="">Dropdown menu</a></li>
                                    <li><a href="">Dropdown menu</a></li>
                                    <li><a href="">Dropdown menu</a></li>
                                    <li><a href="">Dropdown menu</a></li>
                                    <li><a href="">Dropdown menu</a></li>
                                    <li><a href="">Dropdown menu</a>
                                </ul>

                            </li>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <?php wp_footer() ?>
</body>

</html>