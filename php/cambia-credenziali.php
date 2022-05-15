<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_login($conn);


    if(!isset($_SESSION['carrello'])){
      $_SESSION['carrello']=array();
    }


    if($_SERVER['REQUEST_METHOD']=="POST"){
        //dati mandati
        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $nome_utente=$_POST['EmailUtente'];
        $password=md5($_POST['password']);

        if(!empty($nome_utente) && !empty($password) && !is_numeric($nome_utente)){
            $query="UPDATE cliente SET Nome='$nome', Cognome='$cognome', EmailUtente='$nome_utente', PasswordUtente='$password'
            WHERE IDCliente=$user_data[IDCliente]";
            mysqli_query($conn,$query);
            header("Location:area_personale.php");
            die;
        }else{
            echo "<h1 style='margin-top:150px;'>"."Perfavore inserisci informazioni valide!"."</h1>";
        }
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
        margin-top:150px;

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
          <a href="../index.html">Home</a>
          <a href="../about.html">Su di noi</a>
          <a href="../contact.html">Contatti</a>
          <a class="active" href="#">Area Personale</a>
          <div class="dropdown">
            <button class="dropbtn">Categorie 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="../index.html#nike-dunk-high">NIKE DUNK HIGH</a>
              <a href="../index.html#nike-dunk-low">NIKE DUNK LOW</a>
              <a href="../index.html#jordan4">JORDAN 4</a>
              <a href="../index.html#jordan1">JORDAN 1</a>
              <a href="../index.html#yeezy">YEEZY</a>
            </div>
          </div>  
          <a id="carrello" href="carrello.html"><i id="carrello-i" class='fa fa-shopping-cart'><span>  
<?php echo count($_SESSION['carrello']); ?></span></i></a>
          <a href="javascript:void(1);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </a>          
    </div>

    <div id="box" style="margin-top:150px; text-align:center;">
        <form id="form" method="POST">
            <h1>Modifica i tuoi dati</h1>
            <input type="text" name="nome" value="<?php echo $user_data['Nome'];?>" required><br>
            <input type="text" name="cognome" value="<?php echo $user_data['Cognome'];?>" required><br>
            <input type="email" name="EmailUtente" value="<?php echo $user_data['EmailUtente'];?>" required><br>
            <input id="password" type="password" placeholder="Password" name="password" required><br>
            <input id="submit" type="submit" value="Invia"><br><br>
            Torna all' <a href="area_personale.php">area personale</a>
        </form>
    </div>



</body>
</html>