<?php
$file = fopen("message.txt", "a");

if ($file) {
	fwrite($file, implode(',', $_POST));
	fwrite($file, "\r\n");
	fclose($file);
}

header('location: index.html');
?>