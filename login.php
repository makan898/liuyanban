<?php
session_start( );
header("Content-type: text/html; charset=utf-8");
$username=trim($_POST["username"]);
$password=$_POST["pw"];

$str = file_get_contents("user_data.txt");
$str1 = explode("\n",$str);
foreach($str1 as $value){
if(strpos($value,$username) !== false){
    $filename="user.txt";
    $handle=fopen($filename,"a+");
    fwrite($handle, $value."\t");
    fclose($handle);
    }
}
$user_data = file_get_contents( 'user.txt' ); // フ ァ イ ル か ら入 力
$parts = explode( "\t", $user_data ); // 読 み 込 ん だ 内 容 を タ ブ で 分 割
$saved_username = $parts[ 0 ];
$saved_hash = $parts[ 1 ];

if( $username === $saved_username
&& password_verify( $password , $saved_hash ) )
 {
  $_SESSION[ 'username' ] = $_POST[ 'username' ];
  unlink("user.txt");
  header( 'Location: http://'.$_SERVER[ 'HTTP_HOST' ].'/home.php');
  exit;
 }
else
 {
 unlink("user.txt");
 header( 'Location: http://'.$_SERVER[ 'HTTP_HOST' ].'/denglu.php');
 }
?>
