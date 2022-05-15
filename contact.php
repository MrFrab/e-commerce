<?php
    session_start();
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flaker</title>
        <link rel="stylesheet" href="style.css">
        <link rel='icon' type='image/png' href='img/favicon.ico' />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
      
      <style>


        #form {
          padding: 50px 0;
          text-align: center;

        }

        input {
          font-family: 'Poppins', sans-serif;
          font-size: 0.875em;
          margin: auto;
          width: 50%; 
          height: 35px;        
          padding: 10px;  
          background: transparent;
          outline: none; 
          border: solid 1px #b3aca7;
          border-bottom: none;        
        }

        textarea {
          margin: auto;
          width: 50%;
          height: 100px;
          padding: 10px;         
          background: transparent;
          outline: none;       
          font-family: 'Poppins', sans-serif;
          font-size: 0.875em;
          border: solid 1px #b3aca7;
         
        }

        #submit {
          margin: auto;
          width: 51.7%; 
          height: 50px;   
          font-family: 'Poppins', sans-serif;          
          font-size: 0.875em;
          background: transparent;
          outline:none;
          cursor: pointer;       
          border: solid 1px #b3aca7;
          
        }

        .icons{
          margin: auto;
          width: 50%;
          padding: 10px;     
          font-family: 'Poppins', sans-serif; 
          text-align: center;       
        }

       

      </style>


    </head>

    <body>

      <div class="header" id="myHeader">
        <a href="#default" class="logo">Flaker </a >
       
          <a href="index.php">Home</a>
          <a href="about.php">Su di noi</a>
          <a class="active" href="contact.php">Contatti</a>
          <a href="php/area_personale.php">Area Personale</a>
          <div class="dropdown">
            <button class="dropbtn">Categorie 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="index.php#nike-dunk-high">NIKE DUNK HIGH</a>
              <a href="index.php#nike-dunk-low">NIKE DUNK LOW</a>
              <a href="index.php#jordan4">JORDAN 4</a>
              <a href="index.php#jordan1">JORDAN 1</a>
              <a href="index.php#yeezy">YEEZY</a>
            </div>
          </div> 
          <a id="carrello" href="carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span>  <?php echo count($_SESSION['carrello']); ?></span></i></a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
      </div>
      
      <h2 class="titolo-pagina">Contattaci</h2>   
     
      
      <form id="form" action="php/contact-form.php" method="POST">
		    <input id="name" type="text" name="name" placeholder="NOME" required>
		    <input id="email" type="text" name="email" placeholder="E-MAIL" required>
        <input type="subject" name="subject" placeholder="OGGETTO E-MAIL" required>
		    <textarea id="message" type="text" name="message" placeholder="MESSAGGIO" required></textarea>
        <input id="submit" type="submit" value="Invia!" name="submit">
  
        
      </form>

      <div class="icons">
        <i class="fa fa-map-marker" style="width:30px; padding-bottom:20px;"></i><a href="https://goo.gl/maps/GqPLbeYVudfLpbXf9">Bergamo, IT </a>
        <br/> 
        <i class="fa fa-phone" style="width:30px; padding-bottom:20px;"></i>3934731273
        <br/> 
        <i class="fa fa-envelope" style="width:30px; padding-bottom:20px;"> </i>flaker.official@flaker.org
      </div>

      <div class="footer-content">
        <h3>FLAKER</h3>
        
        <ul class="socials">
          <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>         
          <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
       </ul>

       <div class="footer-bottom">
        <p>copyright &copy;2021 <a href="#">FLAKER</a>  </p>
     </div>


      
      

     <script src="script.js/script.js"></script>



    </body>
</html>