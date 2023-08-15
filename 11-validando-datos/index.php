<?php

$es_float = filter_var("12.5", FILTER_VALIDATE_FLOAT);
$es_entero = filter_var('12', FILTER_VALIDATE_INT);
$es_ip   = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
$es_url  = filter_var("http://cursosposgrado.upea.bo", FILTER_VALIDATE_URL);
$es_email = filter_var("juan@gmail.com", FILTER_VALIDATE_EMAIL);


echo "<pre>";
var_dump($es_float);
var_dump($es_entero);
var_dump($es_ip);
var_dump($es_url);
var_dump($es_email);