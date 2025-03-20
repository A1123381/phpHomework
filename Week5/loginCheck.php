<?php
session_start()
?>
<?php
$adminUser='admin';
$adminPassword='admin';
$userUser='user';
$userPassword='user';
$uUser=$_POST['uUser'];
$uPassword=$_POST['uPassword'];
if($uUser==$adminUser && $uPassword == $adminPassword){
    echo "登入成功";
    $_SESSION['uUser']=$uUser;
    setcookie("uUser",$adminUser,time()+3600);
    header("location:index.php");

}
else if($uUser==$userUser && $uPassword == $userPassword){
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