<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
  <!--<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>-->
<!--
  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>
-->

  <ol class="commentlist comment-set">
  <?php wp_list_comments('type=comment&callback=overpath_comment'); ?>
  </ol>
<!--
  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>
 -->
 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="comment-box">
	<?php if ( is_user_logged_in() ) : ?>
		<div class="user user-small comment-user-preview">
		<?php global $user_email;
		      get_currentuserinfo();
		echo get_avatar($user_email , 32); 
		?>
		 <b class="user-border"></b>
        </div>
	<?php endif; ?>
  <!--<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>-->

  <div class="cancel-comment-reply">
    <small><?php cancel_comment_reply_link(); ?></small>
  </div>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">

  <!--<p id="allowed_tags"><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->
  	<div id="small-author-avatar"></div>
	<div class="comment-holder">
	<div class="comment-sizer">And a comment!</div>
	<textarea class="comment-field border-anime-enable" name="comment" id="comment" rows="1" placeholder="Add a comment..." tabindex="1"></textarea>
	</div>
	
	<?php if ( is_user_logged_in() ) : ?>

 <!-- <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>-->

  <?php else : ?>
	<div class="comment-info">
	<div class="comment-holder">
	<div class="comment-sizer">Your name</div>
    <input class="comment-field input-text" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> placeholder="Your name" />
  </div>

	<div class="comment-holder">
	<div class="comment-sizer">Your mail (will not be published)</div>
    <input class="comment-field input-text" type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?> placeholder="Your mail (will not be published)" />
  </div>

	<div class="comment-holder">
	<div class="comment-sizer">Your website</div>
    <input class="comment-field input-text" type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="4" placeholder="Your website" />
  </div>
  </div>
  <?php endif; ?>
	

  <input name="submit" class="action" type="submit" id="submit" tabindex="5" value="Submit" />
  <?php comment_id_fields(); ?>
  <?php do_action('comment_form', $post->ID); ?>

  </form>

  <?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
