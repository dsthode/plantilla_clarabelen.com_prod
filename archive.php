<?php get_header(); ?>

<div class="row">
	<div class="col-sm-9">
		<?php if(have_posts()) : ?>
			<?php if (is_day()) : ?>
				<h2>Archivo de <?php the_time('S/F/Y'); ?></h2>
			<?php elseif (is_month()) : ?>
				<h2>Archivo de <?php the_time('F Y'); ?></h2>
			<?php elseif (is_year()) : ?>
				<h2>Archivo de <?php the_time('Y'); ?></h2>
			<?php endif; ?>
			<?php include('post_list.php'); ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>   
</div>

<?php get_footer(); ?>
