<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_loginadmin($conn);
    
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
    
    $controlloScarpaPresente=false;


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

        <style>

         #rimuovi{
         
          
          height: 50px;   
          font-family: 'Poppins', sans-serif;          
          font-size: 0.875em;
          background: transparent;
          outline:none;
          cursor: pointer;       
          border: solid 1px #b3aca7;
         }


         #form {
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: space-evenly;
          align-items: stretch;
          }

          #input-aggiungi{
          font-family: 'Poppins', sans-serif;
          font-size: 0.875em;
          margin: auto;
          width: 40%; 
          height: 35px;        
          padding: 10px;  
          background: transparent;
          outline: none; 
          border: solid 1px #b3aca7;
          border-bottom:none;
          }

          #input-costo{
          font-family: 'Poppins', sans-serif;
          font-size: 0.875em;
          margin: auto;
          width: 40%; 
          height: 35px;        
          padding: 10px;  
          background: transparent;
          outline: none; 
          border: solid 1px #b3aca7;
          }

          #select-aggiungi{
          font-family: 'Poppins', sans-serif;
          font-size: 0.875em;
          margin: auto;
          width: 46%; 
          height: 50px;        
          padding: 10px;  
          background: transparent;
          outline: none; 
          border: solid 1px #b3aca7;
          margin-bottom:10px;
          }

          #submit-aggiungi {
          width: 30%; 
          height: 50px;   
          font-family: 'Poppins', sans-serif;          
          font-size: 0.875em;
          background: transparent;
          outline:none;
          cursor: pointer;       
          border: solid 1px #b3aca7;
          margin:20px auto;
          }

          input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none; 
}
        </style>
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

    <h1 style="margin-top:150px; text-align:center;">Benvenuto nel pannello di controllo admin</h1>
    <div style="text-align:center;"><a href="logout.php">Logout</a></div>
 

    <!--Mostra dati utenti -->
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
      
      <h1 style="text-align:center;margin-top:80px;">Ecco gli utenti iscritti al sito</h1>
      <?php
        $queryUtenti="SELECT * FROM cliente";
        $res=mysqli_query($conn,$queryUtenti);
        if($res){
            if(mysqli_num_rows($res)>0){
                echo "<div class='areapers-table-container-ordini'>";
                echo  "<table id='areapers-table-ordini'>";
                echo "<th>Nome</th>";
                echo "<th>Cognome</th>";
                echo "<th>EmailUtente</th>";
                echo "<th>PasswordUtente</th>";  

                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>".$row['Nome']."</td>";
                    echo "<td>".$row['Cognome']."</td>";
                    echo "<td>".$row['EmailUtente']."</td>";
                    echo "<td>".$row['PasswordUtente']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }else{
                echo "<p style='text-align:center;'>Non c'è nessun utente iscritto :-(</p>";
            }
        }   
        else{
            echo "Errore nella query";
        }
      
        //Mostra dati scarpe
        echo "<h1 style='text-align:center;margin-top:80px;'>Ecco le scarpe presenti in magazzino</h1>";
        $queryScarpe="SELECT * FROM scarpafisica";
        $res=mysqli_query($conn,$queryScarpe);
        if($res){
            if(mysqli_num_rows($res)>0){
                echo "<div class='areapers-table-container-ordini'>";
                echo  "<table id='areapers-table-ordini'>";
                echo "<th>Modello Scarpa</th>";
                echo "<th>Taglia Disponibile</th>";
                echo "<th>Quantità</th>";
                echo "<th>Costo</th>";  
                echo "<th>Rimuovi</th>";  

                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>".$row['ModelloScarpa']."</td>";
                    echo "<td>".$row['TagliaDisponibile']."</td>";
                    echo "<td>".$row['QuantitaDisponibile']."</td>";
                    echo "<td>".$row['Costo']."€</td>";
                    ?>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input id="rimuovi" type="submit" name="Rimuovi" value="Rimuovi">
                            <input type="text" name="IDScarpa" value="<?php echo $row['IDScarpa'];?>" hidden>
                        </form>
                    </td>

                    <?php

                    

                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }else{
                echo "<p style='text-align:center;'>Non c'è nessuna scarpa :-(</p>";
            }
        }   
        else{
            echo "Errore nella query";
        }

        //Rimuovi scarpa da tabella
        if(isset($_POST['Rimuovi'])){
            $IDScarpa=$_POST['IDScarpa'];
            
            $rimuoviScarpa= "DELETE FROM `scarpafisica` WHERE `scarpafisica`.`IDScarpa` = $IDScarpa";
            if (mysqli_query($conn, $rimuoviScarpa)) {
                $controllaReferenze="SELECT IDScarpa FROM scarpafisica NATURAL JOIN composizioneordine WHERE IDScarpa=$IDScarpa";
                  $res=mysqli_query($conn,$controllaReferenze);
                  if($res){
                    if(mysqli_num_rows($res)>0){
                        echo "<p style='text-align:center;'>Scarpa presente in un ordine</p>";
                        exit();
                    }
                    else{
                        ?><script>window.location.href=window.location.href;</script>
                        <?php 
                        echo "<p style='text-align:center;'>Scarpa rimossa con successo</p>";
                        exit();
                    }
                  }else{    
                      echo "Errore nella query";
                  }
               
              } else {   
                echo "<p style='text-align:center;'>Scarpa presente in un ordine</p>";
                $controlloScarpaPresente=true;
              }
        }

      ?>

      <!-- Aggiungi scarpafisica-->
      <h1 style='text-align:center;margin-top:80px;'>Aggiungi scarpa</h1>
      <div id="box" style="margin-top:150px; text-align:center;">
        <form id="form" method="POST" action="admin-page.php">
            <select name="ModelloScarpa" id="select-aggiungi">
            <?php
              $queryModelli="SELECT * FROM modelloscarpa ORDER BY Brand";
              $res=mysqli_query($conn,$queryModelli);
              if($res){
                if(mysqli_num_rows($res)>0){
                  while($row = mysqli_fetch_assoc($res)) {
                    echo "<option name='ModelloScarpa' value='".$row['ModelloScarpa']."'>".$row['ModelloScarpa']."</option>";
                  }
                } 
                else{
                echo "0 results";
                }
              }
              else{
                echo "Errore nella query";
              }
            ?>

            </select>
            
            <input id="input-aggiungi" type="number" name="taglia" placeholder="Taglia" min="37" max="46" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "4" step=".01" required>
            <input id="input-aggiungi" type="number" name="quantita" placeholder="Quantità" min="1" max="100000" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "6" required>
            <input id="input-costo" type="number" placeholder="Costo" name="costo" min="0" max="100000" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "6" required>
            <input id="submit-aggiungi" type="submit" name="aggiungi" value="Aggiungi"><br><br>
        </form>
      </div>


      <?php
        if(isset($_POST['aggiungi'])){
          $queryAggiuntaScarpa="INSERT INTO scarpafisica(ModelloScarpa, TagliaDisponibile, QuantitaDisponibile, Costo)
          VALUES ('$_POST[ModelloScarpa]',$_POST[taglia],$_POST[quantita],$_POST[costo])";

          if (mysqli_query($conn, $queryAggiuntaScarpa)) {
            echo "Scarpa aggiunta correttamente";
            ?><script>window.location.href=window.location.href;</script>
            <?php 
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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