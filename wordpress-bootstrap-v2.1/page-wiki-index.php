<?php
/*
Template Name: Wiki Index
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				
				<?php get_sidebar(); // sidebar 1 ?>
							
				<div id="main" class="span8 offset4 clearfix" role="main">
				
				
				<?php /*
				  <?php query_posts('post_type=incsub_wiki&posts_per_page=10000&orderby=modified&order=DESC'); ?>

					<?php if (have_posts()) :  ?>
          
          <ul>
          
					<?php while (have_posts()) : the_post(); ?>
					
						
							<li style="margin-bottom: 1em;">
  							<a href="<?php the_permalink(); ?>">
  							 <b><?php the_title(); ?></b>
  						  </a><br />
  						   <em>edited <?php the_modified_date(); ?></em>
						  </li>
					
					<?php //comments_template(); ?>
					
					<?php endwhile; ?>		
					
					</ul>
					
					<?php endif; ?>
					<?php wp_reset_query(); ?>
					*/ ?>
					<style type="text/css">
					  #main .page_item {margin-bottom: 1.5em; color:#666; line-height: 2em; font-size: 14px}
					  #main .children .page_item { margin-bottom: 0; line-height: 1.5em}
            #main .page_item a { font-weight:bold; font-size: 18px;}
            #main .children .page_item a { font-weight:normal; font-size: 14px;}
					</style>
					<?php //wp_list_pages("title_li=&post_type=incsub_wiki&show_date=modified&date_format=(n/j/y)"); ?>
			<?php wp_list_pages("title_li=&post_type=incsub_wiki"); ?>
			
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->
			


<?php get_footer(); ?>