<?php
header("Content-Type:text/html;charset=utf-8");
if(isset($_POST['sub'])){
$username=$_POST['username'];
$pw=$_POST['pw'];

$hash = password_hash( $pw , PASSWORD_DEFAULT );
$filename="user_data.txt";
$handle=fopen($filename,"a+");
fwrite($handle, $username."\t".$hash."\n");
fclose($handle);
//include("conn.php");

//$result=$pdo->exec("insert into tb_lyuser (name,password) value ('$username','$pw')");

//if($result){
	echo "<script>alert('Successful!');location.href='login.php';</script>";	
//}else{
//	echo "<script>alert('Unsuccessful!');location.href='login.php';</script>";
//}
}
$pdo=$result=null;
?>
