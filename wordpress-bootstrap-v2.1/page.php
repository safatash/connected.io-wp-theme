<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
			<?php if (is_page('about')) : ?>
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
          <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
        </div>
			<?php endif; ?>
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<!--<div class="page-header"><h1 class="page-title" itemprop="headline">
						  /<?php echo $post->post_name; ?>
							<?php // the_title(); ?>
							</h1></div>-->
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php //the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>