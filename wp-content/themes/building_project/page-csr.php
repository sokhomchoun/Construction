<?php
    get_header(); 
?>
    <!-- begin main content  -->

    <!-- imgage banner -->
    <div class="">
        <?php 
            $banner_src = SCF::get('banner_top');
            ?>
                <?php
                    $images = wp_get_attachment_url($banner_src);
                ?>
                <img id="img_banna" src="<?php echo $images; ?>" alt="" />
            <?php 
        ?>
    </div>
    <!-- imgage banner -->
    <div class="container">
    <div class="service">
        <h2>Corporate Social Responsibility</h2>
        <?php 
            $args = array(
                'post_type' => 'csrs', 
            );
            $the_query = new WP_Query( $args );         
            while ( $the_query->have_posts()):
                $the_query->the_post(); 
            endwhile;
        ?>
            
        <div class="text-center">
            <div class="p-3 text-start">
                <p class=""><?php the_content(''); ?></p>
            </div>
        </div>
        <h2>CSR Activities</h2>
        <div class="titlepage mt-4">
            <div class="grid-container" id="container">
                <?php 
                $args = array(
                    'post_type' => 'csrs', 
                );
                $the_query = new WP_Query( $args );         
                while ( $the_query->have_posts()):
                    $the_query->the_post(); 
                    $modalID = "modalid" . get_the_ID(); // Unique modal ID based on post ID
                    $img_csr = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="card-product image-container image_csr" data-bs-toggle="modal" data-bs-target="#<?php echo $modalID; ?>">
                        <img src="<?php echo $img_csr; ?>" alt="image"/>
                        <div>
                            <h1 class="text-wrapper"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $modalID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                        <div class="">
                                <div class="control_model">
                                    <div class="modal-header">
                                        <i class="bi bi-x" id="close_model" data-bs-dismiss="modal"></i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal_image">
                                            <?php 
                                                $image_scrs = SCF::get('image_scrs');
                                                $image = wp_get_attachment_url($image_scrs);
                                                $point_events = SCF::get('PointEvents');
                                            ?>
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                        <h6><?php echo SCF::get('titles'); ?></h6>
                                        <p><?php echo SCF::get('description'); ?></p>
                                        <h6>Events:</h6>
                                        <ul>
                                            <?php
                                                foreach($point_events as $pro){
                                                    ?>
                                                        <li><?php echo $pro['point_evenets']; ?></li>
                                                    <?php 
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-dialog">
                        </div>
                    </div>
                    <?php 
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer(); 
?>