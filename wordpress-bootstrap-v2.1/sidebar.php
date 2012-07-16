		<?php
		global $table_prefix;
		$query = "
		 select ".$table_prefix."posts.*
      from $wpdb->posts ".$table_prefix."posts
      where post_type = 'incsub_wiki'
      and post_status = 'publish' 
      order by post_modified desc
      limit 10
    "
		?>
		<?php
     $results = $wpdb->get_results($query) or die('!'); ?>


	<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
		<div class="well">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2 class="page-title">/<?php if ($post->post_type == "incsub_wiki"):
						echo "<a href='/wiki'>wiki</a>";
						else:
						the_title();
						edit_post_link('edit',' <small>','</small>'); 
						endif;	
				?> 
				
				</h2>
				
				<?php if ($post->post_type == "incsub_wiki" || is_page('wiki') || is_page('links')): ?>
				  <center><a class="btn btn-small" href="<?php bloginfo('siteurl');?>/wp-admin/post-new.php?post_type=incsub_wiki">add a wiki page</a></center>
				  <br />
				<?php endif; ?>
				
				
			<!--<hr style="margin: 0 0 12px" />-->
			<?php endwhile; endif; ?>
			

			<?php if ($post->post_type == "incsub_wiki" || is_page('wiki') || is_page('links')): ?>

				<p><a href="<?php bloginfo('siteurl'); ?>/wiki/">All wiki pages</a> | 

            <a href="<?php bloginfo('siteurl'); ?>/links/">All links</a></p>


      
			<p><b>Recently edited:</b></p>
			
			<ul class="nav nav-tabs" id="latest-nav">
			 <li class="active">
			   <a href="#sidebar-wikis" data-toggle="tab">Wiki pages</a>
			 </li>
			 <li>
			   <a href="#sidebar-links" data-toggle="tab">Links</a>
			 </li>
			</ul>
			
			<div class="tab-content">
			   <div class="tab-pane active" id="sidebar-wikis">
  			   <ul>  
            <?php
             foreach ($results as $result):
            ?>
              <li style="margin-bottom: .5em; line-height: .85em;">
              
        							<a href="<?php echo get_permalink($result); ?>">
        							 <span style="font-size: .9em"><?php echo $result->post_title; ?></span>
        						  </a><br />
        						   <span style="font-size: .7em; color: #777"><?php echo date('n/j/y', strtotime($result->post_modified)); ?> by <?php echo get_userdata($result->post_author)->user_nicename; ?></span>
      						  </li>
            <?php endforeach; ?>
      			
            </ul>
			   </div>
         <div class="tab-pane" id="sidebar-links">
          <?php rewind_posts(); ?>	
  				<?php query_posts('post_type=post&posts_per_page=5&orderby=modified&order=DESC'); ?>
  					<?php if (have_posts()) :  ?>  
            <ul>
  					<?php while (have_posts()) : the_post(); ?>
  							<li style="margin-bottom: .5em; line-height: .85em;">
    							<a href="<?php the_content_rss(); ?>">
    							 <span style="font-size: .9em; line-height: 1.2em;"><?php the_title(); ?></span>
    						  </a><br />
    						  <span style="font-size: .85em; color: #676767">
    						    <?php echo get_base_url($post->post_content); ?>
    						  </span><br /> 
    						   <span style="font-size: .7em; color: #777">

    						  <?php the_modified_date('n/j/y'); ?> by <?php echo get_userdata($post->post_author)->user_nicename; ?>
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
         </div>
			</div>
				    
    <?php /*
				<style type="text/css">
					  #sidebar1 .page_item {margin-bottom: 1.5em; line-height: 1.2em; font-size: 12px; margin-top: .35em}
					  #sidebar1 .children .page_item { margin-bottom: 0;}
            #sidebar1 .page_item a { font-weight:bold; font-size: 16px;}
            #sidebar1 .children .page_item a { font-weight:normal; font-size: 14px; }
					</style>
					<?php wp_list_pages("title_li=&post_type=incsub_wiki&sort_column=post_title"); ?>
    */ ?>

		<?php endif; // is post_type wiki ?>

	
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