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
			
				<div id="main" class="span12 clearfix" role="main">
				
				<!--<ul class="nav nav-pills">
				  <li class="active"><a href="">Hi</a></li>
				  <li><a href="">Hi</a></li>
				</ul>-->
				
				
    <div class="row">
	    <div class="span6">
		    <?php
		    $tmp_post = $post;
		    $query_args = array( 'suppress_filters' => false, 'post_type' => 'page', 'name' => 'intro' );
		    $pages = get_posts( $query_args );
		    if ( ! empty( $pages ) ) :
		    	setup_postdata( $pages[0] );
		    ?>
		    
		    <?php the_content(); ?>
		
			<?php 
			endif; 
			$post = $tmp_post;
			?>	
		    		
		   
		</div><!--/.span-->
		<div class="span6">
			
	    	<iframe src="http://app.sliderocket.com:80/app/fullplayer.aspx?id=57a7d7bf-8efc-4401-bab3-2a86fdecabe6" width="458" height="370" scrolling=no frameBorder="0" style="border:1px solid #ddd;"></iframe>
	    </div><!--/.span-->
	    
	</div><!--/.row -->
        
	<hr />
	
				<div class="well" id="carousel-container">
				<div id="myCarousel" class="carousel slide">
		  <!-- Carousel items -->
		  <div class="carousel-inner">

		  <?php
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

			<?php } } ?>

		  </div>
		  <!-- Carousel nav -->
		  <!--
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		-->
		</div>
		
	</div>
	<p class="pull-right">
		<a href="http://blog.connected.io/tagged/inspiration">More #inspiration</a>
	</p>	

	
	<p class="label label-warning" style="clear:both">Highlights from <a style="color: #fff; text-decoration:underline" href="http://blog.connected.io">the blog</a></p>
	
	<div class="row">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix span6'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>
							
							<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> </p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
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
					
	</div><!-- /.row -->	
	
	
					
			
	
	</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
