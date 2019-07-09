<?php
$url = 'https://www.example.com/php-folder/php-flie.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>

Input: https://www.example.com/php-folder/php-flie.php

Output

Scheme : http
Host : www.example.com
Path : /php-folder/php-flie.php


