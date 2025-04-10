<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>adduser</title>
</head>
<body>
    <?php
    $uName=$_POST['uName'];
    $uaddress=$_POST['uaddress'];
    $ubirthday=$_POST['ubirthday'];

    $link = mysqli_connect(
        'localhost','root','','test'
    );
    $sql = "insert into student(name,address,birthday) values('$uName','$uaddress','$ubirthday')";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "<script>
            alert('新增成功');
            window.location.href = 'dbtest.php';

        </script>";
    } else {
        echo "<script>
            alert('新增失敗');
                window.location.href = 'dbtest.php';
        </script>";
    }
?>


</body>
</html>