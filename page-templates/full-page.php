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


						<article class="hentry">
							<main class="article-body">
								<?php the_content(); ?>

							</main>
						</article>



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
