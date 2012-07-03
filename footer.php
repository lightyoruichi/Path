<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
  <footer>
      <!--
      <p>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
         <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. 
      </p>
      -->
  </footer>
</div> <!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/jquery-1.7.1.min.js"><\/script>')</script>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.pjax.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.pageslide.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.transition.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.smoothscroll.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.autoresize.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/audiojs/audio.min.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.lightbox_me.min.js") ?>

  <!--<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/plugins.js") ?>-->
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/script.js") ?>


  <!--[if lt IE 7 ]>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/dd_belatedpng.js") ?>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <!-- <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/profiling/yahoo-profiling.min.js") ?>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/profiling/config.js") ?> -->
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->

  <?php wp_footer(); ?>

</body>
</html>