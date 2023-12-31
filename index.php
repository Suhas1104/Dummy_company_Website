<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comp.css">
    <title>X O SOLUTIONS</title>
</head>
<body>
 <?php
 require('session.php');
 ?>
    <header>
      
      <div class="wrapper">
        <nav>
          <div class="logo">
            <a href="index.php"><img src="assets/logocolor.png"></a>
           
        </div>
        <a href="#top"><p>X O<br>SOLUTIONS</p></a>
          <ul>
            <li>
              <a href="#">HOME</a>
            </li>

            <li>
              <a href="about.php">ABOUT</a>
            </li>

            <li>
              <a href="#testimonials">TESTIMONIALS</a>
            </li>

            <li>
                <a href="#">SERVICES</a>
              </li>

           
            <?php
                if(isset($_SESSION['name'])):?>

                <li> <a href="logout.php"><?php echo $_SESSION['name'];?></a></li>
               <?php

                else:?>

                <li> <a href="login.html" class="sign"><img src="assets/signb.png"></a></li>
                <?php
                endif;

                ?>
              
            
          </ul>
        </nav>
        <div class="hero-section">
            <div class="left">
                <h1>
                    Your partner in building<br/>
                     your dreams
                  </h1>

                  <p>
                    Together, we will unlock your<br>
                     business's true potential,<br>
                      accelerate growth, and create a<br>
                      sustainable competitive advantage.
                  </p>
            </div>

             <div class="right">
                <img src="assets/rafiki.png" alt="" />
               </div>
            </div>
     </div>
</header>
     <div class="wrapper">
     <section class="clients">
      <p>Trusted by the World’s Best Companies</p>
      <img class="client" src="assets/clientLogos.png">
     </section>
    </div>

    <section id ="testimonials"  class="testimonials">
      <p class="title" style="text-align:center;">Testimonials</p>
      
      <div class="first">
        <div class="img">
        <img src="assets/testimonial.png">
        </div>
        <div class="content">
          <p>I am the owner of brogir king and it has helped
          my buisness immensely.Working with them has been an absolute game-changer for<br>
          my business, and I cannot recommend their services enough.</p>
        </div>
        <div class="info">
          <h1>Suhas Bhat</h1>
          <p>Borgir marker</p>
        </div>
      </div>
      <div class="second">
        <div class="img">
          <img src="assets/testimonial.png">
          </div>
          <div class="content">
            <p>I am the owner of brogir king and it has helped
            my buisness immensely.Working with them has been an absolute game-changer for<br>
            my business, and I cannot recommend their services enough.</p>
          </div>
          <div class="info">
            <h1>Suhas Bhat</h1>
            <p>Borgir marker</p>
          </div>
        
      </div>
      <div class="third">
        <div class="img">
          <img src="assets/testimonial.png">
          </div>
          <div class="content">
            <p>I am the owner of brogir king and it has helped
            my buisness immensely.Working with them has been an absolute game-changer for<br>
            my business, and I cannot recommend their services enough.</p>
          </div>
          <div class="info">
            <h1>Suhas Bhat</h1>
            <p>Borgir marker</p>
          </div>
    
      </div>
    </section>
   
    <section class="contact">
      <div class="right">
        <p>We are always here for you!</p>
    <form id="con" action="email.php" method="POST" autocomplete="off">      
      <input name="name" type="text" class="feedback-input" placeholder="Name" />   <br>
      <input name="email" type="text" class="feedback-input" placeholder="Email" /><br>
      <textarea name="message" class="feedback-input" placeholder="Comment"></textarea><br>
      <input type="submit" value="SEND"/>
    </form>
    </div>
    
  </section>
  <footer>
    <p>We help you make your next move</p>
    <div class="icons">
    <ul>
      <li>
        <a href="https://www.linkedin.com"><img src="assets/linkedin.png"></a>
      </li>
      <li>
        <a href="mailto:ariesluck172@gmail.com"><img src="assets/mail.png"></a>
      </li>
      <li>
        <a href="https://www.instagram.com"><img src="assets/instagram.png"></a>
      </li>
    </ul>
    </div>

  </footer>


    <script src="main.js"></script>
</body>
</html>