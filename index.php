
<?php
include ("common.php");
if (isset($_SESSION['email']))
 {
  header('location: product.php');
 }
 ?>
<!DOCTYPE html>
<html>
 <head> 
    <title>FoodShala</title>
   
    <?php 
    include 'head.php';
    ?>
    </head>
    <body>
      <?php
      include 'header.php';
?>
   <div id="banner-image">
     <div class="container">
       <div id="banner-content">
         <br>
         <h1>Foodshala</h1><br>
         <p>Place of your Choice </p><br>
         <a href="product.php" class="btn btn-danger btn-lg">Order Now</a>
      </div>
    </div>
     </div>

</body>
 </html>
