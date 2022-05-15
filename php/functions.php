<?php

    function check_login($conn){
        if(isset($_SESSION['EmailUtente'])){
            $id=$_SESSION['EmailUtente'];
            $query="SELECT * FROM cliente WHERE EmailUtente='$id' limit 1";

            $result=mysqli_query($conn, $query);
            if($result && mysqli_num_rows($result)>0){

                $user_data=mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        //reindirizzamento al login
        header("Location:login.php");
        die;
    }

    function check_loginadmin($conn){
        if(isset($_SESSION['EmailUtente'])){
            $id=$_SESSION['EmailUtente'];
            $query="SELECT * FROM cliente WHERE EmailUtente='$id' limit 1";

            $result=mysqli_query($conn, $query);
            if($result && mysqli_num_rows($result)>0){

                $user_data=mysqli_fetch_assoc($result);
                if($user_data['EmailUtente']=="admin@gmail.com" && $user_data['PasswordUtente']==md5("admin")){
                    return $user_data;
                }
                else{ 
                    header("Location:area_personale.php");
                    die;
                }
            }
        }
        //reindirizzamento al login
        header("Location:login.php");
        die;
    }

    function check_logincheckout($conn){
        if(isset($_SESSION['EmailUtente']) && !empty($_SESSION['carrello'])){
                $id=$_SESSION['EmailUtente'];
                $query="SELECT * FROM cliente WHERE EmailUtente='$id' limit 1";

                $result=mysqli_query($conn, $query);
                if($result && mysqli_num_rows($result)>0){

                    $user_data=mysqli_fetch_assoc($result);
                    return $user_data;
        }
            
        }
        //reindirizzamento al login
        header("Location:carrello.php");
        die;
    }



