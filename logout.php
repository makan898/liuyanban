<?php
session_start( );
$_SESSION = array( );
echo "<script>alert('Logout！');location.href='login.php';</script>"
?>
