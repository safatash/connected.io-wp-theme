<?php
/*
Template Name: Wiki Index
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				
				<?php get_sidebar(); // sidebar 1 ?>
							
				<div id="main" class="span8 offset4 clearfix" role="main">
				
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
			
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->

<?php get_footer(); ?>