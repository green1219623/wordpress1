<div class="main-right">
    <div class="profile-wrap">
        <h2 class="main-right-title">プロフィール</h2>
        <div class="profile-tab-flex">
            <img class="profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="profile">
            <p class="profile-text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
        </div><!-- profile-tab-flex -->
        <div class="profile-icon-flex">
            <a href="" class="profile-twitter"><i class="fab fa-twitter my-big"></i></a>
            <a href="" class="profile-facebook"><i class="fab fa-facebook-f my-big"></i></a>
            <a href="" class="profile-instagram"><i class="fab fa-instagram my-big"></i></a>
        </div>
    </div><!-- profile-wrap -->

    <div class="search-wrap">
        <h2 class="main-right-title">検索</h2>
        <form action="<?php echo home_url('/'); ?>" method="get">
            <div class="search-btn">
                <input class="text-send" type="search" name="s" id="s" placeholder="キーワード" value="">
                <button class="submit-send" type="submit"><i class="fas fa-search"></i></button>
            </div><!-- search-btn  -->
        </form>
    </div><!-- search-wrap -->

    <div class="popular-wrap">
        <h2 class="main-right-title">人気記事</h2>
        <div class="popular-archive-wrap">

            <?php
            // get_post_viewsで適宜アクセス数を確認
            // $counter = get_post_views();
            $ranking_counter = 0;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'meta_key' => 'view_counter',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            );
            $popular_posts = get_posts($args);
            foreach ($popular_posts as $post) : setup_postdata($post);

                $ranking_counter++;
            ?>

                <!-- wpost-item -->
                <a class="popular-flex" href="<?php the_permalink(); ?>">
                    <div class="popular-img-wrap">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば中サイズで表示
                            the_post_thumbnail('medium');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
                        <li class="popular-number"><?php echo $ranking_counter; ?></li>
                    </div>
                    <div class="popular-text"><?php the_title(); ?></div>
                </a><!-- /wpost-item -->
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </div><!-- popular-archive-wrap -->
    </div><!-- popular-wrap -->

    <div class="new-wrap">
        <h2 class="main-right-title">新着記事</h2>
        <div class="popular-archive-wrap">

            <?php
            // get_post_viewsで適宜アクセス数を確認
            // $counter = get_post_views();
            $archive_counter = 0;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $new_posts = get_posts($args);
            foreach ($new_posts as $post) : setup_postdata($post);

                $archive_counter++;
            ?>

                <!-- wpost-item -->
                <a class="popular-flex" href="<?php the_permalink(); ?>">
                    <div class="popular-img-wrap">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば中サイズで表示
                            the_post_thumbnail('medium');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
                        <li class="popular-number"><?php echo $archive_counter; ?></li>
                    </div>
                    <div class="popular-text"><?php the_title(); ?></div>
                </a><!-- popular-flex -->
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </div><!-- popular-archive-wrap -->
    </div><!-- new-wrap -->

    <div class="archive-wrap">
        <h2 class="main-right-title">アーカイブ</h2>
        <div class="archive-wrap-wrap">
            <ul>
                <?php
                wp_get_archives($args);
                ?>
            </ul>
        </div><!-- archive-wrap-wrap -->
    </div>

</div><!-- main-right -->