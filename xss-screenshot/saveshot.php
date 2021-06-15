<?php
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$data = $_POST['png'];
$data = substr($data, 22);
$f = fopen(generateRandomString(), "w+");
fputs($f, base64_decode($data));
fclose($f);
