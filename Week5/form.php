<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>行程與報名表</title>
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
    <li><a href="schedule.htm"class="a3">行程與報名表</a></li>
</ul>
</div>
<div class="title">
    <center><img src="https://media.istockphoto.com/id/1160193557/photo/celebration-in-the-office.jpg?s=612x612&w=is&k=20&c=zG_z7bV879QPa4-Rjl55FdIQD-go6brBzH14omE3byI=" ></center>
    <center><b>行程與報名表</b></center>
</div>
<center>
    <div class="context">
        <b>行程</b>
    </div>
    <div class="context">
    <table bgcolor="white" border="1px"><thead>
        <tr>
          <th class="context">時間</th>
          <th class="context">活動</th>
          <th class="context">其他</th>
        </tr></thead>
      <tbody>
        <tr>
          <td>18:00</td>
          <td>進場</td>
          <td></td>
        </tr>
        <tr>
          <td>19:00</td>
          <td>活動開始</td>
          <td></td>
        </tr>
        <tr>
          <td>20:00</td>
          <td>表演</td>
          <td></td>
        </tr>
        <tr>
          <td>21:00</td>
          <td>遊戲</td>
          <td></td>
        </tr>
        <tr>
          <td>22:00</td>
          <td><del>表演</del></td>
          <td>取消</td>
        </tr>
        <tr>
          <td>23:00</td>
          <td>收拾</td>
          <td>提早到22:00</td>
        </tr>
      </tbody>
      </table>
</div>
<hr width="100%" >
<div class="context">
<?php
if(isset($_SESSION['uUser']))
    {
        echo "歡迎".$_SESSION['uUser']."<br>";
?>

    <b>報名表</b>
    <form action="confirm.php"  method="POST">
    學號:<input type="text" name="uNumber"class="context"><br>
    姓名:<input type="text" name="uName"class="context"><br>
    Email:<input type="text" name="uEmail"class="context"><br>
    電話:<input type="text" name="uPhone"class="context"><br>
    生日:<input type="date" name="uBirthday"class="context"><br>
    性別:
    <input type="radio" name="uGender" value="男" class="context" required>男
    <input type="radio" name="uGender" value="女" class="context" required>女<br>
    興趣:
    <input type="checkbox" name="uInterest[]" value="音樂" class="context">音樂
    <input type="checkbox" name="uInterest[]" value="閱讀" class="context">閱讀
    <input type="checkbox" name="uInterest[]" value="運動" class="context">運動
    <input type="checkbox" name="uInterest[]" value="旅遊" class="context">旅遊<br>
    
    <input type="submit" name="提交" value="提交" class="context">
    <input type="reset" name="重設" class="context">
    </form>
</div>
<?php
    }
    else{
        echo "<a href='login.htm'>請先登入</a>";
    }
?>

</center>

</body>

<footer>
<div class="banner3">
<center>測試網站</center>
</div>

</footer>







</html>
