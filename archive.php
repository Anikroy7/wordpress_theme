<?php
/* 
*This templete for diplaying the archive
*/
get_header();
?>


<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="archive_title">
                        <?php the_archive_title('<h3 class="title">', '</h3>'); ?>
                        <?php the_archive_description('<div class="title">', '</div>'); ?>
                    </div>
                    <?php get_template_part('template_part/blog_setup'); ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar('sideber-1'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer Area Start -->
<?php
get_footer()
?>