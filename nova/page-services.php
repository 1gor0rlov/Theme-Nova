<?php
/* Template Name: Services */
get_header();
 ?>
		</div>

    <!-- SERVICES COVER -->
		<div class="main-container">
		   <section class="image-bg bg-dark parallax overlay pt120 pb120">
		        <div class="background-image-holder">
                <?php $image = get_field('services_cover_photo'); ?>
		            <img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="uppercase mb8"><?php the_field('services_cover_header'); ?></h2>
		                    <p class="lead mb40"><?php the_field('services_cover_paragraph'); ?></p>

		                </div>
		            </div>

		        </div>

		    </section>

        <!-- TABS -->
        <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-11">

		                    <div class="tabbed-content button-tabs vertical">
		                        <ul class="tabs">

		                            <li class="active">
		                                <div class="tab-title">
		                                    <span>History</span>
		                                </div>
		                                <div class="tab-content">
		                                    <p>
		                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
		                                    </p>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="tab-title">
		                                    <span>Approach</span>
		                                </div>
		                                <div class="tab-content">
		                                    <p>
		                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
		                                    </p>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="tab-title">
		                                    <span>Culture</span>
		                                </div>
		                                <div class="tab-content">
		                                    <p>
		                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
		                                    </p>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="tab-title">
		                                    <span>Method</span>
		                                </div>
		                                <div class="tab-content">
		                                    <p>
		                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
		                                    </p>
		                                </div>
		                            </li>
		                        </ul>
		                    </div>

		                </div>
		            </div>

		        </div>

		    </section>
    </div>

<?php get_footer(); ?>
