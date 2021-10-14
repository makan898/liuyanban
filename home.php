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
$a = file_get_contents('./ly.txt');
$aa = json_decode($a,true);
date_default_timezone_set("Asia/Shanghai");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Message</title>
</head>
<body>
    <center><h1>Message</h1></center>
    <hr >
 
    <table border="1" cellspacing="0" align="center" width="600">
        <form action="ly.php" method="post">
            <tr>
                <th>Nickname</th>
                <td>
                    <input type="text" name="xm">
                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td>
                    <input type="text" name="bt">
                </td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>
                    <textarea name='nr' rows=5 cols=70 placeholder="Please enter comment！"></textarea>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="hidden" name="sj" value="<?= date("Y/m/d h:i:sa")?>">
                    <input type="submit" name="Submit">
                    <input type="reset" name="">
                </th>
            </tr>
        </form>
    </table>
    <hr >
    <table border="1" cellspacing="0" width="1000" align="center">
        <caption>Message</caption>
        <tr>
            <th width="100">Nickname</th>
            <th width="120">Title</th>
            <th>Comment</th>
            <th width="100">Time</th>
            <th width="100">Repair</th>
        </tr>
            <?php foreach($aa as $k => $v): ?>
                <tr>
                    <td align="center"><?= $v['xm'] ?></td>
                    <td align="center"><?= $v['bt'] ?></td>
                    <td><?= $v['nr'] ?></td>
                    <td><?= $v['sj'] ?></td>
                    <td align="center">
                        <a href='./sc.php?id=<?= $k ?>'>Delete</a>  
                        <a href='./xg.php?id=<?= $k ?>'>Repair</a>
                    </td>
 
                </tr>
 
            <?php endforeach ?>
         
    </table>
</body>
<form>
<table align="center">
<td align="center">
<input type="button" onclick="window.location.href='logout.php'" value="Logout">
</td>
</table>
</form>
</html>
