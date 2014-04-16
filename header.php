<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php wp_enqueue_script('jquery'); ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="es_ES">
<?php if(is_singular())  { ?>
	<meta property="og:title" content="<?php echo get_the_title(); ?>">
	<meta property="twitter:card" content="summary">
	<meta property="twitter:site" content="">
	<meta property="twitter:creator" content="@clarabelengomez">
	<meta property="og:type" content="article">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<meta property="twitter:title" content="<?php echo get_the_title(); ?>">
		<meta property="og:url" content="<?php echo get_permalink(); ?>">
		<meta property="article:published_time" content="<?php the_time('c'); ?>">
		<meta property="article:modified_time" content="<?php the_modified_time('c'); ?>">
		<meta property="article:publisher" content="https://www.facebook.com/inspirateconclara">
		<meta property="article:author" content="https://www.facebook.com/ClaraBelenGomez">
		<meta property="og:description" content="<?php echo htmlentities(get_the_excerpt(), ENT_QUOTES); ?>">
		<meta property="twitter:description" content="<?php echo htmlentities(get_the_excerpt(), ENT_QUOTES); ?>">
		<?php if(has_post_thumbnail()) { ?>
			<meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
			<meta property="twitter:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
		<?php } ?>
	<?php endwhile; endif; ?>
	<?php rewind_posts(); ?>
<?php } else { ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
<?php } ?>

<meta property="fb:admins" content="1621837217">
<meta property="fb:app_id" content="281305141912848">
<meta name="google-translate-customization" content="3c2e0aae0b0548ff-f005370d9d0dfb0a-g0ebf306c057036ec-1c">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
<link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >

<link rel="canonical" href="">

<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_head();
?>
</head>
<body>
	<div class="navbar secondary-menu" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#secondary-menu-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<?php  /* menu */
			wp_nav_menu( array(
				'menu'              => 'secondary',
				'theme_location'    => 'secondary-menu',
				'depth'             => 4,
				'container'         => 'div',
				'container_id'			=> 'secondary-menu-navbar-collapse',
				'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			); 
		?>
  </div>

<div class="container-logo">
	<div class="pattern-logo"></div>
	<div class="logo-inspiraciones">
		<a href="<?php bloginfo('url'); ?>" class="logo-inspiraciones-colorful sprite-icon"></a>
	</div>
</div>

<div>
	<div>
		<a target="_blank" href="https://plus.google.com/u/0/106083749576655779266/posts" alt="Mi perfil de Google+"><div class="icon-googleplus sprite-icon"></div></a>
		<a target="_blank" href="https://www.facebook.com/inspirateconclara" alt="Mi página de Facebook"><div class="icon-facebook sprite-icon"></div></a>
		<a target="_blank" href="https://twitter.com/clarabelengomez" alt="Mi perfil de Twitter"><div class="icon-twitter sprite-icon"></div></a>
		<a target="_blank" href="http://www.pinterest.com/clarabelen" alt="Mi perfil de Pinterest"><div class="icon-pinterest sprite-icon"></div></a>
		<a target="_blank" href="<?php bloginfo('rss2_url'); ?>" alt="Mi feed RSS"><div class="icon-rss sprite-icon"></div></a>
	</div>
</div>

<div class="navbar primary-menu" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<?php  /* menu */
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary-menu',
			'depth'             => 4,
			'container'         => 'div',
			'container_id'			=> 'primary-menu-navbar-collapse',
			'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		); 
	?>
</div>
<div class="container container-content">
