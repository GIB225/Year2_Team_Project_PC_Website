<?php
require "../connect_db.php";

$sql = "SELECT * FROM TESTUPLOAD WHERE NAME='tEST'";
$sth = $conn->query($sql);
$result=mysqli_fetch_array($sth);
echo $result['img'];


?>
