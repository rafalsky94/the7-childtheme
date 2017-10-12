<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package wp-plumber
 */

get_header(); 

?>

    <div class="page-title-area">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
        <span class="page-title-overlay"></span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 content-area">
                <?php
                while ( have_posts() ) : the_post();

                get_template_part( 'contents/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                endwhile; // End of the loop.
                ?>  
                <span class="clearfix"></span>
            </div> 

            <?php get_sidebar(); ?>

            <span class="clearfix"></span>
        </div>
    </div>

<?php get_footer(); ?>