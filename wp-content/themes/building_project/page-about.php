<?php
get_header();
?>

<?php
$args = array(
  'post_type' => 'aboutus',
);
$the_query = new WP_Query($args);
while ($the_query->have_posts()) :
  $the_query->the_post();
  $ceo_name = SCF::get('ceo_name');
  $position = SCF::get('position');
  $name = SCF::get('name');
  $address = SCF::get('address');
  $companynumber = SCF::get('companynumber');
  $date_of_incorporation = SCF::get('date_of_incorporation');
  $board_of_directors = SCF::get('board_of_directors');
  $scope_of_business = SCF::get('scope_of_business');
  $construction_license = SCF::get('construction_license');
  $architect_license = SCF::get('architect_license');
  $telephone = SCF::get('telephone');
  $website = SCF::get('website');
  $email = SCF::get('email');
  $img_slide = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
  // group management
  $group_management = SCF::get('ManagementTeam');
  // corporation mission statement
  $vision = SCF::get('vision');
  $mission = SCF::get('mission');
  // ethical principle 
  $description_ethical = SCF::get('description_ethical');
  $title_ethical = SCF::get('title_ethical');
  $group_pointEthical = SCF::get('PointEthical');

endwhile;
?>
<div class="container text-center pt-2 manu">
  <ul>
    <li>
      <a href="#ceoStatement">CEO statement</a>
      <a href="#corporateProfile">Corporate Profile</a>
      <a href="#corporateMission">Corporate Mission Statement</a>
      <a href="#ethicalPrinciples">Ethical Principles</a>
    </li>
  </ul>
</div>
<hr>
<div class="container">
  <div class="row pic">
    <div class="col-sm-6 tex1 col-md-4">
      <div class="about">
        <div class="about-img">
          <img src="<?php echo $img_slide ?>" alt="">
          <h3 class="post text-center"><b><?php echo $position; ?></b></h3>
          <p class="name text-center"><b><?php echo $ceo_name; ?></b></p>

        </div>

      </div>

    </div>
    <div class="col-sm-6 tex2 col-md-8" id="ceoStatement">
      <div class="text text02">
        <h2>CEO Statement</h2>
        <p><?php the_content(''); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Corporate Profile -->

<div class="container-fluid w-100 control-card " id="corporateProfile">
  <div class="profile">
    <h2 class="text-white mt-3 p-4 text-center">Corporate Profile</h2>
  </div>

  <div class="container tb">

    <table class="table control_table border_table">
      <thead>
        <tr>
          <th class="text-white" scope="row ">Name</th>
          <td class="text-white"><?php echo $name; ?></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-white" scope="row">Address</th>
          <td class="text-white"><?php echo $address; ?></td>
        </tr>
        <tr>
          <th class="text-white" scope="row">Campanny Number</th>
          <td class="text-white"><?php echo $companynumber; ?></td>

        </tr>
        <tr>
          <th class="text-white" scope="row">Date of Incorporation</th>
          <td class="text-white"><?php echo $date_of_incorporation; ?></td>

        </tr>
        <tr>
          <th class="text-white" scope="row">Board of Directors</th>
          <td class="text-white"><?php echo $board_of_directors; ?></td>

        </tr>

        <tr>
          <th class="text-white" scope="row">Scope of business</th>
          <td class="text-white"><?php echo $scope_of_business; ?></td>

        </tr>

        <tr>
          <th class="text-white" scope="row">Construction license</th>
          <td class="text-white"><?php echo $construction_license; ?></td>

        </tr>

        <tr>
          <th class="text-white" scope="row">Architect License</th>
          <td class="text-white"><?php echo $architect_license; ?></td>

        </tr>

        <tr>
          <th class="text-white" scope="row">Telephone</th>
          <td class="text-white"><?php echo $telephone; ?></td>

        </tr>
        <tr>
          <th class="text-white" scope="row">Website</th>
          <td class="text-white"><?php echo $website; ?></td>

        </tr>
        <tr>
          <th class="text-white" scope="row">Email</th>
          <td class="text-white"><?php echo $email ?></td>

        </tr>

      </tbody>
    </table>

  </div>

  <div class="profile mt-5">
    <h2 class="text-white p-4 text-center">Management Team</h2>
  </div>

  <!-- Card -->
  <div class="container">
    <div class="row">
      <?php
      foreach ($group_management as $provide) {
        $image = wp_get_attachment_url($provide['magementimage']);
        $position1 = $provide['position_management'];
        $name_management1 = $provide['name_management'];
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="card w-100 ">
            <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
            <div class="card-body card2">
              <h5 class="card-title1 text-white text-center  "><b><?php echo $position1; ?></b></h5>
              <p class="card-text mt-2 text-white text-center"> <b><?php echo $name_management1; ?></b></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<!-- Corporate Mission Statement -->

<div class="container " id="corporateMission">
  <div class="profile mt-3">
    <h2 class=" p-4 text-center"><b>Corporate Mission Statement</b></h2>
  </div>
  <p class="space"> TPHC is committed to the highest principles of service and provision, and this is underscored by its own philosophy, vision and mission.</p>

  <div class="profile mt-5">
    <h3 class=" p-4 text-center"><b>Philosophy</b></h3>
  </div>
  <p class="text-center">Our philosophy is based on three tenets :</p>
  <div class="card1 respone-card justify-content-center mt-3  d-flex row p-3 mx-3">

    <div class=" col-lg-12 width-card1 d-flex justify-content-center mt-4 col-md-4">
      <div class="border width-card width-card1  px-3 border1  position-relative">
        <div class="d-flex justify-content-center">
          <p class="trust ">Trust</p>
        </div>

        <p class="top">TPHC is committed to the high
          est principles of service and pro
          vision, and this is underscored
          by its own philosophy, vision
          and mission.</p>

      </div>
    </div>


    <div class="col-lg-6 width-card d-flex justify-content-center  mt-4 col-md-6">
      <div class=" border  mt-3 px-3 border1 position-relative">
        <div class="d-flex  justify-content-center">
          <p class="trust ">Innovation</p>
        </div>

        <p class="top">TPHC is committed to the high
          est principles of service and pro
          vision, and this is underscored
          by its own philosophy, vision
          and mission.</p>

      </div>

    </div>

    <div class="col-lg-6 width-card  d-flex justify-content-center  meduim1  col-md-6 mt-4">
      <div class=" border mt-3  px-3 border1 position-relative">
        <div class="d-flex justify-content-center">
          <p class="trust trust1 ">Contribution to Society</p>
        </div>

        <p class="top">TPHC is committed to the high
          est principles of service and pro
          vision, and this is underscored
          by its own philosophy, vision
          and mission.</p>

      </div>
    </div>


    <div class="profile mt-5">
      <h2 class=" p-4 text-center"><b>Vision</b></h2>
    </div>
    <span><?php echo $vision; ?></span>

    <div class="profile mt-5">
      <h2 class=" p-4 text-center"><b>Mission</b></h2>
    </div>
    <span>
      <?php echo $mission; ?>
    </span>

  </div>
</div>

<!-- Ethical Principles -->

<div class="container-fluid pro" id="ethicalPrinciples">
  <div class="profile ">
    <h2 class=" p-4 mt-6 text-center text-white"> Ethical Principles</h2>
    <div class="Box ">
      <p class="text-white p-3"><?php echo $description_ethical; ?></p>

      <p class="text-white p-3"><?php echo $title_ethical; ?></p>

      <div class="p-3 mx-3">
        <?php
        foreach ($group_pointEthical as $sendto) {
          $point = $sendto['point'];
        ?>
          <p class="text-white mb-1">• <?php echo $point; ?> </p>
        <?php
        }
        ?>
      </div>
    </div>


  </div>
</div>


<!-- end main content  -->




<?php
get_footer();
?>