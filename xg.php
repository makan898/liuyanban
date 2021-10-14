<?php
$a=file_get_contents('./ly.txt');
$aa=json_decode($a,true);
$k= $_GET['id'];
date_default_timezone_set("Asia/Shanghai");
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Repair</title>
</head>
<body>
    <center><h1>Repair</h1></center>
    <hr >
 
    <table border="1" cellspacing="0" align="center" width="600">
        <form action="xgcx.php" method="post">
            <tr>
                <th>Nickname</th>
                <td>
                    <input type="text" name="xm" value="<?= $aa[$k]['xm']; ?>">
                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td>
                    <input type="text" name="bt" value="<?= $aa[$k]['bt']; ?>">
                </td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>
                    <textarea name='nr' rows=5 cols=70 placeholder="Please input comment！"><?= $aa[$k]['nr']; ?></textarea>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="hidden" name="id" value="<?= $k?>">
                    <input type="hidden" name="sj" value="<?= date("Y/m/d h:i:sa")?>">
                    <input type="submit" value="Repair" >
                    <input type="reset" name="">
                </th>
            </tr>
        </form>
    </table>
    </body>
</html>
