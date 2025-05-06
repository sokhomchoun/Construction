<?php
    get_header(); 
?>
        <!-- begin main content  -->
        <div class="banner_project">
        <?php 
        $banner_image = SCF::get('banner_top');
        ?>
            <?php
                $images = wp_get_attachment_url($banner_image);
            ?>
            <img id="img_banna" src="<?php echo $images; ?>" alt="" />
        <?php 
        ?>
        </div>
        <!-- end banner project  -->
        <div class="container">
            <div class="control_our_project mt-5 ">
                <h1 class="text-center color_our_project">Our Projects</h1>
            </div>
            <div class="control_all_project mt-5 mb-5 row">
                    <?php 
                        $args = array(
                            'post_type' => 'post_project', 
                        );
                        $the_query = new WP_Query( $args );         
                        while ( $the_query->have_posts()):
                            $the_query->the_post(); 
                            $image_projects = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                            ?>
                            <div class="other_project col-lg-4 col-md-6">
                                <div class="control_hover">
                                    <a href="<?php echo get_permalink()?>">
                                        <img src="<?php echo $image_projects; ?>" alt=""  class="" />
                                    </a>
                                </div>
                                <div class="text-center mt-2">
                                    <p class="design_build"><?php the_title(''); ?></p> 
                                </div>
                            </div>
                            <?php 
                        endwhile;
                    ?>
            </div>
        </div>
    <!-- end main content  -->

    
<?php
    get_footer(); 
?>