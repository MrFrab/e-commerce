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
        <script src="script.js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        
      </head>

    <body>
      
      <div class="header" id="myHeader">
        <a href="#default" class="logo">Flaker </a >    
          <a class="active" href="index.php">Home</a>
          <a href="about.php">Su di noi</a>
          <a href="contact.php">Contatti</a>
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
          <a id="carrello" href="carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span>  <?php echo count($_SESSION['carrello']); ?>
          </span></i></a>
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
      </div>
	
      <div class="contenitore-responsive">
 
	    <h2 class="titolo-pagina">FLAKER</h2>    

      <img src="img/gif-main.gif" alt="sneakers-1" style="width:60%; margin:auto; display:block;">
     

      <br>
       <div class="release">
         <h1>ULTIME USCITE</h1>
       </div>

      <div class="cardContainer">

        <div class="card"> 
          <a href="sneakers/dunk_low/sb_mummy.php"><img class="card-image" src="img/card/sb_mummy.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>Dunk Low SB 'Mummy'</p>   
        </div>
        
        <div class="card"> 
          <a href="sneakers/Dunk_high/Aluminium_w.php"><img class="card-image" src="img/card/aluminum.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>Wmns Dunk High 'Aluminum'</p>
        </div>
     
        <div class="card"> 
          <a href="sneakers/jordan1/bordeaux.php"><img class="card-image" src="img/card/j1_bordeaux.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>Air Jordan 1 Retro High OG 'Bordeaux'</p>
        </div>
        
        <div class="card"> 
          <a href="sneakers/Dunk_high/moon_fossil_w.php"><img class="card-image" src="img/card/moon_fossil.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>Wmns Dunk High 'Moon Fossil'</p>
        </div>
        
        <div class="card"> 
          <a href="sneakers/jordan1/A_MA_MANIERE_HIGH_OG_AIRNESS.php"><img class="card-image" src="img/card/j1_a_ma_maniere.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>A Ma Maniére x Air Jordan 1 High OG 'Airness'</p>
        </div>
        
        <div class="card"> 
          <a href="sneakers/yeezy/foam_vermilion.php"><img class="card-image" src="img/card/vermilion.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
            <br/>Yeezy Foam Runner 'Vermilion'</p>
        </div>
        
        <div class="card"> 
          <a href="sneakers/jordan 4/lightning.php"><img class="card-image" src="img/card/j4_light.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
            <br/>Air Jordan 4 Retro 'Lightning' 2021</p>
        </div>
        
        <div class="card" > 
          <a href="sneakers/yeezy/slide_pure.php"><img class="card-image" src="img/card/slide_pure.jpeg" alt="Scarpa1"></a>
          <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
            <br/>Yeezy Slides 'Pure'</p>
        </div>
      </div>

        <br id="nike-dunk-high">
        <br>
        <br>
        <br>
        <br>

        <div class="release">
          <h1>NIKE DUNK HIGH</h1>
        </div>

        <div class="cardContainer">
 
         <div class="card"> 
           <a href="sneakers/Dunk_high/Aluminium_w.php"><img class="card-image" src="img/card/aluminum.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Wmns Dunk High 'Aluminum'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/bw.php"><img class="card-image" src="img/card/bw_high.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>DUNK HIGH 'BLACK WHITE'</p>
         </div>
      
         <div class="card"> 
           <a href="sneakers/Dunk_high/moon_fossil_w.php"><img class="card-image" src="img/card/moon_fossil.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Wmns Dunk High 'Moon Fossil'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/sb_hawaii.php"><img class="card-image" src="img/card/sb_maui.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk High SB 'Maui Wowie'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/sb_reversegoldenrod.php"><img class="card-image" src="img/card/sb_reversegoldenrod.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk High Pro SB 'Reverse Goldenrod'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/sb_strawberry_cough.php"><img class="card-image" src="img/card/strawberry.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk High SB 'Strawberry Cough'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/spartan_green.php"><img class="card-image" src="img/card/spartan_green.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk High SP 'Spartan Green'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/Dunk_high/syracuse_w.php"><img class="card-image" src="img/card/syracuse.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Wmns Dunk High 'Syracuse' 2021</p>
         </div>
        </div>
      
        <br id="nike-dunk-low">
        <br>
        <br>
        <br>
        <br>

        <div class="release">
          <h1>NIKE DUNK LOW</h1>
        </div>
                
        <div class="cardContainer">
 
         <div class="card"> 
           <a href="sneakers/dunk_low/bw_low.php"><img class="card-image" src="img/card/bw_low.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low 'Black White'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/championship_red.php"><img class="card-image" src="img/card/low_champred.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low 'Championship Red'</p>
         </div>
      
         <div class="card"> 
           <a href="sneakers/dunk_low/cider.php"><img class="card-image" src="img/card/cider.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low Premium 'Cider'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/green_glow_w.php"><img class="card-image" src="img/card/green_glow.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Wmns Dunk Low 'Green Glow'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/michigan.php"><img class="card-image" src="img/card/michigan.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low 'Michigan' 2021</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/plum.php"><img class="card-image" src="img/card/plum.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low Retro Vol. 1 SP 'Plum'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/sb_mummy.php"><img class="card-image" src="img/card/sb_mummy.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dunk Low SB 'Mummy'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/dunk_low/sb_strangelove.php"><img class="card-image" src="img/card/strangelove.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>StrangeLove x Dunk Low SB 'Valentine's Day'</p>
         </div>
        </div>

        <br id="jordan4">
        <br>
        <br>
        <br>
        <br>

        <div class="release">
          <h1>JORDAN 4</h1>
        </div>

        <div class="cardContainer">
 
         <div class="card"> 
           <a href="sneakers/jordan 4/cool_grey.php"><img class="card-image" src="img/card/coolgrayjordan.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'Cool Grey' 2019</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/desert_moss.php"><img class="card-image" src="img/card/desertmoss.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Union LA x Air Jordan 4 Retro 'Desert Moss'</p>
         </div>
      
         <div class="card"> 
           <a href="sneakers/jordan 4/lightning.php"><img class="card-image" src="img/card/lightning.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'Lightning' 2021</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/purple_metallic.php"><img class="card-image" src="img/card/purplemetallic.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'Purple Metallic'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/sail_w.php"><img class="card-image" src="img/card/sail.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Off-White x Wmns Air Jordan 4 SP 'Sail'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/taupe_haze.php"><img class="card-image" src="img/card/taupehaze.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'Taupe Haze'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/university_blue.php"><img class="card-image" src="img/card/universityblue.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'University Blue'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan 4/white_oreo.php"><img class="card-image" src="img/card/whiteoreo.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 4 Retro 'White Oreo'</p>
         </div>
        </div>

        <br id="jordan1">
        <br>
        <br>
        <br>
        <br>

        <div class="release">
          <h1>JORDAN 1</h1>
        </div>

        <div class="cardContainer">
 
         <div class="card"> 
           <a href="sneakers/jordan1/A_MA_MANIERE_HIGH_OG_AIRNESS.php"><img class="card-image" src="img/card/j1_a_ma_maniere.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>A Ma Maniére x Air Jordan 1 High OG 'Airness'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/bordeaux.php"><img class="card-image" src="img/card/j1_bordeaux.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 1 Retro High OG 'Bordeaux'</p>
         </div>
      
         <div class="card"> 
           <a href="sneakers/jordan1/chicago_off.php"><img class="card-image" src="img/card/chicago.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Off-White x Air Jordan 1 Retro High OG 'Chicago'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/dior_high.php"><img class="card-image" src="img/card/dior.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Dior x Air Jordan 1 High</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/FRAGMENT_DESIGN_X_TRAVIS_SCOTT.php"><img class="card-image" src="img/card/fragmenttravis.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Fragment Design x Travis Scott x Air Jordan 1 Retro High</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/travis_mocha.php"><img class="card-image" src="img/card/travismocha.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Travis Scott x Air Jordan 1 Retro High OG 'Mocha'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/turbo_green.php"><img class="card-image" src="img/card/turbogreen.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 1 Retro High OG 'Turbo Green'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/jordan1/university_blue.php"><img class="card-image" src="img/card/universityblue1.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Nike</i>
             <br/>Air Jordan 1 Retro High OG 'University Blue'</p>
         </div>
        </div>
  
        <br id="yeezy">
        <br>
        <br>
        <br>
        <br>

        <div class="release">
          <h1>YEEZY</h1>
        </div>
 
        <div class="cardContainer">
 
         <div class="card"> 
           <a href="sneakers/yeezy/350_black_rf.php"><img class="card-image" src="img/card/blackreflective.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Boost 350 V2 'Black Reflective'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/350_zebra.php"><img class="card-image" src="img/card/zebra.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Boost 350 V2 'Zebra'</p>
         </div>
      
         <div class="card"> 
           <a href="sneakers/yeezy/500_salt.php"><img class="card-image" src="img/card/salt.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy 500 'Salt'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/500_utility_black.php"><img class="card-image" src="img/card/utilityblack.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy 500 'Utility Black'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/700_static.php"><img class="card-image" src="img/card/static.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Boost 700 V2 'Static'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/700_wawe_runner.php"><img class="card-image" src="img/card/waverunner.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Boost 700 'Wave Runner'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/foam_vermilion.php"><img class="card-image" src="img/card/vermilion.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Foam Runner 'Vermilion'</p>
         </div>
         
         <div class="card"> 
           <a href="sneakers/yeezy/slide_pure.php"><img class="card-image" src="img/card/slide_pure.jpeg" alt="Scarpa1"></a>
           <p class="card-p"><i style="  font-size: 15px; text-align: center;">Adidas</i>
             <br/>Yeezy Slides 'Pure'</p>
         </div>
        </div>
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
      </div>
    
      

    </body>
</html>