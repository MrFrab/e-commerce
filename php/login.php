<?php
    session_start();
    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

        <style>

        #form {

          text-align: center;
          margin-top:150px;

        }

        #nomeutente{
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

        #password {
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

        #submit {
          margin-top: 20px;
          width: 41.5%; 
          height: 50px;   
          font-family: 'Poppins', sans-serif;          
          font-size: 0.875em;
          background: transparent;
          outline:none;
          cursor: pointer;       
          border: solid 1px #b3aca7;
          
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
          <a id="carrello" href="../carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span><?php echo count($_SESSION['carrello']); ?></span></i></a> 
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
    </div>
            <form id="form" method="POST">
                <h1>Accedi</h1>
                <input id="nomeutente" type="email" name="EmailUtente" placeholder="E-mail"required><br>
                <input id="password" type="password" name="password" placeholder="Password" required><br>
                <input id="submit" type="submit" name="invia" value="Login"><br><br>
                Non sei ancora registrato?
                <a href="registrazione.php">Registrati</a> qui
            </form>


          <?php
          
      include("connection.php");
      include("functions.php");
  
      if($_SERVER['REQUEST_METHOD']=="POST"){
          //dati mandati
          $nome_utente=mysqli_real_escape_string($conn,($_POST['EmailUtente']));
          $password=mysqli_real_escape_string($conn,(md5($_POST['password'])));

          
          if(!empty($nome_utente)&& !empty($password) && !is_numeric($nome_utente)){
            //if per admin
            if($nome_utente=="admin@gmail.com" && $password==md5("admin")){
              $query="SELECT EmailUtente,PasswordUtente FROM cliente WHERE EmailUtente='$nome_utente' AND PasswordUtente='$password'";
              $result= mysqli_query($conn,$query);

              if($result){
                if($result && mysqli_num_rows($result)>0){
                  $user_data=mysqli_fetch_assoc($result);
                  if($user_data['PasswordUtente'] == $password){
                    $_SESSION['EmailUtente']=$user_data['EmailUtente'];
                    header("Location: admin-page.php");
                    die;
                  }
                }
                else{
                  echo "<h3 style='text-align:center;'>"."Credenziali admin invalide!"."</h3>";
                }
              }             
            }
            //else per gli altri utenti
            else{
              $query="SELECT EmailUtente,PasswordUtente FROM cliente WHERE EmailUtente='$nome_utente' AND PasswordUtente='$password'";
              $result= mysqli_query($conn,$query);

              if($result){
                if($result && mysqli_num_rows($result)>0){
                  $user_data=mysqli_fetch_assoc($result);
                  if($user_data['PasswordUtente'] == $password){
                    $_SESSION['EmailUtente']=$user_data['EmailUtente'];
                    header("Location: area_personale.php");
                    die;
                  }
                }
                else{
                  echo "<h3 style='text-align:center;'>"."Credenziali invalide!"."</h3>";
                }
              }
               
            }
          }
          else{
            echo "<h3 style='text-align:center;'>"."Credenziali invalide!"."</h3>";
          }
      }

?>
 <div class="footer-content" style="margin-top:200px;">
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