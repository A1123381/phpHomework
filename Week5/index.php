<?php
 session_start();
?>
<html>
    <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body bgcolor="gray">

    <?php
    if(isset($_SESSION['uUser'])){
        echo "<nav>";
        echo "你好:".$_SESSION['uUser']." ";
        echo "<a href='logout.php'>登出</a>";
        echo "</nav>";
    }
    
    else{
        echo "<nav>";
        echo "<a href='login.php'>請先登入</a>";
        echo "</nav>";
    }
    ?>

<center class="title">報名表</center>
<?php
if(isset($_SESSION['uUser']))
    {
echo '<form action="confirm.php" method="POST" class="content">';
echo '學號:<input type="text" name="uNumber" class="context" required><br>';
echo '姓名:<input type="text" name="uName" class="context" required><br>';
echo '電話:<input type="text" name="uPhone" class="context" required><br>';
echo '<input type="submit" value="送出" class="context">';
echo '</form>';
    }
else{
    echo "<center><a href='login.php'>請先登入</a></center>";
}

?>
<?php    
        if(isset($_COOKIE['uNumber']))
        {
            echo '<div class="title">上次填的資料</div><br>';
            echo '<div class="content">學號 '.$_COOKIE['uNumber'].'<br>姓名 '.$_COOKIE['uName'].'<br> 電話 '.$_COOKIE['uPhone'].'<br>';
            echo '<a href="deleteCookie.php">按此刪除資料</a>';
        }
    
        if(isset($_SESSION['uUser']) && $_SESSION['uUser']=='admin')
        {
            echo '<div class="title"><br>';
            echo '管理員功能表<br>(目前沒功能 之後可擴充)<br>';
            echo '<a href="index.php">管理報名資料<br></a>';
            echo '<a href="deleteCookie.php">刪除資料</a>';
            echo '</div>';
        }
        
    



?>
    </body>
</html>