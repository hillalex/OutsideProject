<?php
get_header();

get_template_part( "banner-home" )
?>
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-10">
            <h2>Latest updates</h2>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-10">

			<?php if ( have_posts() ) : ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					?>
                    <div class="news-bite">
                        <h3><?php the_title(); ?></h3>
                        <div class="date mb-2"> <?php echo get_the_date('l, F j, Y'); ?></div>
						<?php the_content(); ?>
                    </div>

					<?php
					// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination();
			endif;
			?>

        </div>
    </div>

<?php get_footer(); ?>