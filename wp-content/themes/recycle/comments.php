<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Recycle
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

<div id="comments" class="blog-comment-form wow fadeInLeft">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h4>
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'recycle' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h4>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'recycle' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'recycle' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'recycle' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'recycle' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'recycle' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'recycle' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().
?>
<?php 

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'recycle' ); ?></p>
	<?php
	endif;
	 $comments_args = array(
	 'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' =>
		  '<div class="col-lg-12 col-md-12 col-sm-12">'.
		  '<div class="form-group">'.
		  '<input id="author" class="form-control" placeholder="Your Name* " name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		  '" size="30" /></div></div>',
	
		'email' =>
		  '<div class="col-lg-6 col-md-6 col-sm-6">'.
		  '<div class="form-group">'.
		  '<input id="email" class="form-control" placeholder="Your Email Address* " name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		  '" size="30"/></div></div>',
	
		'url' =>
		  '<div class="col-lg-6 col-md-6 col-sm-6">'.
		  '<div class="form-group">'.
		  '<input id="url" class="form-control" placeholder="Your Website URL" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		  '" size="30" /></div></div>',
		  
		
		)
	  ),
	  // change the title of send button 
			'label_submit'=>'Submit',
			// change the title of the reply section
			'title_reply'=>'Add a comment',
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_form_top' => 'ds',
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			// redefine your own textarea (the comment body)
	  		'comment_field' => '<div class="col-lg-12"><div class="form-group"><textarea class="form-control" style="height:150px" id="comment" name="comment" placeholder="Your Comment* " aria-required="true"></textarea></div></div>', 
	);
	comment_form($comments_args);
	?>

</div><!-- #comments -->
