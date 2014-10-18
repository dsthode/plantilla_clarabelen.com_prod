<?php get_header(); ?>

	<div class="col-sm-12">
		<div class="center-block">
			<?php if (!is_preview() && !is_user_logged_in()) { ?>
				<div style='width:728px; height:90px;' class="publi-responsive-grande">
					<ins class="adsbygoogle"
							 style="display:inline-block;width:728px;height:90px"
							 data-ad-client="ca-pub-9233923211507737"
							 data-ad-slot="2275774469"></ins>
				</div>
				<div style='width:320px; height:100px;' class="publi-responsive-peque">
					<ins class="adsbygoogle"
							 style="display:inline-block;width:320px;height:100px"
							 data-ad-client="ca-pub-9233923211507737"
							 data-ad-slot="1362312557"></ins>
				</div>
			<?php } ?>
		</div>
	</div>

<div class="row">

	<div class="col-sm-9">

<?php 
	if (!is_paged()) {
		include('featured.php');
	} 
?>
		<div class="col-sm-12 post-list">
			<?php if(have_posts()) : ?>
				<h2 class="section-label">Entradas recientes</h2>
				<?php include('post_list.php'); ?>
				<div class="navigation col-sm-12">
					<div class="col-sm-6 navigation-anteriores"><?php previous_posts_link('&laquo; Entradas anteriores'); ?></div>
					<div class="col-sm-6 navigation-siguientes"><?php next_posts_link('Entradas siguientes &raquo;'); ?></div>
				</div>
			<?php endif; ?>
		</div>

	</div>

	<?php get_sidebar(); ?>   
</div>

<?php get_footer(); ?>
