<?php
 // セ ッ シ ョ ン を 開 始 し て ロ グ イ ン 状 態 を チ ェ ッ ク
 session_start( );
 if( !isset( $_SESSION[ 'username' ] ) )
 {
 // 未 ロ グ イ ン 状 態 で あ れ ば ロ グ イ ン 画 面 へ リ ダ イ レ ク ト
 header( 'Location: http://'.$_SERVER[ 'HTTP_HOST' ].'/login.php');
 exit;
 }
 ?>
 
<?php
$_SESSION = array( );
header("Content-type: text/html; charset=utf-8");

$username = $_POST['username'];

$password=$_POST["pw"];
$filename="user_data.txt";//定义操作文件
$delline = $username; //要删除的行关键字
$farray=file($filename);//读取文件数据到数组中
 
for($i=0;$i<count($farray);$i++)
{   
    if(substr($farray[$i],0,1)==$delline)  //取字符串前6位，再判断
    {   
        continue;
    }   
    if(trim($farray[$i])<>"")  //删除文件中的所有空行
    {   
        $newfp.=$farray[$i];    //重新整理后的数据
    }   
}   
unlink("user_data.txt");
$fp=@fopen($filename,"a+");//以写的方式打开文件
@fputs($fp,$newfp);
@fclose($fp);

$hash = password_hash( $pw , PASSWORD_DEFAULT );
$filename="user_data.txt";
$handle=fopen($filename,"a+");
fwrite($handle, $username."\t".$hash."\n");
fclose($handle);
echo "<script>alert('Successful!');location.href='login.php';</script>";
?>
