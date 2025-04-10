<?php
session_start()

?>
<html>
<head>
<meta charset="utf-8">
<title>登出</title>
</head>
<body>
<?php
if(isset($_SESSION['uUser'])){
    session_destroy();
    echo "登出成功 3秒後回登入 <br>";
    echo '<a href="login.php">回登入</a>';
    header("refresh:3;url='login.php'");
}
else{
    echo "請先登入 3秒後回登入 <br>";
    echo '<a href="login.php">回登入</a>';
    header("refresh:3;url='login.php'");
}
?>







</body>
</html>