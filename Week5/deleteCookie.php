<?php
setcookie("uNumber","",time()-3600);
setcookie("uName","",time()-3600);
setcookie("uPhone","",time()-3600);
header("location:index.php");
?>