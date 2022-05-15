<?php

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $mailfrom=$_POST['email'];
    $messaggio=$_POST['messaggio'];

    $mailto="boybobofficial@gmail.com";
    $headers="From: ".$mailfrom;
    $txt="Hai ricevuto un e-mail da ".$name.".\n\n".$messaggio;

    mail($mailto, $txt, $headers);
    header("Location: ../contact.html?mailsend");

}