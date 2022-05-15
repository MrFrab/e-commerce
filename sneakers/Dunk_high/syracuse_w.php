<?php
    session_start();
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
    if(isset($_GET['nomeScarpa'])){
      $prodotto=array();
      $prodotto[0]=$_GET['nomeScarpa'];
      $prodotto[1]=$_GET['prezzo'];
      array_push($_SESSION['carrello'],$prodotto);
      header("Location: ".$_SERVER['PHP_SELF']);
      exit();
    }
?>

<html>
    <head>
        <title>Wmns Dunk High 'Syracuse' 2021</title>
        <link rel="stylesheet" href="../../style.css">   
        <script src="../../script.js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>


<body>

  <div class="header" id="myHeader">
    <a href="#default" class="logo">Flaker </a >    
      <a href="../../index.php">Home</a>
      <a href="../../about.php">Su di noi</a>
      <a href="../../contact.php">Contatti</a>
      <a href="../../php/area_personale.php">Area Personale</a>
      <div class="dropdown">
        <button class="dropbtn">Categorie 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../../index.php#nike-dunk-high">NIKE DUNK HIGH</a>
          <a href="../../index.php#nike-dunk-low">NIKE DUNK LOW</a>
          <a href="../../index.php#jordan4">JORDAN 4</a>
          <a href="../../index.php#jordan1">JORDAN 1</a>
          <a href="../../index.php#yeezy">YEEZY</a>
        </div>
      </div>  
      <a id="carrello" href="../../carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span><?php echo count($_SESSION['carrello']); ?></span></i></a>  
      <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </a>          
  </div>


  <div class="contenitore-esterno">

    <section class="pdp-section">
      <div class="pdp-container-main">
        <div class="pdp-sinistra">
          <img class="foto1" src="../../img/Dunk_High/SYRACUSE_W/tuttedue.jpeg">
          <div class="pdp-foto-metà">
            <img class="foto2" src="../../img/Dunk_High/SYRACUSE_W/suola.jpeg">
            <img class="foto3" src="../../img/Dunk_High/SYRACUSE_W/retro.jpeg">
          </div>
        </div>
        <div class="pdp-destra">
          <div class="pdp-text">
            <i>Nike</i>
<h1>Wmns Dunk High 'Syracuse' 2021</h1>

<h3>Descrizione</h3>
<p>L'edizione 2021 della Nike Dunk High SP "Syracuse" da donna riporta in auge una delle colorazioni originali dell'iconica serie "Be True to Your School" del marchio del 1985. Il top in pelle è vestito con i colori distintivi della Syracuse University, caratterizzato da una base bianca con sovrapposizioni a contrasto in Orange Blaze. La tonalità agrumata è ripetuta sullo Swoosh e sull'etichetta della linguetta intrecciata, nonché su una suola in gomma originariamente sviluppata per il legno duro del college.
</p>

          

<h4>Taglie</h4>
<div class="grid-container">

 <label class="radio"> <input type="radio" name="size" value="37" checked> <span>37</span> </label>
 <label class="radio"> <input type="radio" name="size" value="37,5"> <span>37,5</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="38"> <span>38</span> </label>
 <label class="radio"> <input type="radio" name="size" value="38,5"> <span>38,5</span> </label>  
 <label class="radio"> <input type="radio" name="size" value="39"> <span>39</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="40"> <span>40</span> </label> 
 <br/>
 <label class="radio"> <input type="radio" name="size" value="40,5"> <span>40,5</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="41"> <span>41</span> </label>
 <label class="radio"> <input type="radio" name="size" value="41,5"> <span>41,5</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="42"> <span>42</span> </label>
 <label class="radio"> <input type="radio" name="size" value="42,5"> <span>42,5</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="43"> <span>43</span> </label>
 <br/>
 <label class="radio"> <input type="radio" name="size" value="43,5"> <span>43,5</span> </label> 
 <label class="radio"> <input type="radio" name="size" value="44"> <span>44</span> </label>
</div>


<a href="#"> <button class="add-cart" checked>ACQUISTA - 250€</button> </a>

</div>
        </div>
      </div>
    </section>

    

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