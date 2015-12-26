<?php get_header(); ?>
	
	<main class="site-main single-article">
		<?php if(have_posts()){ ?>
			<?php while(have_posts()) { the_post(); ?>

				
				
				<div class="site-content">
					<section class="layout">
						
						<div class="primary">

							<article class="hentry">
								<header class="article-header">

											<div class="featured-image">
												<?php echo get_the_post_thumbnail();?>
											</div>
											<div class="article-title">
													<h1><?php the_title(); ?></h1>
												<?php get_template_part('library/post','meta');?>
											</div>


								</header>
								<main class="article-body">
									<?php the_content();?>
									<div class="comment-area">
										<?php comments_template(); ?>
									</div>

								</main>
							</article>
											
						</div><!-- primary -->

						<div class="secondary">
							<?php get_sidebar(); ?>
						</div><!-- secondary -->
					</section>
				</div>
			<?php } ?>

		<?php } else { ?>	
			
			<div class="site-content">
				<section class="layout">
					<div class="secondary">
						<?php get_sidebar(); ?>
					</div><!-- secondary -->
				</section>
			</div>

		<?php } ?>
		
	</main>

<?php get_footer(); ?>