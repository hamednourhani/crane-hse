<?php
/*
*
*/?>
		<div class="post-meta">
				
						<ul class="post-meta-list">
							

							
							<?php if( 'post' == get_post_type() && is_singular()){
											// $cat_list =get_the_term_list( get_the_ID(), 'news_cat', '<span class="cats-title">' . __( 'News category :', 'crane_hse' ) . '</span> ', ', ' );
											$tag_list =get_the_term_list( get_the_ID(), 'post_tag', '<span class="tags-title">' . __( 'Tags :', 'crane_hse' ) . '</span> ', ', ' );
											$cat_list =get_the_term_list( get_the_ID(), 'category', '<span class="cats-title">' . __( 'Categories :', 'crane_hse' ) . '</span> ', ', ' );
											?>
								
									
									<?php if ( $cat_list) { ?>
											

												<li class="meta-tag">
													<i class="fa fa-bookmark"></i>
													<?php echo $cat_list ;?>
												</li>
									<?php } ?>

									<?php if ( $tag_list) { ?>
											

												<li class="meta-tag">
													<i class="fa fa-tags"></i>
													<?php echo $tag_list ;?>
												</li>
									<?php } ?>
									
							<?php } ?>
													
							
							
						</ul><!--.post-meta-list-->
							
						
									
		</div><!--.post-meta-->		