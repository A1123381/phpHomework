<?php
session_start()
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

$uUser=$_POST['uUser'];
$uPassword=$_POST['uPassword'];

$link = mysqli_connect(
    'localhost','root','','test'
);
$sql = "select * from user where Name='$uUser' and Password='$uPassword'";
$result = mysqli_query($link,$sql);
$record = mysqli_num_rows($result);
//if($uUser=='admin' ){
//    echo "登入成功";
//    $_SESSION['uUser']=$uUser;
//    setcookie("uUser",$adminUser,time()+3600);
//    header("location:index.php");

//}
//else 
    if($record>0){
    echo "登入成功";
    $_SESSION['uUser']=$uUser;
    setcookie("uUser",$userUser,time()+3600);
    header("location:index.php");
}
else{
    echo "帳號或密碼登入失敗 3秒後回登入<br>";
    header("refresh:3;url='login.php'");
    echo '<a href="login.php">回登入</a>';
}



?>