<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $link=mysqli_connect(
        'localhost',
        'root',
        '',
        'test'
    );
    $no=$_GET['no'];
    $sql="select * from student where no='$no'";
    if ( $result = mysqli_query($link, $sql)){
       
        while( $row = mysqli_fetch_assoc($result)){ 
 
        $name=$row["name"];
        $address=$row["address"];
        $birthday=$row["birthday"];


        }
    }    ?>    
    <form action="updateEx.php" method="post">
        <input type="hidden" name="no" value="<?php echo $no;?>">
        姓名<input type='text' name="name" value="<?php echo $name;?>"><br>
        地址<input type='text' name="address"value="<?php echo $address;?>" ><br>
        生日<input type='text' name="birthday" value="<?php echo $birthday;?>"><br>
        <input type="submit" value="送出">
    </form>
    <a href="dbtest.php">回資料庫</a>


</body>
</html>