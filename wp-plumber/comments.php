<?php
/**
 * The template for displaying comments.
 *
 *
 * @package wp-plumber
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>

<?php if ( have_comments() ) : ?>
  <div class="commentlist">
    <h3 id="comments-title"><?php comments_number( __( '<span>No</span> Comments', 'wp-plumber' ), __( '<span>1</span> Comment', 'wp-plumber' ), _n( '<span>%</span> Comments', '<span>%</span> Comments', get_comments_number(), 'wp-plumber' ) );?></h3>
    <?php
      wp_list_comments( array(
      'style'             => 'div',
      'short_ping'        => true,
      'avatar_size'       => 100,
      'callback'          => 'wp_plumber_comments',
      'type'              => 'all',
      'reply_text'        => 'Reply',
      'page'              => '',
      'per_page'          => '',
      'reverse_top_level' => null,
      'reverse_children'  => '',
      'max_depth'         => 3
      ) );
    ?>
  </div>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav class="navigation comment-navigation" role="navigation">
      <div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'wp-plumber' ) ); ?></div>
      <div class="comment-nav-next"><?php next_comments_link( __( 'Next Comments &rarr;', 'wp-plumber' ) ); ?></div>
    </nav>
  <?php endif; ?>

  <?php if ( ! comments_open() ) : ?>
  <p class="no-comments"><?php _e( 'Comments are closed.' , 'wp-plumber' ); ?></p>
  <?php endif; ?>

<?php endif; ?>

<?php 
$args = array(
'title_reply'       => __( 'Leave a Comment', 'wp-plumber' ),
'title_reply_to'    => __( 'Leave a Reply to %s', 'wp-plumber' ),
'cancel_reply_link' => __( 'Cancel Reply', 'wp-plumber' ),
'label_submit'      => __( 'Post Comment', 'wp-plumber' ),
);

comment_form($args); ?>