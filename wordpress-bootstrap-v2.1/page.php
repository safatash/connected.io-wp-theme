<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				
				<?php get_sidebar(); // sidebar 1 ?>
							
				<div id="main" class="span8 offset4 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
						<?php if ($post->post_type == "incsub_wiki") : ?>	
							
						<div class="page-header">
							<h1 class="page-title" itemprop="headline">
							<?php the_title(); ?>
							</h1></div>
						<?php endif; ?>
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</section> <!-- end article section -->
						
						<div class="news">
							<?php if (get_post_meta($post->ID, 'google_news_query', true)):
						   $query = get_post_meta($post->ID, 'google_news_query', true);
						  cio_display_feed("https://news.google.com/news/feeds?hl=en&gl=us&q=$query&um=1&ie=UTF-8&output=rss", 10, $query, 'Google News', "https://www.google.com/search?hl=en&gl=us&tbm=nws&q=$query&oq=trans+pa&aq=1&aqi=d1g2d1&aql=&gs_l=news-cc.3.1.43j0l2j43i400.731.1760.0.2983.10.6.0.0.0.0.250.855.2j2j2.6.0...0.0.xEVhOVZ7k-E"); 
						endif;         ?>   
		
						  <?php if (get_post_meta($post->ID, 'wpcf-delicious_tag', true)):
								  $query = get_post_meta($post->ID, 'wpcf-delicious_tag', true);
								  cio_display_feed('http://feeds.delicious.com/v2/rss/tag/'. get_post_meta($post->ID, 'wpcf-delicious_tag', true), 10, $query, 'Delicious', 'http://delicious.com/tag/recent/'. get_post_meta($post->ID, 'wpcf-delicious_tag', true));
								  endif; ?>
						</div><!-- /.news -->
						
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
        
			</div> <!-- end #content -->

<?php get_footer(); ?>