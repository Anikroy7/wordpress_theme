<?php
/* 
*This templete for diplaying the header
*/
get_header();
?>


<h2>This is achive page</h2>
<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer Area Start -->
<?php
get_footer();
?>