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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  /* icone */
    
        <style>
          input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
        </style>

	</head>
	<body>
    <div class="header" id="myHeader">
      <a href="#default" class="logo">Flaker </a >
        <a href="index.php">Home</a>
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
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                  
    </div>
	
	<div class="checkout-title"><h1>CHECKOUT</h1></div>
	

<div class="contenitore-esterno-compra">
  <div class="compra-row">
    <div class="compra-column">
      <div class=checkout-bordo1>
<form action="acquisto.php" method="POST">
        <h3 style="margin-left:20px">Indirizzo di consegna</h3>
    
                <label class="checkout-label" for="fname">Nome</label>
                <?php
                 include("php/connection.php");
                 include("php/functions.php");
                 
                 $user_data=check_logincheckout($conn);
                
                ?>
                <input class="compra-input" type="text" name="nome" value="<?php echo $user_data['Nome']; ?> " readonly>
                
                <label class="checkout-label"for="fname">Cognome</label>
                <input class="compra-input" type="text" name="cognome" value="<?php echo $user_data['Cognome']; ?> " readonly>
    
                <label class="checkout-label"for="email">Email</label>
                <input class="compra-input" type="text" name="email" value="<?php echo $user_data['EmailUtente']; ?> " readonly>
    
                <label class="checkout-label"for="adr">Indirizzo</label>
                <input class="compra-input" type="text" name="address" required>
    
                <label class="checkout-label"for="città">Città</label>
                <input class="compra-input" type="text" name="citta" required>
    
                <label class="checkout-label"for="prov">Provincia: </label>
                <select id="compra-province" name="provincia" required>
                  <option value="Agrigento">Agrigento</option>
                  <option value="Alessandria">Alessandria</option>
                  <option value="Ancona">Ancona</option>
                  <option value="Aosta">Aosta</option>
                  <option value="Arezzo">Arezzo</option>
                  <option value="Ascoli">Ascoli piceno</option>
                  <option value="Asti">Asti</option>
                  <option value="Avellino">Avellino</option>
                  <option value="Bari">Bari</option>
                  <option value="Barletta-andria-trani">Barletta-andria-trani</option>
                  <option value="Belluno">Belluno</option>
                  <option value="Benevento">Benevento</option>
                  <option value="Bergamo">Bergamo</option>
                  <option value="Biella">Biella</option>
                  <option value="Bologna">Bologna</option>
                  <option value="Bolzano">Bolzano</option>
                  <option value="Brescia">Brescia</option>
                  <option value="Brindisi">Brindisi</option>
                  <option value="Cagliari">Cagliari</option>
                  <option value="Caltanissetta">Caltanissetta</option>
                  <option value="Campobasso">Campobasso</option>
                  <option value="Carbonia-iglesias">Carbonia-iglesias</option>
                  <option value="Caserta">Caserta</option>
                  <option value="Catania">Catania</option>
                  <option value="Catanzaro">Catanzaro</option>
                  <option value="Chieti">Chieti</option>
                  <option value="Como">Como</option>
                  <option value="Cosenza">Cosenza</option>
                  <option value="Cremona">Cremona</option>
                  <option value="Crotone">Crotone</option>
                  <option value="Cuneo">Cuneo</option>
                  <option value="Enna">Enna</option>
                  <option value="Fermo">Fermo</option>
                  <option value="Ferrara">Ferrara</option>
                  <option value="Firenze">Firenze</option>
                  <option value="Foggia">Foggia</option>
                  <option value="Forli’-cesena">Forli’-cesena</option>
                  <option value="Frosinone">Frosinone</option>
                  <option value="Genova">Genova</option>
                  <option value="Gorizia">Gorizia</option>
                  <option value="Grosseto">Grosseto</option>
                  <option value="Imperia">Imperia</option>
                  <option value="Isernia">Isernia</option>
                  <option value="La Spezia">La Spezia</option>
                  <option value="L’Aquila">L’Aquila</option>
                  <option value="Latina">Latina</option>
                  <option value="Lecce">Lecce</option>
                  <option value="Lecco">Lecco</option>
                  <option value="Livorno">Livorno</option>
                  <option value="Lodi">Lodi</option>
                  <option value="Lucca">Lucca</option>
                  <option value="Macerata">Macerata</option>
                  <option value="Mantova">Mantova</option>
                  <option value="Massa-carrara">Massa-carrara</option>
                  <option value="Matera">Matera</option>
                  <option value="Medio Campidano">Medio Campidano</option>
                  <option value="Messina">Messina</option>
                  <option value="Milano">Milano</option>
                  <option value="Modena">Modena</option>
                  <option value="Monza e della brianza">Monza e della brianza</option>
                  <option value="Napoli">Napoli</option>
                  <option value="Novara">Novara</option>
                  <option value="Nuoro">Nuoro</option>
                  <option value="Ogliastra">Ogliastra</option>
                  <option value="Olbia-tempio">Olbia-tempio</option>
                  <option value="Oristano">Oristano</option>
                  <option value="Padova">Padova</option>
                  <option value="Palermo">Palermo</option>
                  <option value="Parma">Parma</option>
                  <option value="Pavia">Pavia</option>
                  <option value="Perugia">Perugia</option>
                  <option value="Pesaro e Urbino">Pesaro e Urbino</option>
                  <option value="Pescara">Pescara</option>
                  <option value="Piacenza">Piacenza</option>
                  <option value="Pisa">Pisa</option>
                  <option value="Pistoia">Pistoia</option>
                  <option value="Pordenone">Pordenone</option>
                  <option value="Potenza">Potenza</option>
                  <option value="Prato">Prato</option>
                  <option value="Ragusa">Ragusa</option>
                  <option value="Ravenna">Ravenna</option>
                  <option value="Reggio di calabria">Reggio di calabria</option>
                  <option value="Reggio nell’emilia">Reggio nell’emilia</option>
                  <option value="Rieti">Rieti</option>
                  <option value="Rimini">Rimini</option>
                  <option value="Roma">Roma</option>
                  <option value="Rovigo">Rovigo</option>
                  <option value="Salerno">Salerno</option>
                  <option value="Sassari">Sassari</option>
                  <option value="Savona">Savona</option>
                  <option value="Siena">Siena</option>
                  <option value="Siracusa">Siracusa</option>
                  <option value="Sondrio">Sondrio</option>
                  <option value="Taranto">Taranto</option>
                  <option value="Teramo">Teramo</option>
                  <option value="Terni">Terni</option>
                  <option value="Torino">Torino</option>
                  <option value="Trapani">Trapani</option>
                  <option value="Trento">Trento</option>
                  <option value="Treviso">Treviso</option>
                  <option value="Trieste">Trieste</option>
                  <option value="Udine">Udine</option>
                  <option value="Varese">Varese</option>
                  <option value="Venezia">Venezia</option>
                  <option value="Verbano-cusio-ossola">Verbano-cusio-ossola</option>
                  <option value="Vercelli">Vercelli</option>
                  <option value="Verona">Verona</option>
                  <option value="Vibo valentia">Vibo valentia</option>
                  <option value="Vicenza">Vicenza</option>
                  <option value="Viterbo">Viterbo</option>
              </select>
                
    
                <label class="checkout-label" for="cap">CAP</label>
                <input class=compra-input type="number" name="cap" 
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "5" required>

                <label class="checkout-label"for="number">Numero di telefono</label>
                <input class="compra-input" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "10"name="numeroTelefono" required>
    
      </div>
    </div>

    <div class="compra-column">
      <div class=checkout-bordo2>

        <h3 style="margin-left:20px">Metodi di pagamento</h3>
    
        <div class="scelta-carta">

        <input type="radio" id="html" name="fav_language" value="Paypal" required> Paypal <i class="fa fa-paypal" style="color:#0079C1"></i>
        <br/>
        <br/>

        <input type="radio" id="html" name="fav_language" value="Cartadicredito" required> Carta di credito

        </div>
        <div>
        <i class="fa fa-cc-visa" style="color:blue; font-size: 30px; margin-top: 20px; margin-left: 30px;"></i>     
        <i class="fa fa-cc-mastercard" style="color:red; font-size: 30px;"></i>
        </div> 

        <label class="checkout-label" for="cname" style="width: 100%;">Nome e cognome sulla carta</label>
        
        <input class="compra-input" style="margin-left:39px; width: 70%;" type="text" id="cname" name="cardname" required>

        <label class="checkout-label" style="width: 100%;" for="ccn">Numero carta di credito</label>
        <input class="compra-input" style="margin-left:39px; width: 70%;" id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
        
        <label class="checkout-label" style="width: 100%;" for="expmonth">Scadenza</label>
        <input class="compra-input" style="margin-left:39px; width: 70%;" type="month" name="scadenza"
           min="2022-04" max="2050-12" required>
        
        <label class="checkout-label" style="width: 100%;" for="cvv">CVV</label>
        <input class="compra-input" style="margin-left:39px; width: 70%;" type="number" id="cvv" name="cvv" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "3" required>

        <div class="bottone-acquista">
          <button class="compra-checkout" type="submit" name="acquista" checked>ACQUISTA</button>
          </div>
          </form>
      </div>
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