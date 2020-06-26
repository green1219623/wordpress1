<?php get_header(); ?>

<section class="main">
    <div class="inner">
        <div class="main-flex">
            <div class="main-left">

                <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
                    ?>
                </div><!-- /breadcrumb -->

                <section class="single-card-wrap">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>

                            <!-- カテゴリー１つ目の名前を表示 -->
                            <div class="main-category-category"><?php my_the_post_category(false); ?></div><!-- /entry-item-tag -->

                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <div class="single-date-flex">
                                <time class="single-release-date" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                                <?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
                                    <time class="single-up-date" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                                <?php endif; ?>
                            </div><!-- single-date-flex -->
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
                            <div class="entry-body">
                                <?php
                                the_content(); ?>

                                <?php
                                //改ページを有効にするための記述
                                wp_link_pages(
                                    array(
                                        'before' => '<nav class="entry-links">',
                                        'after' => '</nav>',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'next_or_number' => 'number',
                                        'separator' => '',
                                    )
                                );
                                ?>
                            </div>

                            <?php
                             echo do_shortcode('[btn]'); 
                             
                             ?>

                            <!-- entry-tag-items -->
                            <div class="single-tag-wrap">
                                <div class="single-tag-flex">
                                    <div class="single-tag">タグ</div><!-- /entry-tag-head -->
                                    <?php my_the_post_tags(); ?>
                                </div><!-- /entry-tag-items -->
                            </div><!-- single-tag-wrap -->

                            <?php get_template_part('template-parts/relation-article'); ?>
                            <!-- 関連記事呼び出し -->

                    <?php
                        endwhile;
                    endif;
                    ?>
                </section><!-- single-card-wrap -->

                

            </div><!-- main-left -->
            <?php get_sidebar(); ?>
        </div><!-- main-flex -->
    </div><!-- inner -->
</section><!-- main -->

<?php get_footer(); ?>