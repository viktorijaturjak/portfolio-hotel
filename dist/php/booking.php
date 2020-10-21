<?php

if (isset($_POST['submit'])) {
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $number= $_POST['number'];
    $children= $_POST['children'];
    $room = $_POST['room'];
    $roomnumber= $_POST['roomnumber'];

    $mailTo = "viktorija.turjak2612@gmail.com";
    $subject = "New reservation";
    $headers = "From ".$checkin."\r\n";
    $headers .= "To ".$checkout."\r\n";
    $headers .= "Adults: ".$number."\r\n";
    $headers .= "Children: ".$children."\r\n";
    $headers .= "Room: ".$room."\r\n";
    $headers .= "Room number: " .$roomnumber;

    if(mail($mailTo, $subject, $headers)) {
        echo "<script>alert('Booked!');</script>";
        echo "<script>document.location.href='index.html'</script>";
    }
}