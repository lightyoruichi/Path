<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main" class="articles">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="article" >
    <header class="moments_header">
    <div class="user-cover" style="background-image: url(&#39;https://s3-us-west-1.amazonaws.com/images.path.com/photos2/69d986f3-fc84-4e7f-81f1-02a223b62dd8/original.jpg&#39;)"></div>
    <!-- <div class="user-timeline"></div> -->
    <div class="user-avatar tooltip-target">
        <?php echo get_avatar(get_the_author_meta('user_email'), 64); ?>
        <b></b>
        <div class="tooltip-block" style="opacity: 0; display: none; position: static; top: -40px; ">
            <div class="tooltip-container">
                <span class="tooltip-text"><?php the_author() ?></span>
                <span class="tooltip-pointer"></span>
            </div>
        </div>
    </div>

      <h2 class="article-title"><?php the_title(); ?></a></h2>
    </header>
    <div class="moment-block">
	    <div class="moment-description">
	   		<div class="moment-thought">
	    		<?php the_content('Read the rest of this entry &raquo;'); ?>
	    	</div>
	    	 <div class="moment-tags">
	             — <span class="moment-author"><?php the_author() ?></span>
	            <span class="moment-timestamp"><?php the_time_ago() ?></span>
	        </div>
	        <div class="feedback-actions">
	       		<a href="#respond" class="action action-comment"><b>Add Comment</b></a>
	       </div>
	    </div>
	    <!--<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>-->
	    <footer>	       
	   
	    <?php comments_template(); ?>
	    </footer>
    </div>
  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>