<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no=$_POST['no'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $birthday=$_POST['birthday'];

    $link =mysqli_connect(
        'localhost',
        'root',
        '',
        'test'
    );
    mysqli_set_charset($link,'utf8');

    $sql="update student set name='$name',address='$address',birthday='$birthday' where no='$no'";
    $result=mysqli_query($link,$sql);
    if($result){
    echo "<script> alert('修改成功');window.location.href='dbtest.php';</script>";
    }
    else{
    echo "<script> alert('修改失敗');window.location.href='dbtest.php';</script>";
    }
    ?>
</body>
</html>