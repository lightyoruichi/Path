<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
//If it's a pjax request, don't include the header & footer, and no div#timeline & div#main
if(!is_pjax()):
get_header(); ?>

<div class="horizontal pre_hide" id="timeline"></div>

<div id="main" role="main" class="single">
 <?php endif; ?>
<title style="display : none"><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header class="moments_header" style="display:none">
    <div class="user-avatar tooltip-target image-pre-opacity-zero-holder">
        <?php echo get_avatar(get_the_author_meta('user_email'), 60); ?>
        <b></b>
        <div class="tooltip-block" style="opacity: 0; display: none; position: static; top: -40px; ">
            <div class="tooltip-container">
                <span class="tooltip-text"><?php the_author() ?></span>
                <span class="tooltip-pointer"></span>
            </div>
        </div>
    </div>
      <h2 class="article-title text-pre-opacity-zero"><?php the_title(); ?></h2>
    </header>
    <div class="moment-arrow"><div class="timeline-arrow"></div></div>
    <div class="moment-block height-anime-enable">
	    <div class="moment-description">
	   		<div class="moment-thought">
	    		<?php the_content('Read the rest of this entry &raquo;'); ?>
	    	</div>
	    	 <div class="moment-tags">
	             — <span class="moment-author"><?php the_author() ?></span>
	            <span class="moment-timestamp" time=""><?php echo time_ago(); ?></span>
	        </div>
	        <div class="feedback-actions">
	       		<a href="#comment" class="action action-comment"><b>Add Comment</b></a>
	       </div>
	    </div>
	    <section>
		    <?php comments_template(); ?>
	    </section>
    </div>

	<nav class="moments_nav">
		<p class="next_post_link text-pre-opacity-zero"><?php next_post_link('%link &raquo;') ?></p>
		<p class="placeholder"><?php the_title(); ?></p>
		<p class="previous_post_link text-pre-opacity-zero"><?php previous_post_link('&laquo; %link') ?></p>
	</nav> 
  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php if(!is_pjax()): ?>
</div>
<div id="sub-main" role="main" class="single" style="opacity:0"></div>

<?php get_sidebar(); ?>
<?php get_footer();
endif; ?>