<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Default Template -->
<div class="body-bg">
    <div class="container pt-3 md:pt-5">
        <div class="text-center text-white pt-3">
            <h1 class="display-4 font-weight-bold">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 py-5">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
