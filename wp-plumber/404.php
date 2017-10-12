<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package wp-plumber
 */

get_header(); 


?>

<div class="page-title-area">
    <div class="container">
        <h1 class="page-title"><?php _e('404','wp-plumber'); ?></h1>
    </div>
    <span class="page-title-overlay"></span>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-title"><?php _e( 'Not Found', 'wp-plumber' ); ?></h1>
            <p>
            <?php _e( 'The article you were looking for was not found. You may want to check your link or perhaps that page does not exist anymore. Maybe try a search?', 'wp-plumber' ); ?>
            </p>
            <?php get_search_form(); ?>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>