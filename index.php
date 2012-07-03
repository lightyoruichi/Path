<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
 /*
Template Name: Archives
*/
//TODO: support pjax click on Logo and animation from * to Index.php
get_header(); ?>

<div class="vertical pre_hide" id="timeline"></div>

<div id="main" role="main" class="index">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header class="moments_header" style="display:none">
    <div class="user-avatar tooltip-target">
        <?php echo get_avatar(get_the_author_meta('user_email'), 60); ?>
        <b></b>
        <div class="tooltip-block" style="opacity: 0; display: none; position: static; top: -40px; ">
            <div class="tooltip-container">
                <span class="tooltip-text"><?php the_author() ?></span>
                <span class="tooltip-pointer"></span>
            </div>
        </div>
    </div>
      <h2 class="article-title text-pre-opacity-zero"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <!--<div class="moment-arrow"><div class="timeline-arrow"></div></div>-->
    <div class="moment-block height-anime-enable first-load-opacity-zero">
	    <div class="moment-description">
	   		<div class="moment-thought">
	    		<?php the_content('Read the rest of this entry &raquo;'); ?>
	    	</div>
	    	 <div class="moment-tags">
	             — <span class="moment-author"><?php the_author() ?></span>
	            <span class="moment-timestamp" time=""><?php echo time_ago(); ?></span>
	        </div>
	        <div class="feedback-actions">
	       		<a href="<?php the_permalink() ?>#respond" class="action action-comment"><b>Add Comment</b></a>
	       </div>
	    </div>
	    <div class="moment-arrow"><div class="timeline-arrow"></div></div>
    </div>
    
	<!--<div class="seen-it-container"></div>-->
  </article>
	
    <?php endwhile; ?>


  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>


