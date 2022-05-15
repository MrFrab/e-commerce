<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_login($conn);
    
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
    
    if($user_data['EmailUtente']=="admin@gmail.com" && $user_data['PasswordUtente']==md5("admin")){
      header("Location: admin-page.php");
    }

    $controlloOrdine=0;
    $controlloData=0;

?>

<!DOCTYPE html>
<head>
        <title>Flaker</title>     
        <link rel="stylesheet" href="../style.css">
        <script src="../script.js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
<body>
    <div class="header" id="myHeader">
        <a href="#default" class="logo">Flaker </a >    
          <a href="../index.php">Home</a>
          <a href="../about.php">Su di noi</a>
          <a href="../contact.php">Contatti</a>
          <a class="active" href="#">Area Personale</a>
          <div class="dropdown">
            <button class="dropbtn">Categorie 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="../index.php#nike-dunk-high">NIKE DUNK HIGH</a>
              <a href="../index.php#nike-dunk-low">NIKE DUNK LOW</a>
              <a href="../index.php#jordan4">JORDAN 4</a>
              <a href="../index.php#jordan1">JORDAN 1</a>
              <a href="../index.php#yeezy">YEEZY</a>
            </div>
          </div>  
          <a id="carrello" href="../carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span>  <?php echo count($_SESSION['carrello']); ?></span></i></a>
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
    </div>

    <h1 style="margin-top:150px; text-align:center;">Benvenuto nell'area personale <?php echo $user_data['Nome']?></h1>
    <div style="text-align:center;"><a href="logout.php">Logout</a></div>
 
    <h1 style="text-align:center;">Ecco i tuoi dati</h1>
    <div class="areapers-table-container">
          <table id="areapers-table-utente">   
                  <th>Nome</th>
                  <th>Cognome</th>
                  <th>Email</th>
                <?php
                  echo "<tr>";
                  echo "<td>".$user_data['Nome']."</td>";
                  echo "<td>".$user_data['Cognome']."</td>";
                  echo "<td>".$user_data['EmailUtente']."</td>";
                  echo "</tr>";
               
                ?>
          </table>
      </div>
      <h4 style="text-align:center;"><a href="cambia-credenziali.php" style="font-weight:lighter;">Modifica qui i tuoi dati</a></h4>

    <h1 style="text-align:center;">Ecco i tuoi ordini</h1>
    <?php
      $IDCliente=$user_data['IDCliente'];
      
      $sql="SELECT IDOrdine,dataOrdine,indirizzoUtente,CAPUtente,ProvinciaUtente,Quantita,Costo,Taglia,modelloscarpa
      FROM ordine NATURAL JOIN composizioneordine NATURAL JOIN scarpafisica
      WHERE IDCliente=$IDCliente ORDER BY IDOrdine";
      $res=mysqli_query($conn,$sql);
      if(!$res){
        echo "<p style='text-align:center;'>Non possiedi nessun ordine</p>";
      }else{
      if(mysqli_num_rows($res)>0){
          echo "<div class='areapers-table-container-ordini'>";
          echo  "<table id='areapers-table-ordini'>";
                  echo "<th>Data Ordine</th>";
                  echo "<th>Indirizzo di spedizione</th>";
                  echo "<th>CAP</th>";
                  echo "<th>Città</th>";
                  echo "<th>Scarpa</th>";
                  echo "<th>Quantità</th>";
                  echo "<th>Costo</th>";
                  echo "<th>Taglia</th>";      
          while($row=mysqli_fetch_assoc($res)){
            $costoTot=$row['Quantita']*$row['Costo'];
                    echo "<tr>";
                    
                    if($controlloOrdine==$row['IDOrdine']){

                      if(!($controlloData==$row['dataOrdine'])){
                        echo "<td>".$row['dataOrdine']."</td>";
                        $controlloData=$row['dataOrdine'];
                        $controlloOrdine=$row['IDOrdine'];
                      }else{
                        echo "<td></td>";
                      }
                      
                    }
                    else{
                      echo "<td>".$row['dataOrdine']."</td>";
                      $controlloData=$row['dataOrdine'];
                      $controlloOrdine=$row['IDOrdine'];
                    }

                    echo "<td>".$row['indirizzoUtente']."</td>";
                    echo "<td>".$row['CAPUtente']."</td>";
                    echo "<td>".$row['ProvinciaUtente']."</td>";
                    echo "<td>".$row['modelloscarpa']."</td>";
                    echo "<td>".$row['Quantita']."</td>";
                    echo "<td>".$costoTot." &euro;</td>";
                    echo "<td>".$row['Taglia']."</td>";
                    echo "</tr>";
          }
          echo "</table>";
          echo "</div>";
        }
        else
        {
          echo "<p style='text-align:center;'>Non possiedi nessun ordine</p>";
    
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