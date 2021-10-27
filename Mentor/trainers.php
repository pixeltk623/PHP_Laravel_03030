<?php 
  
  include 'data.php';
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trainers - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.6.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <?php 

    include_once 'pages/header.php';

  ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php 

            foreach (ListOfTrainerS() as $key => $value) {
           
             ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo $value['trainer_image']; ?>" class="img-fluid w-100" alt="" style="height: 220px;">
              <div class="member-content">
                <h4><?php echo $value['trainer_name']; ?></h4>
                <span><?php echo $value['trainer_course']; ?></span>
                <p>
                  <?php echo $value['trainer_about']; ?>
                </p>
                <div class="social">
                  <a href="<?php echo $value['social_account']['twitter'] ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $value['social_account']['facebook'] ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $value['social_account']['insta'] ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $value['social_account']['linkdln'] ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
             <?php
            }
          ?>


  
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

 <?php 

    include_once 'pages/footer.php';

  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>