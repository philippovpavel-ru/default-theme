<?php get_header(); ?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php echo 'Oops! That page can&rsquo;t be found.'; ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php echo 'It looks like nothing was found at this location. Maybe try one of the links below or a search?'; ?></p>

					<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
