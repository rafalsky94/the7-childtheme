<?php
/**
 * Template part for displaying single content in single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-plumber
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-plumber' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    
    <footer class="entry-footer">
        <div class="cat-tag-links">
            <p>
            <?php
                $category_list = get_the_category_list( __( ', ', 'wp-plumber' ) );
                printf( __('Filed under: %s', 'wp-plumber'),
                $category_list
                );
            ?>
            </p>
            
            <?php if(has_tag()): ?>
            <p>
                <?php
                    esc_html_e('Tags: ','wp-plumber');
                   echo get_the_tag_list('',',','');
                ?>
             </p>
            <?php endif; ?>
        </div>
        <?php do_action('wp_plumber_relate_posts'); 

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif; ?>

    </footer><!-- .entry-footer -->
    
</article><!-- #post-## -->