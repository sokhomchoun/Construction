 <?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class="container_content">
        <!-- slide top page  -->
        <section class="creative-parallax--slider">
            <div class="creative-slide">
                <div class="swiper swiper-container parallax-slider">
                    <div class="swiper-wrapper">
                        <?php 
                            $args = array(
                                'post_type' => 'toppage', 
                            );
                            $the_query = new WP_Query( $args );         
                            while ( $the_query->have_posts()):
                                $the_query->the_post(); 
                                $title = SCF::get('title');
                                $description = SCF::get('description');
                                $img_slide = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                                ?>
                                <div class="swiper-slide">
                                    <div class="f-slider-layer">
                                        <img id="height_slide_image" src="<?php echo $img_slide?>" alt="Builty Innovative &amp; Industrial Solutions" />
                                        <div class="f-slider-one-data">
                                            <h1><?php echo $title ?></h1>
                                            <p><?php echo $description ?></p>
                                            <a class="slide-btn text-uppercase text-white" href="<?php echo get_site_url(); ?>/project">more info<i class="fa-solid fa-angles-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slide top page -->
    </div>
    <!-- end main content  -->
<?php
    get_footer(); 
?>