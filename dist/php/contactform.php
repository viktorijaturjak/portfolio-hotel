<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastmame = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $message= $_POST['message'];

    $mailTo = "viktorija.turjak2612@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$$message;

    if(mail($mailTo, $txt, $headers, $message)) {
        echo "<script>alert('Mail sent!');</script>";
        echo "<script>document.location.href='index.html'</script>";
    }
}