<?php
 
if(empty($_POST['bt']) || empty($_POST['xm']) || empty($_POST['nr'])){
    die('Sorry, you can not submit without input.');
}
$ly = file_get_contents ('./ly.txt');
$lyy = json_decode($ly,true);
$lyy[$_POST['id']] = $_POST;
$lyyy = json_encode($lyy);
file_put_contents('./ly.txt',$lyyy);
echo 'Successful! Return after 2 seconds later.';
header('refresh:2;url=./home.php');
?>
