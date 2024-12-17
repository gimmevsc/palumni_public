<?php
session_start();
include("./utils/functions.php");
include("./db/connect.php");
include("./languages/getlanguage.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="./assets/palumni_logo.svg" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" href="./style/style.css">

  <title>Palumni</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  
  
  
</head>

<body>
  <div class="root">
    <?php
    include("./components/header.php");
    ?>
    <div class="center">
      <?php
      
      include("./components/baner.php");

      include("./components/about.php");
      include("./components/profile.php");
      include("./components/services.php");
      include("./components/contacts.php");
      include("./components/tools.php");
      ?>
    </div>
    <?php
    include("./components/footer.php");
    include("./components/navigation.php");
    include("./components/order_success.php");


    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./script/script.js"></script>
  <script src="./script/theme.js"></script>
  


  

</body>



</html>
<?php
include("./db/close.php");
?>