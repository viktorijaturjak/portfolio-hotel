<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastmame = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $message= $_POST['message'];

    $mailTo = "viktorija.turjak2612@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$$message;

    mail($mailTo, $txt, $headers, $message);
    header("Location: index.html?mailsend");
}