<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	
	<?php wp_head(); ?>

	<link rel="icon" href="./img/icon-home.png">
</head>

<body>
	<div class="wrap">
		<div class="bg-ground"></div>
		<header>
			<div class="header-inner">
				<!-- <h1 class="header-logo">TF-30</h1> -->
				<!-- <p class="sub-title">サブタイトルが入りますサブタイトルが入ります</p> -->

				<?php if (is_home() || is_front_page()) : //トップページではロゴをh1に、それ以外のページではdivに。 
				?>
					<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
				<?php else : ?>
					<div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /header-logo -->
				<?php endif; ?>
				<div class="sub-title"><?php bloginfo('description'); //ブログのdescriptionを表示 
										?></div><!-- /header-sub -->

			</div><!-- header-inner -->
		</header>

		<a class="menu">
			<span class="menu__line menu__line--top"></span>
			<span class="menu__line menu__line--center"></span>
			<span class="menu__line menu__line--bottom"></span>
		</a>
		<nav class="gnav">

			<?php
			//.drawer-navを置き換えて、スマホ用メニューを動的に表示する
			wp_nav_menu(
				array(
					'depth' => 1,
					'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
					'container' => 'div',
					'container_class' => 'gnav__wrap',
					'menu_class' => 'gnav__menu',
				)
			);
			?>
		</nav>

		<div class="menu-text">
			<?php
			wp_nav_menu(
				//.header-listを置き換えて、PC用メニューを動的に表示する
				array(
					'depth' => 1,
					'theme_location' => 'global', //グローバルメニューをここに表示すると指定
					'container' => 'false',
					'menu_class' => 'menu-flex',
				)
			);
			?>
		</div><!-- menu-text -->