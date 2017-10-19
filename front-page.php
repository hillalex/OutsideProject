<?php
get_header();

get_template_part( "banner-home" )
?>


    <div class="row">
        <div class="col-md-4 hidden-sm">
			<?php get_template_part( "social-sidebar" ); ?>
        </div>
        <div class="col-md-8 col-sm-12">

			<?php if ( have_posts() ) : ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					?>
                    <div class="news-bite">
                        <h3><?php the_title(); ?></h3>
                        <div class="date"> <?php echo get_the_date( 'l, F j, Y' ); ?></div>
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