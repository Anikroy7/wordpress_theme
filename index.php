<?php
/* 
*This templete for diplaying the header
*/
get_header();
?>


<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) : the_post();
                    ?>
                            <div class="blog_area">
                                <div class="post_thumb">
                                    <a target="_blank" href="<?php the_permalink(); ?>">
                                        <?php echo the_post_thumbnail('post-thumbnails'); ?>
                                    </a>
                                </div>
                                <div class="post_details">
                                    <h2><a target="_blank" href="<?php the_permalink();  ?>">
                                            <?php the_title();   ?>
                                        </a></h2>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    } else {
                        echo ("No Post Found!!");
                    }
                    ?>
                    <div id="page_nav">
                        <?php if ('anik_pagenav') {
                            anik_pagenav();
                        } else { ?>
                            <?php next_post_link() ?>
                            <?php previous_post_link() ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2>This is sidebar</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer Area Start -->
<?php
get_footer()
?>