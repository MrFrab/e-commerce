<?php
      session_start();
        if(!isset($_SESSION['carrello'])){
          $_SESSION['carrello']=array();
        }
       
        if(isset($_GET['vuoto'])){
          //svuota l'array $_SESSION['carrello']
          unset($_SESSION['carrello']);
          header('location: '.$_SERVER['PHP_SELF']);
          exit();
        }
      
        include("php/connection.php");

      
       


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
        <meta charset="utf-8" />
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
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
      </div>

   

        <div class="cart-table-container">
          <table id="cart-table">
            <thead>    
              <th>Rimuovi</th>
              <th>Immagine</th>
              <th>Prodotto</th>
              <th>Taglia</th>
              <th>Prezzo</th>
              <th>Quantità</th>
              <th>Totale</th>     
            </thead>
          <?php
            $totale=0;
            foreach($_SESSION['carrello'] as $prodotto){                             
              echo "<tr>";
          ?>  
   
          <?php  
              $sql="SELECT Immagine FROM modelloscarpa WHERE ModelloScarpa='$prodotto[0]'";
              $res=mysqli_query($conn,$sql);
              echo "<td></td>";
              echo "<td>";

              while($row=mysqli_fetch_assoc($res)){                 
          ?>
              <img src="<?php echo $row['Immagine'];?>" alt="scarpa" width="150px"> 
          <?php
              }
              echo "</td>";
      
              echo "<td>".$prodotto[0]."</td>";
              echo "<td>".$prodotto[1]."</td>";
              echo "<td>".$prodotto[2]."</td>";
              echo "<td>".$prodotto[3]."</td>";
              $totale += $prodotto[2];
              echo "<td></td>";
              echo "</tr>";

            }

            echo "<tr>";
            echo "<td>"?>  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?vuoto=1"> Svuota il carrello</a><?php "</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".
            number_format($totale,2).' &euro; </td></tr>';
          ?>
          </table>       
        </div>
        
        <div style="margin:0 auto; text-align:center;"> 
        <form action="carrello.php" method="POST">
        <button name="invia" class="add-cart" type="submit" checked>Procedi con l'ordine</button>
        </form>
        </div>
       <?php
        if(isset($_POST['invia'])){
          if(empty($_SESSION['carrello'])){
            echo "<h3 style='text-align:center;'>"."Carrello vuoto"."</h3>";
          }
          else if(!isset($_SESSION['EmailUtente'])){
              echo "<h3 style='text-align:center;'>"."Devi essere loggato per continuare l'ordine"."</h3>";
              echo "<div style='text-align:center;margin:0 auto;'><a href='php/login.php'>Loggati qui</a></div>";
          } 
          else if(!empty($_SESSION['carrello'] && isset($_SESSION['EmailUtente']))){
              header('location: compra-scarpa.php');            
          }
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
      </div>



    </body>
</html>