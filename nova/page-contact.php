<?php
/* Template Name: Contact */
get_header();
 ?>

		<div class="main-container">
		<section class="page-title page-title-1">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="uppercase mb0">CONTACT US</h2>
                        <br>
                        <hr>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
		                </div>
		            </div>

		        </div>


		    </section>



        <section class="image-square right">
		        <div class="col-md-6 p0 image">
		            <div class="map-holder background-image-holder">
		                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.4086040735224!2d144.976411!3d-37.87412599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66889faebddf1%3A0xcc68084b44a30620!2sRiva+St+Kilda!5e0!3m2!1sen!2sau!4v1427779902899"></iframe>
		            </div>
		        </div>
		        <div class="col-md-6 content">
              <?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form 1"]' ); ?>
		        </div>
		    </section>
        <br>
        <hr>
        <br>
      </div>

<?php get_footer(); ?>
