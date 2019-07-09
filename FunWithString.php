<?php

// PHP script to change the color of first letter of words in a string.

$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;

/*
mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )
*/

// Php Script to return last modified information of the file

$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);

echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
