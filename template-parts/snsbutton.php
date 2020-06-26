<!-- ここからが追記部分 -->
<?php if(is_single()): ?>
<!-- footer-sns -->
<div class="footer-sns">
<div class="inner">

<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

<nav class="footer-sns-buttons">
<ul>
<li><a class="m_twitter"
href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo the_title();?>" rel="nofollow"
target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt=""></a>
</li>
<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=<?php echo get_the_permalink();?>"
rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png"
alt=""></a></li>
<li><a class="m_hatena"
href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_the_permalink();?>&title=<?php echo the_title();?>"
rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-hatena.png"
alt=""></a></li>
<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink();?>"
rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png"
alt=""></a></li>
<li><a class="m_pocket" href="https://getpocket.com/edit?url=<?php echo get_the_permalink();?>" rel="nofollow"
target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pocket.png" alt=""></a></li>
</ul>
</nav><!-- /footer-sns-buttons -->

</div><!-- /inner -->
</div><!-- /footer-sns -->
<?php endif; ?>