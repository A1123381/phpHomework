<?php
session_start()
?>
<html>
<head>
<meta charset="utf-8">
<title>確認</title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="gray">
<div>
<?php
if(isset($_SESSION['uUser'])){
    echo "<nav>";
    echo "你好:".$_SESSION['uUser']."&nbsp &nbsp";
    echo "<a href='logout.php'>登出</a>";
    echo "</nav>";
}

else{
    echo "<a href='login.php'>登入</a>";
}
?>
</div>

<div>
<?php
if(isset($_SESSION['uUser']))
{
        $uName=$_POST['uName'];
        $uNumber=$_POST['uNumber'];
        $uPhone=$_POST['uPhone'];
        setcookie("uNumber",$uNumber ,time()-3600);
        setcookie("uName",$uName,time()-3600);
        setcookie("uPhone",$uPhone,time()-3600);/*reset coookie*/ 
        
        setcookie("uNumber",$uNumber,time()+3600);
        setcookie("uName",$uName,time()+3600);
        setcookie("uPhone",$uPhone,time()+3600);
        
    
    echo "<div class='content'>";
    echo "歡迎".$_SESSION['uUser']."<br>";
    echo "報名成功<br>";
    echo "你所填的資料為<br>學號:".$uNumber."<br>名子:".$uName."<br>電話:".$uPhone."<br>";
    echo "<a href='index.php'>回首頁</a>";
?>



</div>
<?php
}
else{
    echo "<a href='login.htm'>請先登入</a>";
}
?>
</body>
</html>