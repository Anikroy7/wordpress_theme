<?php
/* 
*This templete for diplaying the page
*/
get_header();
?>
<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php get_template_part('template_part/post_setup'); ?>
                    <div id="comments">
                        <?php comments_template(); ?>
                    </div>
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