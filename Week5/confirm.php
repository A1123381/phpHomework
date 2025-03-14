<?php
session_start();
?>

<html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>行程與報名表</title>
    <link rel="stylesheet" href="css.css">
</head>
<body bgcolor="#F9F9F9">
<div class="banner1">
<font color="white">
    
    <ul class="list">
        <li><a href="placeholder.htm"class="a1">網站導覽&nbsp;&nbsp;</a></li>     
        <li><a href="placeholder.htm"class="a1">回首頁&nbsp;&nbsp;</a></li>
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
    <li><a href="schedule.htm"class="a3">行程與報名表</a></li>
</ul>
</div>
<?php
if(isset($_SESSION['uUser'])){
 echo '<center class="title">歡迎'.$_SESSION['uUser'].'登入</center>';
$uName = $_POST['uName'];
$uNumber = $_POST['uNumber'];
$uEmail = $_POST['uEmail'];
$uPhone = $_POST['uPhone'];
$uBirthday = $_POST['uBirthday'];
$uGender = $_POST['uGender'];
$uInterest = isset($_POST['uInterest']) ? $_POST['uInterest'] : [];
echo '<center class="title">報名成功！ <br> 請確認資料<center><hr width="100%" >';
echo '<center class="context">姓名：'.$uName.'<br>';
echo '學號：'.$uNumber.'<br>';  
echo 'Email:'.$uEmail.'<br>';
echo '電話：'.$uPhone.'<br>';
echo '生日：'.$uBirthday.'<br>';
echo '性別：'.$uGender.'<br></center>';
if(empty($uInterest)) 
echo '<center class="context">興趣：無</center>';
else{
    echo '<center class="context">興趣：';

foreach($uInterest as $value){
    echo ' '.$value.' ';
    
}}
echo '</center>';
}


else{
    echo '<center class="title">請先登入</center>';
    header("refresh:3;url='login.htm'");
}
?>
<center class="context"><a href="schedule.htm">回行程與報名表</a></center>
</body>
<footer>
<div class="banner3">
<center>測試網站</center>
</div>

</footer>
</html>