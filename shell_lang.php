<?php
$file = file_get_contents('index.php');
echo base64_encode($file); #1
?>
