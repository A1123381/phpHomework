<?php
session_start()

?>
<html>
<head>
<meta charset="utf-8"><link rel="stylesheet" href="styles.css">
<title>登入</title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="gray">

<?php
if(isset($_SESSION['uUser'])){
    echo '<nav>';
    echo '歡迎'.$_SESSION['uUser'].'&nbsp &nbsp你已登入';
    echo '<a href="index.php">回首頁</a>';
    echo '<a href="logout.php">登出</a>';
    echo '</nav>';
}
else{
    echo '<nav>';
    echo '<a href="login.php">請先登入</a>';
    echo '</nav>';
    echo '<div class="title">登入</div>';
    
    echo '<form action="logincheck.php" method="post" class="content">';
    echo '用戶<input type="text" name="uUser"><br>';
    echo '密碼<input type="password" name="uPassword"><br>';
    echo '<input type="submit" value="登入">';
    echo '</form>';
    echo '<center><a href="index.php">回首頁</a></center>';
}
?>






</body>
</html>