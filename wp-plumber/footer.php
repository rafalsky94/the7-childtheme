<?php
/**
 * The template for displaying the footer.
 *
 * @package wp-plumber
 */

?>  
            </div>

            <footer class="footer" role="contentinfo">
                <?php
                /**
                 * Functions hooked in to wp_plumber_footer action.
                 *
                 * @hooked wp_plumber_template_footer_widgets -10 
                 * @hooked wp_plumber_template_copyright -15
                 */ 
                    do_action('wp_plumber_footer'); 
                ?>
            </footer>

        <?php wp_footer(); ?>
    </body>

</html>