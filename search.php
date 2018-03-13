<?php
/**
 * The template for displaying search results pages.
 *
 * @package wpoutcast
 */

get_header(); 
?>
<div class="clearfix"></div>
<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-lg-9"; } ?> col-md-9">
        <div class="content-container">
	        <div class="row">
		        <?php 
					global $i;
					if ( have_posts() ) : ?>
					<h2 class="search-result">
						<?php printf( __( "Search Results for: %s", 'wpoutcast' ), '<span>' . get_search_query() . '</span>' );?>	
					</h2>
					<?php while ( have_posts() ) : the_post();  
					 get_template_part('content','');
					 endwhile; else : ?>
					<h2><?php _e('Not Found','wpoutcast'); ?></h2>
					<div class="">
					<p><?php _e('Sorry, Do Not match.','wpoutcast' ); ?>
					</p>
					<?php get_search_form(); ?>
					</div><!-- .blog_con_mn -->
					<?php endif; ?>
					<div class="col-lg-12 text-center">
			          	<?php
						//Previous / next page navigation
						the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-long-arrow-left"></i>',
						'next_text'          => '<i class="fa fa-long-arrow-right"></i>',
						'screen_reader_text' => ' ',
						) );
					?>
	         		</div>
	         </div>
     	</div>
      </div>
	  <aside class="col-md-3 col-lg-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php
get_footer();
?>