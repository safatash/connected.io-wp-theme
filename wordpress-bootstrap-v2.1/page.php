<?php get_header(); 
$topic_name = $post->post_name;
?>
			
			<div id="content" class="clearfix row-fluid">
				
				<?php get_sidebar(); // sidebar 1 ?>
				<?php wp_reset_query(); ?>
							
				<div id="main" class="span8 offset4 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
          <?php if (false) : ?>
          <pre> 
					<?php print_r($post); ?>
					</pre>
				  <?php endif; ?>
				    
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
		
						
						<footer>
			
							<?php //the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					
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
					
										<hr />
					
		<?php if ($post->post_type == "incsub_wiki") : ?>	

					<div class="news" style="">

    		  <p><b>Sticky:</b></p>

          <p style="color: #999; font-size: .85em;">Tag links 'connected.io' and '<?php echo $topic_name; ?>' on <a href="http://delicious.com">Delicious</a> for them to show up here.</p>						

			<?php rewind_posts(); ?>
				
				<?php query_posts("category_name=link&order=DESC&tag=$post->post_name"); ?>
					<?php if (have_posts()) :  ?>  

          <ul>
					<?php while (have_posts()) : the_post(); ?>
							<li style="margin-bottom: .5em; line-height: 1em;">
  							<a href="<?php the_content_rss(); ?>">
  							 <b><?php the_title(); ?></b>
  						  </a><br />
  						  <span style="font-size: 70%; color: #777">
  						  <?php echo get_base_url($post->post_content); ?> | 
  						  added <?php the_modified_date(); ?> | 
  						  <?php
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      if ($tag->name != 'connected.io') {
                        //&& $tag->name != $topic_name
                        echo '#' . $tag->name . ' '; 
                      } 
                    }
                  }
                ?>
  						  </span>
  						   
						  </li>
					<?php endwhile; ?>		
					</ul>
					<hr />
				<?php endif; ?>
				<?php wp_reset_query(); ?>
						
						  <?php /*
								<?php if (get_post_meta($post->ID, 'delicious_tag', true)): ?>
								<?php  $query = get_post_meta($post->ID, 'delicious_tag', true);
								  cio_display_feed('http://feeds.delicious.com/v2/rss/nickgrossman/connectedio+'. get_post_meta($post->ID, 'delicious_tag', true), 10, $query, 'Sticky', 'http://delicious.com/tag/recent/connected.io+'. get_post_meta($post->ID, 'delicious_tag', true));
								  endif; ?>
						  */ ?>
						
						<?php if (get_post_meta($post->ID, 'hide_news', true) != 'true') : ?>
						<div class="row">
							<?php if (get_post_meta($post->ID, 'google_news_query', true)): ?>
							<div class="span4" style="width: 245px">
							
						  <?php $query = get_post_meta($post->ID, 'google_news_query', true);
						  cio_display_feed("https://news.google.com/news/feeds?hl=en&gl=us&q=$query&um=1&ie=UTF-8&output=rss", 10, $query, 'Google News', "https://www.google.com/search?hl=en&gl=us&tbm=nws&q=$query&oq=trans+pa&aq=1&aqi=d1g2d1&aql=&gs_l=news-cc.3.1.43j0l2j43i400.731.1760.0.2983.10.6.0.0.0.0.250.855.2j2j2.6.0...0.0.xEVhOVZ7k-E");  ?>
						  </div>
						<?php endif;         ?>   
						
						<?php if (get_post_meta($post->ID, 'delicious_tag', true)): ?>
						<div class="span4" style="width: 245px">
  						<?php $query = get_post_meta($post->ID, 'delicious_tag', true);
  								  cio_display_feed('http://feeds.delicious.com/v2/rss/tag/'. get_post_meta($post->ID, 'delicious_tag', true), 10, $query, 'Delicious', 'http://delicious.com/tag/recent/'. get_post_meta($post->ID, 'delicious_tag', true)); ?>
						</div>
				    <?php endif; ?>
		        
          		</div><!-- end .row -->
          		<?php endif; // if hide_news != true ?>
						</div><!-- /.news -->
		<?php endif; // wiki page ?>
					
			
					<?php comments_template(); ?>

			
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->

<?php get_footer(); ?>