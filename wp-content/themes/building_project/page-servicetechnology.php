<?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class="">
    <?php 
        $banner_service = SCF::get('banner_top');
        ?>
            <?php
                $images = wp_get_attachment_url($banner_service);
            ?>
            <img id="img_banna" src="<?php echo $images; ?>" alt="" />
        <?php 
        ?>
    </div>

    <?php 
          $args = array(
            'post_type' => 'serverandtechnology', 
          );
          $the_query = new WP_Query( $args );         
          while ( $the_query->have_posts()):
            $the_query->the_post(); 
            $title__service = SCF::get('title__service');
            $group_service = SCF::get('PointServices');
            $title_construction = SCF::get('title_general_construction');
            $group_construction = SCF::get('PointConstructions');
            $description_project = SCF::get('descriptionproject');
            $title_projectmanagement = SCF::get('title_projectmanagement');
            $group_project = SCF::get('ProjectManagement');
            $title_engineering = SCF::get('title_engineering');
            $group_engineering = SCF::get('PointEngineering');
            $after_sales_service = SCF::get('after_sales_service');

          endwhile;
      ?>
      

    <div class="container">
        <div class="service">
            <h2>THPC Service</h2>
        </div>
        
        <div class="text-center">
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-10">
                    <div class="p-2 text-start">
                        <p><?php the_content(''); ?><p>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4 col-lg-2 service-img d-flex align-items-center">
                    <div class="p-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-set.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="service">
            <h2>Design-Build Service</h2>
        </div>

        <div class="design-service">
            <p><?php echo $title__service; ?></p>
            <ul>
                <?php
                    foreach($group_service as $element){
                        ?>
                            <li><?php echo $element['points'] ?></li>
                        <?php 
                    } 
                ?>
            </ul>
        </div>
        <div class="service">
            <h2>Construction</h2>
        </div>
        <div class="contru_p">
            <p class="color-gren">General Construction</p>
            <p><?php echo $title_construction; ?></p>
            <ol>
                <?php
                    foreach($group_construction as $provide){
                        ?>
                            <li><?php echo $provide['pointconstruction']; ?></li>
                        <?php
                    } 
                ?>
            </ol>
        </div>
        <div class="contru_p">
            <p class="color-gren">Project Management</p>
            <p><?php echo $description_project; ?></p>
            <p><?php echo $title_projectmanagement; ?></p>
            <ol>
                <?php
                    foreach($group_project as $sendto){
                        if($sendto['pointprojectmanagements'] === null || $sendto['pointprojectmanagements'] === ''){
                        }else{
                            ?>
                                <li class="point_project"><?php echo htmlspecialchars($sendto['pointprojectmanagements'], ENT_QUOTES, 'UTF-8'); ?></li>
                            <?php 
                        }
                    }
                ?>
            </ol>
        </div>
        <div class="contru_p">
            <p class="color-gren">Value Engineering</p>
            <p><?php echo $title_engineering; ?><p>
            <ol>
                <?php
                    foreach($group_engineering as $ele){
                        ?>
                            <li><?php echo $ele['pointengineerings']; ?> </li>
                        <?php 
                    }
                ?>
            </ol>
            <p>CMEDCC works with its clients throughout the process. There are opportunities for the clients to review the process elements and
                make selections based on our professional advice</p>
        </div>
        <div class="service">
            <h2>After Sales Service</h2>
        </div>
        <div class="after-sevice mb-5">
            <p><?php echo $after_sales_service; ?></p>
        </div>
    </div>

<?php
    get_footer(); 
?>