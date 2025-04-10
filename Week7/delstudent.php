<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no=$_GET['no'];
    $link = mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'test');
    mysqli_set_charset($link,'utf8');
    $sql="delete from student where no='$no'";
    $result=mysqli_query($link,$sql);
    if($result){
        echo "<script> alert('刪除成功');window.location.href='dbtest.php';</script>";
    }
    else{
        echo "<script> alert('刪除失敗');window.location.href='dbtest.php';</script>";

    }
    
    
    ?>
</body>
</html>
<style>

</style>