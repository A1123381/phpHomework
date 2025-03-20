<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>活動資訊</title>
    <link rel="stylesheet" href="css.css">
</head>
<body >
<div class="banner1">
<font color="white">
    <ul class="list">
        <li><a href="login.htm"class="a1">登入&nbsp;&nbsp;</a></li>
        <li><a href="logout.php"class="a1">登出&nbsp;&nbsp;</a></li>
        <li><a href="placeholder.htm"class="a1">English</a></li>
        
    </ul>
</font>
</div>

<div class="img">
<img src="https://elearningv4.nuk.edu.tw/pluginfile.php/1/theme_moove/logo/1739957367/image10.png" >
<font size="6">&nbsp;&nbsp;&nbsp;<b>資管系迎新活動</b></font>
</div>
<div class="banner2">
<ul class="list2">
    <li><a href="index.htm"class="a3">活動資訊&nbsp;&nbsp;</a></li>
    <li><a href="form.php"class="a3">行程與報名表</a></li>
</ul>
</div>
<div class="title">
<?php
if(isset($_SESSION['uUser'])){
    session_destroy();
    echo "登出成功 3秒後回登入 <br>";
    echo '<a href="login.htm">回登入</a>';
    header("refresh:3;url='login.htm'");
}
else{
  echo "請先登入 3秒後回登入 <br>";
  echo '<a href="login.htm">回登入</a>';
header("refresh:3;url='login.htm'");
}
?>
</div>

</body>
<footer>
<div class="banner3">
<center>測試網站
</ul></center>
</div>
</footer>