<?php get_header(); ?>

			<div id="content" class="clearfix row-fluid">
				
				<div class="span4">
					<div class="well" id="timeline">
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
					/*
						wp_reset_query();
						if (have_posts()) : while (have_posts()) : the_post(); 
					?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header class="blog-post">
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>
							
							<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php edit_post_link('edit'); ?><!-- <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?>--> </p>
						
						</header> <!-- end article header -->
						
						<php the_excerpt(); ?>
						
						
					</article> <!-- end article -->
					
					<?php endwhile; ?>		
					
					<?php endif; 
					*/
					?>
				
	<?php // Get RSS Feed(s)
	include_once(ABSPATH . WPINC . '/feed.php');
	
	// Get a SimplePie feed object from the specified feed source.
	$rss = fetch_feed('http://blog.connected.io/rss');
	if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
		// Figure out how many total items there are, but limit it to 5. 
		$maxitems = $rss->get_item_quantity(5); 
	
		// Build an array of all the items, starting with element 0 (first element).
		$rss_items = $rss->get_items(0, $maxitems); 
	endif;
	?>
	
	<ul>
		<?php if ($maxitems == 0) echo '<li>No items.</li>';
		else
		// Loop through each feed item and display each item as a hyperlink.
		foreach ( $rss_items as $item ) : ?>
		<li>
			<a href='<?php echo esc_url( $item->get_permalink() ); ?>'
			title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
			<?php echo esc_html( $item->get_title() ); ?></a>
			
			<p class="meta"><?php echo $item->get_date('F j, Y'); ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
	
	<!--
	<br />
					
    <h2 class="node">connect</h2>
    
    <form class="form-inline validate" action="http://usv.us4.list-manage.com/subscribe/post?u=8421859f947e29f79daa069a1&amp;id=982a0efde2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
				  <input type="text" class="input-large" placeholder="Your email" id="mce-EMAIL" name="EMAIL">
				  <button type="submit" name="subscribe" class="btn btn-info" id="mc-embedded-subscribe">Get an occasional email</button>
				</form>
	-->
	
	</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
