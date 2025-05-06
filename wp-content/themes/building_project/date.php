<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/section_page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
<meta name="description" content="">
<title>お知らせ</title>

<section class="hearder">

    <div class="page--header--img"><a href="<?php echo home_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-yoshimatsu.png"></a></div>
    <img class="img-header" src="<?php echo get_template_directory_uri(); ?>/images/subhead.png">
<!--    <img class="top-img phone" src="<?php echo get_template_directory_uri(); ?>/images/top-page/top_header.jpg">-->
    <div class="TextArea">
        <h1 class="text001">お知らせ</h1>
        <p class="text002"></p>
        <span class="text003">news</span>
    </div>
</section>
<section class="btom180">
    <div id="course" class="school_page">
        <?php
    get_template_part('headercategory');?>
        <section class="sec_feature">
            <div class="container gutters">
                <div class="relative">
                    <div class="col-md-12 col-sm-12 col-lg-12 ">

                    <div id="newsArea">
                                <div id="newsColumn" class="inThirdColumn">
                                    <ul class="news-list aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                                        <?php
                                        $args = array(
                                            'post_type' => array('news'),
                                            'posts_per_page' => 10, // 表示件数の指定
                                            'paged' => $paged,
                                        );
                                        $the_query = new WP_Query($args);
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();

                                        ?>
                                            <li class="item">
                                                    <a href="<?php the_permalink(); ?>">
                                                    <p class="date"> <?php the_time('Y.m.d') ?></p>
                                                    <p class="title">
                                                        <?php the_title(); ?>
                                                    </p>
                                                </a>
                                            </li>
                                        <?php
                                        endwhile;
                                        //endforeach; // ループの終了
                                        //wp_reset_postdata(); // 直前のクエリを復元する
                                        ?>
                                    </ul>
                                </div>

                        </div>
                        <div style="text-align: center;margin: 10px;">
                            <?php
                    echo paginate_links(array(
                      'base' => get_pagenum_link(1) . '%_%',
                      'format' => '?paged=%#%',
                         'mid_size' => 1,
                      'current' => max(1, $paged),
                      'total' => $the_query->max_num_pages,
                      'next_text' => '次へ',
                      'prev_text' => '前へ'
                    ));
                    ?>
                        </div>
                    </div> <!--
                    <div class="catagory archive_span">
                        <div class="col-md-3 col-lg-3 col-sm-12">

                            <aside>
                                <dl class="date_contents">
                                    <dt class="date_title"><i class="fas fa-caret-right"></i>アーカイブ</dt>
                                    <dd>
                                        <ul class="cat">
                                            <li>
                                                 <?php wp_get_archives(array('post_type'=>'news', 'type'=>'monthly','limit'=>'250','show_post_count'=>'true')); ?>
                                            </li>
                                        </ul>
                                </dl>
                            </aside>
                        </div>
                    </div>
                -->

                </div>


            </div>
        </section>


    </div>
</section>


<!--<img src="images/footer-bg.png">-->
<?php get_footer();?>