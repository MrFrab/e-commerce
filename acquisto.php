<?php
   session_start();
   if(!isset($_SESSION['carrello'])){
     $_SESSION['carrello']=array();
   }

   include("php/connection.php");
   include("php/functions.php");
   
   $user_data=check_logincheckout($conn);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flaker</title>     
        <link rel="stylesheet" href="style.css">
        <link rel='icon' type='image/png' href='img/favicon.ico' />
        <script src="script.js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   

   
   <style>
     *{
       text-align:center;
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
    
      <?php

      if(isset($_POST['acquista'])){

      ?>


      
        <div style="margin-top: 300px; margin-bottom: 150px;">
          <h1 class="line-1 anim-typewriter" style="margin-top: 200px;">GRAZIE PER L'ACQUISTO</h1>   
          <h3 class="line-2 anim-typewriter2">Ti contatteremo via Email</h3>
        </div>

      <?php  
          

        $dataOrdine=date('Y/m/d');
        $indirizzoUtente=mysqli_real_escape_string($conn,$_POST['address']);
        $CAPUtente=mysqli_real_escape_string($conn,$_POST['cap']);
        $CittaUtente=mysqli_real_escape_string($conn,$_POST['citta']);
        $ProvinciaUtente=mysqli_real_escape_string($conn,$_POST['provincia']);
        $IDCliente=$user_data['IDCliente'];
        
        $inserisciOrdineCliente="INSERT INTO ordine(dataOrdine, indirizzoUtente, CAPUtente, CittàUtente, ProvinciaUtente, IDCliente) VALUES
        ('$dataOrdine','$indirizzoUtente','$CAPUtente','$CittaUtente','$ProvinciaUtente','$IDCliente')";
        
        if (mysqli_query($conn, $inserisciOrdineCliente)) {
          echo "OrdineCliente aggiunto<br>";
        } else {
          echo "Error: " . $inserisciOrdineCliente . "<br>" . mysqli_error($conn);
        }

      
        //Ciclo che scorre l'array di sessione
        foreach($_SESSION['carrello'] as $prodotto){ 
          print_r($prodotto);
        
          
          //query per IDOrdine
          $queryIDOrdine="SELECT IDOrdine FROM ordine WHERE dataOrdine='$dataOrdine' AND indirizzoUtente='$indirizzoUtente' AND CAPUtente=$CAPUtente AND CittàUtente='$CittaUtente' AND ProvinciaUtente='$ProvinciaUtente' AND IDCliente=$IDCliente";
          $resQueryOrdine=mysqli_query($conn,$queryIDOrdine);
          if($resQueryOrdine){
            if(mysqli_num_rows($resQueryOrdine)>0){
              
              while($rowIDOrdine=mysqli_fetch_assoc($resQueryOrdine)){

              
                echo "IDOrdine= ".$rowIDOrdine['IDOrdine']."<br>";

                //query su IDscarpa
                $queryIDScarpa="SELECT IDScarpa FROM scarpafisica WHERE ModelloScarpa='$prodotto[0]' AND TagliaDisponibile='$prodotto[1]' ";
                $res=mysqli_query($conn,$queryIDScarpa);
                if($res){
                  if(mysqli_num_rows($res)>0){
                    while($rowIDScarpa=mysqli_fetch_assoc($res)){
                      echo "IDScarpa= ".$rowIDScarpa['IDScarpa']."<br>";
                      $inserisciOrdineFisico="INSERT INTO composizioneordine(IDScarpa,IDOrdine,Quantita,Costo,Taglia) VALUES
                      ('$rowIDScarpa[IDScarpa]','$rowIDOrdine[IDOrdine]','$prodotto[3]','$prodotto[2]','$prodotto[1]')";
                      if (mysqli_query($conn, $inserisciOrdineFisico)) {
                        echo "OrdineCompleto eseguito correttamente<br>";
                        $rimozioneScarpa="UPDATE scarpafisica SET QuantitaDisponibile=QuantitaDisponibile-1 WHERE IDScarpa=$rowIDScarpa[IDScarpa]";
                        if (mysqli_query($conn, $rimozioneScarpa)) {
                          echo "Record updated successfully";
                        } else {
                          echo "Error updating record: " . mysqli_error($conn);
                        }
                      } else {
                        echo "Error: " . $inserisciOrdineFisico . "<br>" . mysqli_error($conn);
                      }
                    } 
                   
                  }
                  else{
                    echo "Nessuna scarpa";
                  }
                }
                else{
                    echo "Errore nella query";
                }
              }
            }
            else{
              echo "Nessun risultato";  
              $ordineMancante=1;
            }      
          }
          else{
            echo "Errore nella query";
          }
        }
   
        header('location: ordine.php');   
      }
      else{
        ?>
        <div style="margin-top: 300px; margin-bottom: 150px;">
          <h1 class="line-1 anim-typewriter" style="margin-top: 200px;">Accesso negato</h1>   
          <h3 class="line-2 anim-typewriter2"><a href="compra-scarpa.php">Torna al checkout</a></h3>
        </div>
        <?php
      }  
      ?>

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
      



      
    


        </body>
    </html>