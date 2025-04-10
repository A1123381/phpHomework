<html>

<head>
<meta charset='utf-8'>
</head>
<form action="addstudent.php" method="POST">
    <input type="text" name="uName" placeholder="姓名"><br>
    <input type="text" name="uaddress" placeholder="地址"><br>
    <input type="date" name="ubirthday" placeholder="生日"><br>
    <input type="submit" value="新增學生">
</form>
    <a href='index.php'>回首頁</a>

<?php
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'test');  // 預設使用的資料庫名稱

//     if ( !mysqli_select_db($link, 'school') )
//     die("無法開啟資料庫!<br/>");
//  else
//     echo "資料庫:開啟成功!<br/>";

$sql = "SELECT * FROM student";

mysqli_set_charset($link, 'utf8');

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    echo "<tr><td>號碼</td><td>姓名</td><td>地址</td><td>生日</td></tr>";
    while( $row = mysqli_fetch_assoc($result)){ 
        echo "<tr>";
        echo "<td>".$row["no"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["birthday"]."</td><td><a href='delstudent.php?no=".$row["no"]."'>刪除</a></td><td><a href='update.php?no=".$row["no"]."'>修改</a></td>";
        echo "</tr>";
        echo "<br>";

    }
echo "</table>";


    }



?>

</html>

<style>
a{
    text-emphasis: none;
}
</style>