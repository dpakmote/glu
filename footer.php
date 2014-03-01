<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package glu
 */
?>
	</article><!-- #main -->
	</div><!-- #primary -->
	</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
	</footer>

        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('.video').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
        $('.image-enlarge').magnificPopup({ 
          type: 'image'
        });
        $('.gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{
    enabled:true
  }
        });
      });
    </script>

<?php wp_footer(); ?>
    </body>
</html>