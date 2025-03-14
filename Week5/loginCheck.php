<?php
session_start();
?>






<?php
$defaultName='NUK';
$defaultPassword='1234';
$uUser=$_POST['uUser'];
$uPassword=$_POST['uPassword'];

echo $uUser." ";
echo $uPassword;
if($uUser==$defaultName && $uPassword==$defaultPassword){
    echo "登入成功";
    header("location:form.php");
    $_SESSION['uUser']=$uUser;
}
else{
    echo "登入失敗 3秒後回登入";
    header("refresh:3;url='login.htm'");
}
?>
