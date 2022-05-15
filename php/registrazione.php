<?php
    session_start();
    include("connection.php");
    include("functions.php");

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
    </head>

    <style>

        #form {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: stretch;
        
        }

        input{
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
          <a id="carrello" href="carrello.php"><i id="carrello-i" class='fa fa-shopping-cart'><span>  
<?php echo count($_SESSION['carrello']); ?></span></i></a>
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
    </div>

    <div id="box" style="margin-top:150px; text-align:center;">
        <form id="form" method="POST">
            <h1>Registrati</h1>
            <input type="text" name="nome"  placeholder="Nome" required>
            <input type="text" name="cognome" placeholder="Cognome" required>
            <input type="email" name="EmailUtente" placeholder="E-mail"required>
            <input id="password" type="password" placeholder="Password" name="password" required>
            <input id="submit" type="submit" value="Registrati"><br><br>
            <div>
            Sei già registrato?  <a href="login.php">Accedi</a> qui
            </div>
        </form>
    </div>

    <?php
     if($_SERVER['REQUEST_METHOD']=="POST"){

        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $nome_utente=$_POST['EmailUtente'];
        $password=md5($_POST['password']);
        $controllo=0;

        $controlloEmail="SELECT EmailUtente FROM cliente";
        $res=mysqli_query($conn,$controlloEmail);
        if($res){
          if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
              if($row['EmailUtente']==$nome_utente){
                $controllo=1;
              }
            }
          }
        }else{
          echo "Errore nella query";
        }


        if($controllo==0){
            if(!empty($nome_utente)&& !empty($password) && !is_numeric($nome_utente)){
                    $query="INSERT INTO cliente (Nome,Cognome,EmailUtente,PasswordUtente)
                            values ('$nome','$cognome','$nome_utente','$password')";
                    mysqli_query($conn,$query);
                    header("Location:login.php");
                    die; 
            }   
            else{
                echo "<h1 style='margin-top:150px;'>"."Perfavore inserisci informazioni valide!"."</h1>";
            }
        }
        else{
            echo "<h2 style='text-align:center;'>"."Email già presente!"."</h2>";
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