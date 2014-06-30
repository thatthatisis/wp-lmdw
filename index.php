<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/lmdw.js"></script>
<title><?php bloginfo('title'); ?></title>
<?php //wp_head(); ?>
</head>
<body>
<table id="layoutTable">
	<tr>
		<td id="goldenCell" rowspan="2"></td>
		<td id="headerCell">
			<img src="<?php bloginfo('template_url'); ?>/images/header.jpg" style="display: block; margin: 0 auto;" />
            <?php wp_nav_menu(array('theme_location' => 'header-menu',
                                    /*'menu_class'=>'test'*/)); ?>
		</td>
	</tr>
	<tr>
		<td id="bodyCell">
			<div id="body">
<?php 
if (have_posts())
{
    while (have_posts())
    {
        the_post(); 
        ?><h1><?php the_title(); ?></h1><?php
        the_content();
    }
}
else
{
    ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
}
?>
			</div>
		</td>
	</tr>
</table>
</body>
</html>
