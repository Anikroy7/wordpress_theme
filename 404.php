<?php
/* 
*This templete for diplaying for 401 Page
*/
get_header();
?>
<!-- This is body area -->
<section>
    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="error_page">
                        <p>404 Error - Page not found</p>
                        <h1>Opps! Look Like Something Was Wrong.</h1>
                        <div class="error_search_form">
                            <?php echo get_search_form(); ?>
                        </div>
                        <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Area Start -->
<?php
get_footer()
?>