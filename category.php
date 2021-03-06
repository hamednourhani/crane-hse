<?php get_header(); ?>
	
	<main class="site-main archive-articles">
		
		
		<div class="site-content">
			<section class="layout">
				
				<div class="primary">


						<?php if(have_posts()){ ?>
							<?php while(have_posts()) { the_post(); ?>

								<article class="hentry">
									<header class="article-header">

										<div class="featured-image">
											<a href="<?php the_permalink(); ?>">
												<?php echo get_the_post_thumbnail();?>
											</a>
										</div>

									</header>
									<main class="article-body">
										<div class="article-title">
											<a href="<?php the_permalink(); ?>">
												<h3><?php the_title(); ?></h3>
											</a>
										</div>
										<?php the_excerpt();?>
									</main>
								</article>
							<?php } ?>
						<?php } ?>


					<nav class="pagination">
						<?php crane_hse_pagination(); ?>
					</nav>		
				</div><!-- primary -->

				<div class="secondary">
					<?php get_sidebar(); ?>
				</div><!-- secondary -->
			</section>
		</div>
		
	</main>

<?php get_footer(); ?>