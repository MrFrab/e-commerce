<?php
    $adminEmail='fra.bista03@gmail.com';
    $userEmail=$_POST['email'];
    $userMessage='
    <html>
        <head><title>Grazie per averci contattato</title></head>
        <body>
            <h1>Grazie per averci contattato</h1>
            <p>La tua richiesta è stata inoltrata. Ti risponderemo al più presto</p>
        </body>
    </html>
    ';
    $adminMessage="
    <html>
        <head><title>Contatto dal sito web</title></head>
        <body>
            <h1>GContatto dal sito web</h1>
            <ul>
                <li>Nome: {$_POST['name']}</li>
                <li>Oggetto: {$_POST['subject']}</li>
                <li>Messaggio: {$_POST['message']}</li>
            </ul>
        </body>
    </html>
    ";
    
    $headers[]='MIME-Version: 1.0';
    $headers[].='From: $userEmail';
    $headers[]='Content-type: text/html;charset=utf-8';
    
    mail($userEmail,'Richiesta di contatto effettuata con successo',
        $userMessage,implode("\r\n",$headers));
    
    mail($adminEmail,'Richiesta di contatto dal sito web',$adminMessage,
    implode("\r\n",$headers));

    header("Location: ../contact.php");

?>