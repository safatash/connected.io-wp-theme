<?php get_header(); ?>

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
			query_posts('post_type=page&meta_key=homepage-feature&meta_value=true');
			if (have_posts()) :
				while(have_posts()):
					the_post();
			?>
			
			<h2 class="node">
				<?php io_the_title(); ?><br />
				<small><?php edit_post_link('edit'); ?></small>	
			</h2>
			
			<?php the_content(); ?>
			<?php //print_r($post); ?>
			
			<?php if($post->post_name == 'inspiration') :
					io_show_quotes();
				  endif; ?>
			
			<hr style="clear:both"/>
			<?php
				endwhile;
			endif;
			?>
				
		    	
			
	
	<h2 class="node"><a href="http://blog.connected.io">blog</a></h2>
	

					<?php 
						wp_reset_query();
						if (have_posts()) : while (have_posts()) : the_post(); 
					?>
					
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
