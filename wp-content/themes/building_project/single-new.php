<?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class=" -fluid text-white text-new">
        <p class="text-new1"><?php $title = SCF::get("title_new"); echo $title ?></p>

        <p class="text-new2"><?php $description = SCF::get("description"); echo $description ?></p>

        <div class="container-fluid picture">
            <div class="">
                <div class="building">
                    <?php 
                        $bannerimages = SCF::get("bannerimages");
                        $img_url1 = wp_get_attachment_url($bannerimages);
                        ?>
                          <img class="w-100 image" id="btn-image" src="<?php echo $img_url1 ?>" alt="">
                        <?php 
                     ?>
                </div>
            </div>
        </div>

        <div class="picture1">
            <div class="control-pic">
                <?php
                    $image_details = SCF::get("Detail_Images");
                    foreach($image_details as $element){
                        $img_url = wp_get_attachment_url($element['detailimages']);
                        ?>
                        <div class="layout" id="top-layout">
                            <img src="<?php echo $img_url ?>" alt="">
                        </div>
                        <?php 
                    }
                ?>
        </div>
    </div>
    <!-- end main content  -->

<?php
    get_footer(); 
?>