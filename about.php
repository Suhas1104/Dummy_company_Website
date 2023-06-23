<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <title>About Us</title>
</head>
<body>
 <?php
 require('session.php');
 ?>
   <header>
      
      <div class="wrapper">
        <nav>
          <div class="logo">
            <img src="assets\logotrans.png">
           
        </div>
        <a href=index.php><p>X O<br>SOLUTIONS</p></a>
          <ul>
            <li>
              <a href="index.php">HOME</a>
            </li>

            <li>
              <a href="#">ABOUT</a>
            </li>

            <li>
              <a href="index.php #testimonials">TESTIMONIALS</a>
            </li>

            <li>
                <a href="#">SERVICES</a>
              </li>

           
            <?php
                if(isset($_SESSION['name'])):?>

                <li> <a href="logout.php"><?php echo $_SESSION['name'];?></a></li>
               <?php

                else:?>

                <li> <a href="login.html" class="sign"><img src="assets/sign inblack.png"></a></li>
                <?php
                endif;

                ?>
              
            
          </ul>
        </nav>
        <div class="herosec">
          <p>Transforming businesses<br>
           through technology.
        </div>
              </header>