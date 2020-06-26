<?php get_header(); ?>

<section class="main">
    <div class="inner">
        <div class="main-flex">
            <div class="main-left">

                <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
                    ?>
                </div><!-- /breadcrumb -->

                <div class="top-category-contents">
                    <div class="top-category-sub-title">CATEGORY</div>
                    <h1 class="archive-title"><?php the_archive_title(); //一覧ページ名を表示 ?></h1><!-- /archive-title -->
                    <div class="archive-description">
                        <p class="top-category text"><?php the_archive_description(); //説明を表示 
                                                        ?></p>
                    </div><!-- /archive-description -->
                </div><!-- /archive-head -->


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
                                <div class="entry-item-img">
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

                                        <?php
                                        // カテゴリー１つ目の名前を表示
                                        $category = get_the_category();
                                        if ($category[0]) {
                                            echo '<div class="main-category-category">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
                                        }
                                        ?>

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
                    <!-- pagenation -->
                    <div class="pagenation">
                        <?php
                        echo
                            paginate_links(
                                array(
                                    'end_size' => 0,
                                    'mid_size' => 1,
                                    'prev_next' => true,
                                    'prev_text' => '<i class="fas fa-angle-left"></i>',
                                    'next_text' => '<i class="fas fa-angle-right"></i>',
                                )
                            );
                        ?>
                    </div><!-- /pagenation -->
                <?php endif; ?>

            </div><!-- main-left -->
            <?php get_sidebar(); ?>
        </div><!-- main-flex -->
    </div><!-- inner -->
</section><!-- main -->

<?php get_footer(); ?>