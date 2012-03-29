<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			<div class="clearfix row-fluid">
				<div class="hero-unit">
				
					<h1><?php bloginfo('title'); ?></h1>
					
					<!--<p><?php bloginfo('description'); ?></p>-->
					<p>
					Supporting networked collaboration, creation and innovation.
					</p>
				
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
				
				<div id="myCarousel" class="carousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
              <blockquote>"The Internet isn’t really a technology. It’s a belief system, a philosophy about the effectiveness of decentralized, bottom-up innovation. And it’s a philosophy that has begun to change how we think about creativity itself."
              </blockquote>
              <cite>&mdash; <a href="http://www.nytimes.com/2011/12/06/science/joichi-ito-innovating-by-the-seat-of-our-pants.html" />Joi Ito</a></cite>
            </div>
            <div class="item">
              <blockquote>
                "One of the best parts of the todays social web is seeing startups build applications, networks and marketplaces that where people can help out others."
              </blockquote>
              <cite>&mdash; <a href="http://bijansabet.com/post/18724193618/the-social-web-helping-each-other-out-one-person-at-a">Bijan Sabet</a></cite>
            </div>
            <div class="item">
              <blockquote>
                "The next time you see a piece of legislation that has an impact on an open Internet, software or business method patents, copyright enforcement, free and fair competition, open government, or cyber security, I urge you to see it through the lens of the competition between incumbent industrial hierarchies and emergent networks."
              </blockquote>
              <cite>&mdash; <a href="http://www.usv.com/2012/03/the-freedom-to-innovate.php">Brad Burnham</a></cite>
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <p style="text-align:center">
        <a href="http://we.believeinthe.net/tagged/inspiration">More #inspiration</a>
				</p>

					<?php if (false && have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
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
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>