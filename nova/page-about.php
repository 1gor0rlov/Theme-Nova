<?php
// Template Name: About Us
get_header(); ?>

		<div class="main-container">

        <!-- ABOUT US COVER -->
		    <section class="page-title page-title-1 image-bg overlay parallax">
		        <div class="background-image-holder">
                <?php $image = get_field('about_cover_photo'); ?>
		            <img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="uppercase mb0"><?php the_field('about_cover_heading'); ?><br></h2>
		                </div>
		            </div>

		        </div>


		    </section><a id="image-inline-right" class="in-page-link"></a>

      <!-- FIRST PART OF ABOUT US PAGE (HEADING, TEXT and PICTURE) -->
			  <section>
		        <div class="container">
		            <div class="row v-align-children">
		                <div class="col-sm-5 mb-xs-24 col-md-5">
		                    <h3><?php the_field('about_first_heading'); ?></h3>
		                    <p>
                          <?php the_field('about_first_text'); ?>
		                    </p>
		                </div>
		                <div class="col-md-offset-1 col-sm-6 col-sm-offset-1 text-center col-md-6">
                        <?php $image = get_field('about_first_picture'); ?>
		                    <img class="cast-shadow" alt="Screenshot" src="<?php echo $image['url']; ?>">
		                </div>
		            </div>

		        </div>

		    </section>

        <!-- FIRST DIVIDING IMAGE -->
        <section class="page-title page-title-4 image-bg overlay parallax">
		        <div class="background-image-holder">
                <?php $image = get_field('about_first_div_picture'); ?>
		            <img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
		        </div>
		    </section>

        <!-- SECOND PART OF ABOUT US PAGE (HEADING, TEXT and PICTURE) -->
        <section>
		        <div class="container">
		            <div class="row v-align-children">
		                <div class="col-sm-6 text-center mb-xs-24 col-md-6">
                        <?php $image = get_field('about_second_picture'); ?>
		                    <img class="cast-shadow" alt="Screenshot" src="<?php echo $image['url']; ?>">
		                </div>
		                <div class="col-md-offset-1 col-sm-5 col-sm-offset-1 col-md-5">
		                    <h3><?php the_field('about_second_heading'); ?></h3>
		                    <p>
                          <?php the_field('about_second_text'); ?>
		                    </p>

		                </div>
		            </div>

		        </div>
        </section>

        <!-- SECOND DIVIDING IMAGE -->
        <section class="page-title page-title-4 image-bg overlay parallax">
		        <div class="background-image-holder">
                <?php $image = get_field('about_second_div_picture'); ?>
		            <img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
		        </div>


		    </section>

        <!-- THIRD PART OF ABOUT US PAGE (HEADING, TEXT and PICTURE) -->
        <section>
		        <div class="container">
		            <div class="row v-align-children">
		                <div class="col-sm-5 mb-xs-24 col-md-5">
		                    <h3><?php the_field('about_third_heading'); ?></h3>
		                    <p>
		                       <?php the_field('about_third_text'); ?>
		                    </p>
		                </div>
		                <div class="col-md-offset-1 col-sm-6 col-sm-offset-1 text-center col-md-6">
                        <?php $image = get_field('about_third_picture'); ?>
		                    <img class="cast-shadow" alt="Screenshot" src="<?php echo $image['url']; ?>">
		                </div>
		            </div>

		        </div>
        </section>

    </div>

    <?php get_footer(); ?>
