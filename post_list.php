<?php while(have_posts()) : the_post(); ?>
	<div class="post col-sm-12">
		<div class="col-sm-4 post-list-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_list_thumbnail', array('class' => 'post-list-thumbnail-image')); ?></a>
		</div>
		<div class="col-sm-8">
			<p class="post-list-meta"><?php the_date(); ?> | <span class="post-list-comments"><?php comments_number('Sin comentarios', 'Un comentario', '% comentarios'); ?></span></p>
			<h3 class="post-list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<span class="seguir-leyendo"><a class="btn btn-default" href="<?php the_permalink(); ?>">SEGUIR LEYENDO &raquo;</a></span>
		</div>
	</div>
<?php endwhile; ?>
