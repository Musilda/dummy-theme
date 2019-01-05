<?php get_header(); ?>
 
	<div id="primary" class="content-area col-8">
 
 		<main id="main" class="site-main" role="main">
			
			<div class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
				</header><!-- .page-header -->
 
   				<div class="page-content">
					
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'theme' ); ?></p>

					<?php
						get_search_form();
					?>
					
				</div><!-- .page-content -->

			</div>
  			
		</main>
 
	</div>
	<div class="col-4">
 
		<?php get_sidebar(); ?>
 
	</div>

<?php get_footer(); 
