<?php
/**
 * The template for displaying archive pages.
 *
 * @package wpoutcast
 */

get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-lg-9"; } ?> col-md-9">
        <div class="content-container">
	        <div class="row">
				<?php 
					if( have_posts() ) :
					while( have_posts() ): the_post();
					get_template_part('content',''); 
					endwhile; endif;
				?>
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
	  <aside class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>