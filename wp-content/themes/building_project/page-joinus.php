<?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class="">
    <?php 
        $banner_joinus = SCF::get('banner_top');
        ?>
            <?php
                $images = wp_get_attachment_url($banner_joinus);
            ?>
            <img id="img_banna" src="<?php echo $images; ?>" alt="" />
        <?php 
        ?>
    </div>
    <?php 
        $args = array(
            'post_type' => 'joinuscompany', 
        );
        $the_query = new WP_Query( $args );         
        while ( $the_query->have_posts()):
            $the_query->the_post(); 
            $career_at_thpc = SCF::get('carrer_at_thpc');
            $job_vacancies = SCF::get('JobVacancies');
        endwhile;
    ?>

    <div class="container">
        <div class="service">
            <h2>Join Us</h2>
        </div>

        <div class="join-service">
            <h6>A career at THPC means a world of opportunity.</h6>
            <p class="mb-5"><?php echo $career_at_thpc; ?></p>
            <h6>Our philosophy: Trust, Innovation and Contribution to Society.</h6>
            <p><?php the_content(''); ?></p>
        </div>

        <div class="text-center d-grid gap-2 col-sm-6 col-md-7 mx-auto mt-5 mb-5">
            <a href="<?php echo get_site_url(); ?>/employmentApplication">
                <button type="button" class="btn btn-service">Submit CV</button>
            </a>
        </div>
    </div>

    <div class="bg-choose">
        <div class="choose02">
            <div class="col-chooseus">
                <h2>Job Vacancies</h2>
                <p class="px-0">Please click on the Job title to learn more.</p>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php
                            foreach($job_vacancies as $values){
                                ?>
                                    <div class="accordion-item">
                                            <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <?php echo $values['title']; ?>
                                            </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p class="px-1">Job Description</p>
                                                    <p class="ms-2"><?php echo $values['job_descriptions']; ?></p>

                                                    <p class="px-1">Job Requirements</p>
                                                    <p class="ms-2"><?php echo $values['job_requirement']; ?></p>
                                                </div>
                                                <div class="d-grid gap-2 col-sm-4 col-md-3 mx-auto mt-5 mb-5">
                                                    <a href="<?php echo get_site_url(); ?>/employmentApplication">
                                                        <button class="btn btn-service">Apply Now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php 
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer(); 
?>