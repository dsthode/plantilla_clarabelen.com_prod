<?php get_header(); ?>
 
	<div class="col-sm-12">
		<div class="center-block">
			<?php if (!is_preview() && !is_user_logged_in()) { ?>
				<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9233923211507737" data-ad-slot="2275774469"></ins>
			<?php } ?>
		</div>
	</div>

<div class="row">

	<div class="col-sm-9">
         
		<div class="col-sm-12 post-list">

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="section-label"><?php single_cat_title(); ?></h2>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="section-label">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="section-label">Archive for <?php the_time('F jS, Y'); ?>:</h2>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="section-label">Archive for <?php the_time('F, Y'); ?>:</h2>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="section-label">Archive for <?php the_time('Y'); ?>:</h2>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="section-label">Author Archive</h2>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="section-label">Blog Archives</h2>
    <?php } ?>

		<div class="col-sm-12">
			<div style="width:468px;margin:0 auto">
				<?php if (!is_preview() && !is_user_logged_in()) { ?>
					<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-9233923211507737" data-ad-slot="6552603015"></ins>
				<?php } ?>
			</div>
		</div>
			<?php if(have_posts()) : ?>
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

