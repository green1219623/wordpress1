<?php get_header(); ?>

	<section class="main">
		<div class="inner">
		<div class="main-flex">
			<div class="main-left">

				<div class="top-category-wrap">
                <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
                    ?>
                </div><!-- /breadcrumb -->
				
					<div class="top-search-contents">
						<p class="top-category-sub-title">SEARCH</p>
                        <h2 class="top-search-title"> <span> " <?php echo esc_html( get_search_query( false ) ); ?> " </span>の検索結果:
                        <?php echo $wp_query->found_posts; ?>件</h2>
					</div><!-- top-category-contents -->
				</div><!-- top-category -->

				<div class="article-flex-category">

                <?php
                    //記事があれば表示
                    if (have_posts()) : ?>
                        <?php
                        //記事数ループ
                        while (have_posts()) :
                            the_post(); ?>

                            <a href="<?php the_permalink(); //記事のリンクを表示 
                                        ?>" class="main-card-wrap-category">
                                <div class="main-card-img-category">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像が設定されていれば大サイズで表示
                                        the_post_thumbnail('large');
                                    } else {
                                        // なければnoimage画像をデフォルトで表示
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                    }
                                    ?>
                                </div><!-- /entry-item-img -->

                                <div class="main-card-text-wrap-category">
                                    <div class="main-card-detail-wrap-category">

                                        <!-- カテゴリー１つ目の名前を表示 -->
                                        <div class="main-category-category"><?php my_the_post_category(false); ?></div><!-- /entry-item-tag -->

                                        <time class="main-card-date-category" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>

                                    </div><!-- main-card-detail-wrap -->

                                    <h2 class="main-card-title-category"><?php the_title(); //タイトルを表示 
                                                                            ?></h2>
                                    <div class="main-card-text-category"><?php the_excerpt(); //抜粋を表示 
                                                                            ?></div>
                                </div>
                            </a><!-- main-card-wrap -->

                        <?php
                        endwhile;
                        ?>
                    <?php endif; ?>
				</div><!-- article-flex -->

                <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
                ?>
                    <?php get_template_part('template-parts/pagenation'); ?>
                <?php endif; ?>

			</div><!-- main-left -->
            <?php get_sidebar(); ?>
		</div><!-- main-flex -->
	</div><!-- inner -->
	</section><!-- main -->

    <?php get_footer(); ?>