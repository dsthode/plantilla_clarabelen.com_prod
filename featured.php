<?php

// WP_Query arguments
$args = array (
	'category_name' => 'destacado',
	'posts_per_page' => '9',
);

// The Query
$destacados = new WP_Query( $args );

?>

	<?php if($destacados->have_posts()) : ?>
		<div class="col-sm-12">
			<h2 class="section-label">Tutoriales destacados</h2>
			<?php $destacado_count = 1 ?>
			<?php while($destacados->have_posts()) : $destacados->the_post(); ?>
				<div class="col-sm-4">
					<div class="post-destacado center-block">
						<a href="<?php the_permalink(); ?>">
							<div class="post-destacado-thumbnail">
								<?php the_post_thumbnail('post_destacado_thumbnail', array('class' => 'center-block post-destacado-thumbnail-image')); ?>
							</div>
							<h4 class="entry-title"><?php the_title(); ?></h4>
						</a>
					</div>
				</div>
				<?php if ($destacado_count % 2 == 0) { ?>
					<div class="clearfix visible-xs"></div>
				<?php } ?>
				<?php if ($destacado_count % 3 == 0) { ?>
					<div class="clearfix hidden-xs"></div>
				<?php } ?>
				<?php $destacado_count += 1; ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

	<div class="clearfix"></div>

