<?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class="container mt-5 page-new">
        <h1><b>NEWS</b></h1>
        <div class="text text-white mt-3 p-3">2024</div>
        <!-- column -->
        <div class="control">
            <div class="control-col">
            <?php 
                $args = array(
                    'post_type' => 'new', 
                );
                $the_query = new WP_Query( $args );         
                while ( $the_query->have_posts()):
                    $the_query->the_post(); 
                    $img_new = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                    ?>
                        <div class="d-flex gap-5 pic">
                            <div class="control_img_new"><a href="<?php echo get_permalink()?>"><img src="<?php echo $img_new?>" alt=""></a></div>
                            <div class="w-100">
                                <p class="response"><?php the_content(''); ?></p>
                                <p class="date mt-5"><?php the_time('Y.m.d') ?></p>
                            </div>
                        </div>
                    <?php 
                endwhile;
            ?>
        </div>
        </div>
    </div>
    <!-- end main content  -->

<?php
    get_footer(); 
?>