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

    </head>
    <body>
        
      <div class="header" id="myHeader">
          <a href="#default" class="logo">Flaker </a >
         
            <a href="index.php">Home</a>
            <a class="active" href="about.php">Su di noi</a>
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
            <a id="carrello" href="carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span>  
<?php echo count($_SESSION['carrello']); ?></span></i></a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </a>          
        </div>
      
      <div class="contenitore-esterno-about">

        <section class="about-section">
          <div class="about-container-main">
            <div class="about-sinistra1">

            </div>
            <div class="about-destra">
              <div class="about-text">
                <p style=" font-size: 15px; margin-bottom: 0;">IL NOSTRO OBBIETTIVO</p>
                <h3 style="margin-top:5px;margin-bottom: 0; font-weight: bold; font-size: 25px;">Un concetto per noi fondamentale</h3>
                <p style="margin-top: 10px; font-size: 20px;">Non limitarsi al semplice concetto di scarpa, ma rendere quest'ultima una testimonianza del nostro passato. </p>
              </div>
            </div>
          </div>
        </section>


        <section class="about-section">
          <div class="about-container-main">
            <div class="about-sinistra2">
              <div class="about-text">
                <p style=" font-size: 15px; margin-bottom: 0;">LA NOSTRA PROMESSA</p>
                <h3 style="margin-top:5px;margin-bottom: 0; font-weight: bold; font-size: 25px;">Il cliente prima di tutto</h3>
                <p style="margin-top: 10px; font-size: 20px;">La nostra politica fonda le sue radici su un trattamento adeguato del cliente. La tua soddifazione è la nostra risorsa più preziosa</p>
              </div>
            </div>
            <div class="about-destra-flip">
             
            </div>
          </div>
        </section>

        
        <section class="about-section">
          <div class="about-container-main">
            <div class="about-sinistra3">

            </div>
            <div class="about-destra">
              <div class="about-text">
                <p style=" font-size: 15px; margin-bottom: 0;">LA NOSTRA GARANZIA</p>
                <h3 style="margin-top:5px;margin-bottom: 0; font-weight: bold; font-size: 25px;">Il reselling autentico</h3>
                <p style="margin-top: 10px; font-size: 20px;">Offriamo un catalogo di sneakers che non sono più disponibili presso i rivenditori tradizionali. In molti casi questi articoli sono andati esauriti immediatamente dopo la loro uscita generale. Questi prodotti ci vengono consegnati da venditori di fiducia e garantiamo la loro originalità.</p>
              </div>
            </div>
          </div>
        </section>
        

        <h2 style="margin-top: 100px; text-align: center;">CHI SIAMO</h2> 
        <div class="about-testo-descrizione">
        <p>FLAKER nasce dalla combinazione delle passioni per lo streetwear e per il reselling di sneakers. 
          Offre un catalogo dimostrativo contenente le esclusive più rare e le sneaker da collezione, attraverso l'uso di uno stile minimale ed essenziale  </p>
        </div>

        <h2 style="text-align: center; margin-top: 90px;">I NOSTRI BRAND</h2>
        <p style="text-align: center; font-size: 24px;">La nostra attività si basa sulla fiducia e ogni articolo che vendiamo è garantito autentico.</p>

        <div class="about-container">

          <div class="about-card"> 
            <img src="img/nike-logo.png">
          </div>
          
          <div class="about-card"> 
            <img src="img/off-white.png">
          </div>

          <div class="about-card"> 
            <img class="width:50"src="img/jordan-logo.png">
          </div>

          <div class="about-card"> 
            <img src="img/jordan1-logo.png">
          </div>

          <div class="about-card1"> 
            <img src="img/travis-logo.png">
          </div>

          <div class="about-card1"> 
            <img src="img/YEEZY-logo.png">
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
	  
	  
	  
     <script src="script.js/script.js"></script>
    </body>
</html>