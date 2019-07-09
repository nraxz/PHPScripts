<?php
// A script to return user Agent

echo "User agent is : ". $_SERVER['HTTP_USER_AGENT'];

// A script to return the current file name

$current_file_name = basename($_SERVER['php_self']);

echo $current_file_name;


// A script to find-out if the page is called from 'https' or 'http'

if (!empty($_SERVER['HTTPS']))
{
    echo 'https is enabled';
}
else
{
    echo 'http is enabled'."\n";
}