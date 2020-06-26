<footer>
	<div class="footer-text-wrap">
		<h2 class="footer-logo">blog title</h2>
		<p class="footer-sub-title">サブタイトルが入りますサブタイトルが入ります</p>

		<?php
		wp_nav_menu(
			array(
				'depth' => 1,
				'theme_location' => 'footer',
				'container' => 'false',
				'menu_class' => 'footer-menu-flex',
			)
		);
		?>
	</div><!-- footer-text-wrap -->

	<div class="footer-bottom">
		<p class="footer-bottom-text">© daily-trial wordpress theme All rights reserved.</p>
		<p class="footer-bottom-text">Presented by 東京フリーランス</p>
	</div><!-- footer-bottom -->

	<?php get_template_part('template-parts/snsbutton'); ?> <!-- snsボタン呼び出し -->

	<div class="top-btn-wrap">
		<p class="top-btn"><i class="fas fa-chevron-up up-btn"></i></p>
	</div><!-- top-btn-wrap -->
</footer>
</div><!-- wrap -->

<!--
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
ここを置き換える。jqueryはWPデフォで読み込まれるので消してOK。
-->

<?php wp_footer(); ?>
</body>

</html>