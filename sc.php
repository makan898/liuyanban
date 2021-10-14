<?php


$ly = file_get_contents ('./ly.txt');
$lyy = json_decode($ly,true);
unset($lyy[$_GET['id']]);
$lyy = array_values($lyy);
$lyyy = json_encode($lyy);
file_put_contents('./ly.txt',$lyyy);
echo 'Successful! Return after 2 seconds later.';
header('refresh:2;url=./home.php');
?>
