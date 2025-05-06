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


<body>
    <section class="blog-body">
        <div>
            <?php
    get_template_part('headercategory');?>
            <section>
                <div class="container gutters">
                    <div class="relative">
                        <div class="container text-font">
                            <div class="col-md-12 col-sm-12 col-lg-12 ">
                                <div class="animate-box img-singul">
                                    <div class="content_title">
                                        <?php single_cat_title(); ?>
                                        <?php if(have_posts()): while(have_posts()):the_post(); ?>
                                        <div class="date_title_single"><?php the_time('Y年m月d日') ?></div>
                                        <h1 class="border-btom sing-btomo"><?php the_title(); ?></h1>
                                    </div>
                                    <p><?php the_content(''); ?></p>
                                </div>
                            </div>
                            <p class="date" style="float:right;"></p>
                            <?php endwhile; endif; ?>
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
                            <div> <!--
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
                                            </dd>
                                        </dl>
                                    </aside>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
    <?php get_footer();?>