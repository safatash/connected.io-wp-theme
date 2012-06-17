			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />

				<!-- Begin MailChimp Signup Form -->
				<form class="form-inline validate" action="http://usv.us4.list-manage.com/subscribe/post?u=8421859f947e29f79daa069a1&amp;id=982a0efde2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
				  <label>Stay in touch: &nbsp;&nbsp;</label>
				  <input type="text" class="input-large" placeholder="Email" id="mce-EMAIL" name="EMAIL">
				  <button type="submit" name="subscribe" class="btn" id="mc-embedded-subscribe">Go</button>
				</form>

		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

			
					<!--<p class="attribution">&copy; <?php bloginfo('name'); ?></p>-->
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>

		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->    
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-typeahead.js"></script>
    <!--<script src="<?php echo get_template_directory_uri(); ?>/js/less-1.2.1.min.js"></script>-->
		
		<script type="text/javascript">
  $(function(){
    $('#myCarousel').carousel({
      interval: 8000
    });
    $('#timeline').height($('#main').height());
  })


  var words = [
  	'health',
  	'learning',
  	'creativity',
  	'workforce',
  	'transportation',
  	'governance',
  	'economies',
  	'innovation',
  	'innovation',
  	'IO'
  ];
  
  var counter = 0;
  
  function nextWord() {
	if (counter == words.length) return;
	
	$('#dot-something').removeClass('innovation');
	
	if (words[counter] == 'IO') {
		$('#dot-something')
			.hide()
			.addClass('io')
			.text('IO')
			.fadeIn(500,'linear')
		;
		counter++;
		return;
	}
	
	/* default */
  	$('#dot-something')
		.text(words[counter])
	;
	
  	counter++;
  }
  
  setInterval(nextWord,500);

  </script>
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>
</html>