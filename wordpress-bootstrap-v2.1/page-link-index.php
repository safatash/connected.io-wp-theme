<?php
/*
Template Name: Link Index
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				
				<?php get_sidebar(); // sidebar 1 ?>
							
				<div id="main" class="span8 offset4 clearfix" role="main">
				
				
						<?php if (have_posts()) :  ?>  
  					<?php while (have_posts()) : the_post(); ?>
  			
	     			<?php the_content(); ?>
				  <?php endwhile;endif; ?>

<?php rewind_posts(); ?>	
  				<?php query_posts('post_type=post&posts_per_page=10000&orderby=modified&order=DESC'); ?>
  					<?php if (have_posts()) :  ?>  
            <ul>
  					<?php while (have_posts()) : the_post(); ?>
  							<li style="margin-bottom: .5em; line-height: .8em;">
    							<a href="<?php the_permalink(); ?>">
    							 <span style="font-size: 1em;line-height: 1.3em;"><?php the_title(); ?></span>
    						  </a><br />
    						   <span style="color: #676767;font-size: .85em; display:block; margin: .3em 0;">
	     						  <?php echo get_base_url($post->post_content); ?>
</span>
    						   <span style="font-size: .7em; color: #777">

    						   added <?php the_modified_date('n/j/y'); ?> by <?php echo get_userdata($post->post_author)->user_nicename; ?>
    						   <br />
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
  				<?php endif; ?>
  				<?php wp_reset_query(); ?>
  				
					<style type="text/css">
					  #main .page_item {margin-bottom: 1.5em; color:#666; line-height: 2em; font-size: 14px}
					  #main .children .page_item { margin-bottom: 0; line-height: 1.5em}
            #main .page_item a { font-weight:bold; font-size: 18px;}
            #main .children .page_item a { font-weight:normal; font-size: 14px;}
					</style>
					<?php //wp_list_pages("title_li=&post_type=incsub_wiki&show_date=modified&date_format=(n/j/y)"); ?>
			<?php //wp_list_pages("title_li=&post_type=incsub_wiki"); ?>
			
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->
			


<?php get_footer(); ?>