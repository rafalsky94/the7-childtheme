<?php
/**
 * The template for displaying search results pages.
 *
 *
 * @package wp-plumber
 */

get_header(); ?>

    <div class="page-title-area">
        <div class="container">
            <h1 class="page-title"><?php _e( 'Search Results for:', 'wp-plumber' ); ?> <?php echo esc_html(get_search_query()); ?></h1>
        </div>
        <span class="page-title-overlay"></span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-list">
                <?php
                if ( have_posts() ) :

                    while ( have_posts() ) : the_post();

                        get_template_part( 'contents/content', 'search' );

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