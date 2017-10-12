<?php
/**
 * The main template file.
 *
 *
 * @package wp-plumber
 */

get_header(); ?>

    <div class="page-title-area">
        <div class="container">
            <h1 class="page-title"><?php _e('Blog','wp-plumber'); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-list">
                <?php
                if ( have_posts() ) :

                    while ( have_posts() ) : the_post();

                        get_template_part( 'contents/content', get_post_format() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'contents/content', 'none' );

                endif; ?>
                <span class="clearfix"></span>
            </div>
            
            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer(); ?>