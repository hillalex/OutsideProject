<?php
get_header();
?>

    <div class="row">
        <div class="col-md-4 hidden-sm">
			<?php get_template_part( "social-sidebar" ); ?>
        </div>
        <div class="col-md-8 col-sm-12">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1><?php single_post_title(); ?></h1>
                    </header>
				<?php endif; ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					the_content();

					// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination();
			endif;
			?>

        </div>
    </div>

<?php get_footer(); ?>