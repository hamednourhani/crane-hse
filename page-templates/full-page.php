<?php
/**
 * Template Name: Full Width Page
 */
?>
<?php get_header(); ?>

<main class="site-main single-page full-width">
	<?php if(have_posts()){ ?>
		<?php while(have_posts()) { the_post(); ?>



			<div class="site-content">

					<div class="primary">

						<article class="hentry">
							<?php if( get_post_meta(get_the_ID(),'_crane_hse_title',1 ) !== 'no'){ ?>
								<header class="article-title">
									<h1><?php the_title(); ?></h1>
								</header>
							<?php } ?>
							<main class="article-body">
								<?php the_content(); ?>

							</main>
						</article>

					</div><!-- primary -->


			</div>
		<?php } ?>

	<?php } else { ?>

		<div class="site-content">
			<section class="layout">

			</section>
		</div>

	<?php } ?>

</main>

<?php get_footer(); ?>
