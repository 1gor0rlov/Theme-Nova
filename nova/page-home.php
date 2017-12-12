<?php
// Template Name: Home Page
get_header(); ?>


		<div class="main-container">

			<!-- HOME COVER -->
			<section class="image-bg parallax pt240 pb180 pt-xs-80 pb-xs-80">
				<div class="background-image-holder">
					<?php $image = get_field('first_cover_image'); ?>
					<img alt="image" class="background-image" src="<?php echo $image['url']; ?>">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<h1><?php the_field('first_heading'); ?></h1>
							<p class="lead mb48 mb-xs-32">
								<?php the_field('paragraph'); ?>
							</p>
							<a class="btn btn-lg" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
						</div>
					</div>

				</div>

			</section>

      <!-- SECOND PART OF ABOUT US PAGE (1 MAIN and 2 SMALLER HEADINGS, TEXT and PICTURE) -->
			<section>
				<div class="container">
					<div class="row v-align-children">
						<div class="col-sm-4 col-md-offset-1 mb-xs-24">
							<h2 class="mb64 mb-xs-32"><?php the_field('main_heading_2'); ?></h2>
							<div class="mb40 mb-xs-24">
								<h5 class="uppercase bold mb16"><?php the_field('sub_heading_1'); ?></h5>
								<p class="fade-1-4">
									<?php the_field('paragraph_1'); ?>
								</p>
							</div>
							<div class="mb40 mb-xs-24">
								<h5 class="uppercase bold mb16"><?php the_field('sub_heading_2'); ?></h5>
								<p class="fade-1-4">
									<?php the_field('paragraph_2'); ?>
								</p>
							</div>
						</div>
						<div class="col-sm-5 col-sm-6 col-sm-offset-1 text-center">
							<?php $image = get_field('image_2') ?>
							<img alt="Screenshot" src="<?php echo $image['url']; ?>">
						</div>
					</div>

				</div>

			</section>

			<!-- THIRD PART OF HOME PAGE (1 HEADING and TEXT OVER PICTURE) -->
			<section class="image-bg overlay parallax pt180 pb180 pt-xs-80 pb-xs-80">
				<div class="background-image-holder">
					<?php $image = get_field('cover_2'); ?>
					<img alt="image" class="background-image" src="<?php echo $image['url']; ?>">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-6 col-md-push-7 col-sm-push-6">
							<h2><?php the_field('main_heading_3'); ?></h2>
							<p class="lead mb48 mb-xs-32">
								<?php the_field('paragraph_3'); ?>
							</p>
						</div>
					</div>

				</div>

			</section>

			<!-- FOURTH PART OF HOME PAGE (SLIDER WITH 4 HEADINGS AND TEXT AROUND) -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-push-3 text-center">
							<div class="image-slider slider-paging-controls controls-outside">
								<ul class="slides">
									<?php
									// check if the repeater field has rows of data
									if( have_rows('slider') ):

									 	// loop through the rows of data
									    while ( have_rows('slider') ) : the_row();
											$image = get_sub_field('slider_image');
											?>

											<li class="mb32">
												<img alt="App" src="<?php echo $image['url']; ?>">
											</li>

											<?php
									    endwhile;
									endif;

									?>
								</ul>
							</div>
						</div>

						<?php

							// check if the repeater field has rows of data
							if( have_rows('text_around_slider') ):
								$i = 1;
							 	// loop through the rows of data
							    while ( have_rows('text_around_slider') ) : the_row();

											switch ($i) {
											    case 1:
																	?>
																		<div class="col-md-3 col-md-pull-6">
																			<div class="mt80 mt-xs-80 text-right text-left-xs">
																				<h5 class="uppercase bold mb16"><?php the_sub_field('repeater_heading'); ?></h5>
																				<p class="fade-1-4">
																					<?php the_sub_field('repeater_text'); ?>
																				</p>
																			</div>
																		</div>
																	<?php
											        break;
											    case 2:
											        		?>
																		<div class="col-md-3">
																			<div class="mt80 mt-xs-0">
																				<h5 class="uppercase bold mb16"><?php the_sub_field('repeater_heading'); ?></h5>
																				<p class="fade-1-4">
																					<?php the_sub_field('repeater_text'); ?>
																				</p>
																			</div>
																		</div>
																	<?php
											        break;
											    case 3:
																	?>
																		<div class="col-md-3 col-md-pull-6">
																			<div class="mt80 mt-xs-0 text-right text-left-xs">
																				<h5 class="uppercase bold mb16"><?php the_sub_field('repeater_heading'); ?></h5>
																				<p class="fade-1-4">
																					<?php the_sub_field('repeater_text'); ?>
																				</p>
																			</div>
																		</div>
																	<?php
											        break;
													case 4:
																	?>
																			<div class="col-md-3">
																				<div class="mt80 mt-xs-0">
																					<h5 class="uppercase bold mb16"><?php the_sub_field('repeater_heading'); ?></h5>
																					<p class="fade-1-4">
																						<?php the_sub_field('repeater_text'); ?>
																					</p>
																				</div>
																			</div>
																	<?php
															break;
											    default:

											}
											$i++;


							    endwhile;

							endif;

							?>

					</div>

				</div>

			</section>

			<!-- FEATURES WITH 3 HEADINGS AND TEXT -->
			<section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-gallery icon fade-3-4 inline-block mb16"></i>
		                        <h4><?php the_field('feature_heading_1'); ?></h4>
		                        <p>
															<?php the_field('feature_text_1'); ?>
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-package icon fade-3-4 inline-block mb16"></i>
		                        <h4><?php the_field('feature_heading_2'); ?></h4>
		                        <p>
															<?php the_field('feature_text_2'); ?>
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-layers icon fade-3-4 inline-block mb16"></i>
		                        <h4><?php the_field('feature_heading_3'); ?></h4>
		                        <p>
															<?php the_field('feature_text_3'); ?>
		                        </p>
		                    </div>
		                </div>
		            </div>

		        </div>

		    </section>

				<!-- LAST PART OF HOME PAGE WITH HEADING, TEXT, BUTTON AND PICTURE -->
				<section class="bg-dark pb0">
				<div class="container">
					<div class="row mb64 mb-xs-32">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1 class="large"><?php the_field('last_part_heading'); ?></h1>
							<p class="lead mb48 mb-xs-32 fade-1-4">
								<?php the_field('last_part_text'); ?>
							</p>
							<a class="btn btn-lg btn-filled" href="<?php the_field('last_part_button_link'); ?>"><?php the_field('last_part_button'); ?></a>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<?php $image = get_field('last_part_picture'); ?>
							<img alt="App" src="<?php echo $image['url']; ?>">
						</div>
					</div>
				</div>
			</section>



<?php get_footer(); ?>
