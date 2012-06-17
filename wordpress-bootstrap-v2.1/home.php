<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			<div class="clearfix row-fluid" style="display:none">
				<div class="hero-unit">
									
					<p><?php bloginfo('description'); ?></p>
				
				</div>
			</div>
			<?php
				}
			?>
			
			<div id="content" class="clearfix row-fluid">
				
				<div class="span3">
					<div class="well" id="timeline" style="border-right:none">
						&nbsp;
					</div><!-- /.well -->
				</div><!-- /.span2 -->
			
				<div id="main" class="span8 clearfix" role="main">
					
				
				<!--<ul class="nav nav-pills">
				  <li class="active"><a href="">Hi</a></li>
				  <li><a href="">Hi</a></li>
				</ul>-->
				

		    <?php
		    $tmp_post = $post;
		    $query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'intro' );
		    $pages = get_posts( $query_args );
		    if ( ! empty( $pages ) ) :
		    	setup_postdata( $pages[0] );
		    ?>				
		    <h2 class="node">hello
		    <?php edit_post_link('edit','<br /><small>','</small>', $post->ID); ?>
		    </h2>

		    
		    <?php the_content(); ?>
		
			<?php 
			endif; 
			$post = $tmp_post;
			?>	
	
	<hr />
	
	<h2 class="node"><a href="http://blog.connected.io/tagged/inspiration">#inspiration</a></h2>
				<div class="well" id="carousel-container">
				<div id="myCarousel" class="carousel slide">
		  <!-- Carousel items -->
		  <div class="carousel-inner">

		  <?php
				$tmp_post = $post;
				$query_args = array( 'suppress_filters' => false, 'post_type' => 'quote', 'showposts' => '1000' );
				$slides = get_posts( $query_args );
				if ( ! empty( $slides ) ) {
	  			$counter = 0;
	  			foreach( $slides as $post ) { setup_postdata( $post ); $counter++;
	  		?>	

			<div class="item<?php if ($counter == 1) echo ' active'; ?>">
			  <blockquote>"<?php the_content_rss(); ?>"</blockquote>
			  <cite>&mdash; <?php the_excerpt_rss(); ?></cite>
			</div>

			<?php } } 
			$post = $tmp_post;
			?>

		  </div>
		  <!-- Carousel nav -->
		  <!--
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		-->
		</div>
		
	</div>

	<hr />
		<?php
		$tmp_post = $post;
		$query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'network' );
		$pages = get_posts( $query_args );
		if ( ! empty( $pages ) ) :
			setup_postdata( $pages[0] );
		?>

		<h2 class="node">the network
		<?php edit_post_link('edit','<br /><small>','</small>', $post->ID); ?>
		</h2>
		
		<?php the_content(); ?>
	
		<?php 
		endif; 
		$post = $tmp_post;
		?>	

	<hr />
	
			<?php
		$tmp_post = $post;
		$query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'awesome' );
		$pages = get_posts( $query_args );
		if ( ! empty( $pages ) ) :
			setup_postdata( $pages[0] );
		?>
	
		<h2 class="node">/awesome
			<?php edit_post_link('edit','<br /><small>','</small>', $post->ID); ?>
		</h2>
		
		<?php the_content(); ?>
	
		<?php 
		endif; 
		$post = $tmp_post;
		?>	


	<hr />
	
		<?php
		$tmp_post = $post;
		$query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'hacking-society' );
		$pages = get_posts( $query_args );
		if ( ! empty( $pages ) ) :
			setup_postdata( $pages[0] );
		?>
		<h2 class="node">#hacksociety
		<?php edit_post_link('edit','<br /><small>','</small>', $post->ID); ?>
		</h2>
		
		<?php the_content(); ?>
	
		<?php 
		endif; 
		$post = $tmp_post;
		?>	


	<hr />

	
		<?php
		$tmp_post = $post;
		$query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'team' );
		$pages = get_posts( $query_args );
		if ( ! empty( $pages ) ) :
			setup_postdata( $pages[0] );
		?>
	
		<h2 class="node">who we are
		<?php edit_post_link('edit','<br /><small>','</small>', $post->ID); ?>
		</h2>
		
		<?php the_content(); ?>
	
		<?php 
		endif; 
		$post = $tmp_post;
		?>	
	
	
	<!--<p class="label label-warning" style="clear:both">Highlights from <a style="color: #fff; text-decoration:underline" href="http://blog.connected.io">the blog</a></p>-->
	
	<hr style="clear:both"/>
	
	<h2 class="node"><a href="http://blog.connected.io">blog</a></h2>
	

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>
							
							<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> </p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_excerpt( __("Read more &raquo;","bonestheme") ); ?>
						</section> <!-- end article section -->
						
						<?php /*
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
						*/ ?>
						
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php endif; ?>
					
    <h2 class="node">connect</h2>
    
    <form class="form-inline validate" action="http://usv.us4.list-manage.com/subscribe/post?u=8421859f947e29f79daa069a1&amp;id=982a0efde2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
				  <input type="text" class="input-large" placeholder="Your email" id="mce-EMAIL" name="EMAIL">
				  <button type="submit" name="subscribe" class="btn btn-info" id="mc-embedded-subscribe">Get an occasional email</button>
				</form>
	
	</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
