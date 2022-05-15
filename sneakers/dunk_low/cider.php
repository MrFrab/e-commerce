<?php
    session_start();
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
    $controllo=false;
    include("../../php/connection.php");

    if(isset($_GET['invia'])){

      $nomeScarpa=$_GET['nomeScarpa'];
      $taglia=$_GET['size'];

      $sql="SELECT IDScarpa,QuantitaDisponibile FROM scarpafisica WHERE ModelloScarpa='$nomeScarpa' AND TagliaDisponibile=$taglia";
      $res=mysqli_query($conn,$sql);
      if($res){
        if(mysqli_num_rows($res)>0){
          $row=mysqli_fetch_assoc($res);
    
          if($row['QuantitaDisponibile']!=0){  

          $quantita=1;
          $prodotto=array();
          $prodotto[0]=$nomeScarpa;
          $prodotto[1]=$taglia;
          $prodotto[2]=$_GET['prezzo'];
          $prodotto[3]=$quantita;
        
          array_push($_SESSION['carrello'],$prodotto);
          header("Location: ".$_SERVER['PHP_SELF']);
          exit();
          }
          else{
            $controllo=true;
          }
        }
        else{
          $controllo=true;
        }
      }
      else{
        echo "<h3 style='text-align:center; margin-top:150px;'>Errore nella query</h3>";
      }  
      mysqli_close($conn);
    }
?>

<html>
    <head>
        <title>Dunk Low Premium 'Cider'</title>
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
      <a id="carrello" href="../../carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span> <?php echo count($_SESSION['carrello']); ?></span></i></a>  
      <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </a>          
  </div>

    <div class="contenitore-esterno">
      <section class="pdp-section">
        <div class="pdp-container-main">
          <div class="pdp-sinistra">
            <img class="foto1" src="../../img/Dunk_Low/CIDER/tuttedue.jpeg">
            <div class="pdp-foto-metà">
              <img class="foto2" src="../../img/Dunk_Low/CIDER/suola.jpeg">
              <img class="foto3" src="../../img/Dunk_Low/CIDER/tuttedue.jpeg">
            </div>
          </div>
          <div class="pdp-destra">
            <div class="pdp-text">
              <i>Nike</i>
              <h1>Dunk Low Premium 'Cider'</h1>
              <h4 id="prova">Taglie</h4>
  
              <div class="grid-container">
              <form action="cider.php#prova" method="get" style="display:contents;">
                <label class="radio"> <input type="radio" name="size" value="37" checked> <span>37</span> </label>
                <label class="radio"> <input type="radio" name="size" value="37.5"> <span>37,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="38"> <span>38</span> </label>
                <label class="radio"> <input type="radio" name="size" value="38.5"> <span>38,5</span> </label>  
                <label class="radio"> <input type="radio" name="size" value="39"> <span>39</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="40"> <span>40</span> </label> 
                <br/>
                <label class="radio"> <input type="radio" name="size" value="40.5"> <span>40,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="41"> <span>41</span> </label>
                <label class="radio"> <input type="radio" name="size" value="41.5"> <span>41,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="42"> <span>42</span> </label>
                <label class="radio"> <input type="radio" name="size" value="42.5"> <span>42,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="43"> <span>43</span> </label>
                <br/>
                <label class="radio"> <input type="radio" name="size" value="43.5"> <span>43,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="44"> <span>44</span> </label>
                <label class="radio"> <input type="radio" name="size" value="44.5"> <span>44,5</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="45"> <span>45</span> </label>
                <label class="radio"> <input type="radio" name="size" value="45.5"> <span>45,5</span> </label>
                <label class="radio"> <input type="radio" name="size" value="46"> <span>46</span> </label>
              </div>
            
            
              <input type="text" name="nomeScarpa" value="Dunk Low Premium Cider" hidden>
    <input type="number" name="prezzo" value="230" hidden>
    <input type="number" name="quantita" value="1" hidden>
    <button name="invia" class="add-cart" type="submit" checked>ACQUISTA - 230€</button>
    <?php
    if($controllo){
        echo "<h3 style='text-align:left; margin:0;'>SCARPA ESAURITA</h3>";
    }           
?>
</form>
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