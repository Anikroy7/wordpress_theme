<?php

/* 
* This is for front page
*/

get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front page</title>
</head>

<body>
    <div id="service_area">
        <div class="container">
            <div class="row">
                <?php
                query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged' . get_query_var('post'));
                if (have_posts()) :
                    while (have_posts()) : the_post();

                ?>
                        <div class="col-md-4">
                            <div class="child_service">
                                <h2><?php the_title(); ?></h2>
                                <?php echo the_post_thumbnail('service'); ?>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</body>

</html>


<?php
get_footer();
