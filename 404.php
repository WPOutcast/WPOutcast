<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package wpoutcast
 */

get_header(); ?>

<!--==================== ti breadcrumb section end ====================-->
<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center wpo-section">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div class="wpo-error-404">
              <h1><?php _e('4','wpoutcast'); ?><i class="fa fa-times-circle-o"></i><?php _e('4','wpoutcast'); ?></h1>
              <h4>
                <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpoutcast' ); ?>
              </h4>
              <p>
                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wpoutcast' ); ?>
              </p>
              <a href="<?php echo esc_url(home_url());?>" onClick="history.back();" class="btn btn-theme"><?php _e('Go Back','wpoutcast'); ?></a> </div>
            <section class="error-404 not-found">
              <header class="page-header">
                <h1 class="page-title"></h1>
              </header>
              <br>
              <!-- .page-header -->
              <div class="page-content">
                <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                  <div class="wpo-sidebar">
                    <?php
						get_search_form();
					?>
              <br>
              <br>
                  </div>
                </div>
              </div>
              <!-- .page-content --> 
            </section>
            <!-- .error-404 --> 
            
          </main>
          <!-- #main --> 
        </div>
        <!-- #primary --> 
      </div>
    </div>
  </div>
</main>
<?php
get_footer();