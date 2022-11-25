<?php
/* 
*This templete for diplaying the search result
*/
get_header();
?>


<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="search_title">
                        <h2 class="title"><?php printf(__('Serach results for: %s', 'anikroy'), get_search_query()); ?></h2>
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