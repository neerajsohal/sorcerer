<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/screen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" media="print" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container header">
		<div class="span-5 logo"><h1>Sorcerer</h1></div>
		<div class="span-17 last header_right">
			<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header-right") ) :
			?>
			<div class="error"><p>Failed to initialize widgetized area</p></div>
			<?php
				endif;
			?>
		</div>
	</div>
	<hr class="space" />
	<div class="container main">
		<div class="span-6 sidebar sidebar_right">
			<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-left") ) :
			?>
			<div class="error"><p>Failed to initialize widgetized area.</p></div>
			<?php
				endif;
			?>
		</div>
		<div class="span-18 last content">
			<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
			?>
			<div class="span-18 last post">
				<h2 class="title"><?php the_title(); ?></h2>
			<?php
						the_content();
					endwhile;
				endif;
			?>
			</div>
		</div>
	</div>
	<hr class="space" />
	<div class="container footer">
		<p>copyright &copy; 2010 <a href="http://www.neerajkumar.name/">neeraj kumar a.k.a codemaster snake</a>. all rights reserved.</p>
		<?php
			wp_footer();
		?>
	</div>
</body>
</html>