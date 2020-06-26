<div class="relation-article-wrap">
    <p class="relation-title">関連記事</p>
    <ul class="relation-article-flex">

        <?php if (has_category()) {
            $cats = get_the_category();
            $catkwds = array();
            foreach ($cats as $cat) {
                $catkwds[] = $cat->term_id;
            }
        } ?>

        <?php $args = array(
            'post_type' => 'post', //投稿するのでpost
            'posts_per_page' => '8', //8枚投稿
            'post__not_in' => array($post->ID),  //現在表示しているページは表示しない
            'category__in' => $catkwds, //呼び出す記事のカテゴリIDを指定。ここでは現在の表示しているページのカテゴリを表記
            'orderby' => 'rand' // 記事の並び順指定、ここではランダムのrand
        );
        $my_query = new WP_Query($args); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <!-- ループさせる要素-- -->
            <li class="relation-article-card"><a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <div class="relation-article-text">
                        <?php the_title(); ?>
                    </div>
                </a></li>
            <!-- ループさせる要素-- -->

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </ul><!-- relation-article-flex -->
</div><!-- relation-article-wrap -->