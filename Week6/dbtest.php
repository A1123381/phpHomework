<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
$link = mysqli_connect(
    'localhost','root','','test'
);
if(!mysqli_select_db($link,'test'))
die('could not connect to database');
else
echo '<div class="title">connected to database</div>';
$sql = "select * from student";

mysqli_set_charset($link,'utf8');
if($result = mysqli_query($link,$sql))
{ 
  echo '<table border="1">';
  while($row=mysqli_fetch_assoc($result))
  {
  echo '<tr>';
  echo "<td>".$row['no']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td>".$row['birthday']."</td>"; 
   echo '<br>';
  }
}



mysqli_close($link);

?>  
</body>
</html>
<style>
.title {
  font-size: 20px;
  font-weight: bold;
}





