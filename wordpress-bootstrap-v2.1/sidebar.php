	<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
		<div class="well">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2 class="page-title">/<?php if ($post->post_type == "incsub_wiki"):
						echo "wiki";
						else:
						the_title();
						edit_post_link('edit',' <small>','</small>'); 
						endif;	
				?> 
				
				</h2>
				
				<?php if ($post->post_type == "incsub_wiki" || is_page('wiki')): ?>
				  <center><a class="btn btn-small" href="<?php bloginfo('siteurl');?>/wp-admin/post-new.php?post_type=incsub_wiki">add a wiki page</a></center>
				<?php endif; ?>
				
			<!--<hr style="margin: 0 0 12px" />-->
			<?php endwhile; endif; ?>
	
		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php //dynamic_sidebar( 'sidebar1' ); ?>

		<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
			
			<div class="alert-message">
			
				<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
			
			</div>

		<?php endif; ?>
		</div><!-- end .well -->
	</div>