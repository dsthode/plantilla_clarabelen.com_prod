<?php get_header(); ?>

	<div class="col-sm-12">
		<div class="center-block">
			<?php if (!is_preview() && !is_user_logged_in()) { ?>
				<div id='div-gpt-ad-1392106267992-3' style='width:728px; height:90px;'></div>
			<?php } ?>
		</div>
	</div>

<div class="row">
  <div class="col-sm-9">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post hentry">
					<p class="postmetadata"><span class="published"><?php the_date(); ?></span> | <?php comments_number('Sin comentarios', 'Un comentario', '% comentarios'); ?> | por <span class="author vcard"><span class="fn"><?php the_author(); ?></span></span></p>
					<h3 class="entry-title"><a class="permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="sharing">
						<div>Compártelo en:</div>
						<a target="_blank" href="http://facebook.com/sharer/sharer.php?url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Facebook"><div class="icon-facebook sprite-icon"></div></a>
						<a target="_blank" href="http://twitter.com/share?text=<?php urlencode(the_title()); ?>&url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Twitter"><div class="icon-twitter sprite-icon"></div></a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Google+"><div class="icon-googleplus sprite-icon"></div></a>
					</div>
					<div class="entry entry-content">
						<?php $post_custom = get_post_custom(); ?>
						<?php the_content(); ?>
						<p><a href="<?php echo($post_custom["pin_source_url"][0]); ?>">Visitar el artículo original</a></p>
						<p><a href="<?php echo($post_custom["pin_source_url"][0]); ?>"><img src="<?php echo($post_custom["pin_source_image_url"][0]); ?>"></a></p>
						<br/>
					</div>
					<div class="sharing">
						<div>Compártelo en:</div>
						<a target="_blank" href="http://facebook.com/sharer/sharer.php?url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Facebook"><div class="icon-facebook sprite-icon"></div></a>
						<a target="_blank" href="http://twitter.com/share?text=<?php urlencode(the_title()); ?>&url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Twitter"><div class="icon-twitter sprite-icon"></div></a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php urlencode(the_permalink()); ?>" alt="Compartir en Google+"><div class="icon-googleplus sprite-icon"></div></a>
					</div>
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="navigation">  
				<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			</div>
		<?php endif; ?>
	</div> 
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
