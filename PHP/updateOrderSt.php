<?php
ob_start();
if(isset($_POST['updateStO']) and isset($_POST['Statuses'])){
$OrderID= base64_decode($_GET['OI']);
$Status=$_POST['Statuses'];
  echo $OrderID;
  echo $Status;
  
 require "connect_db.php";
  
 $sql = "UPDATE OrderP SET Order_Status='$Status' WHERE Order_ID=$OrderID";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../orders_management.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
  
}else{ header("Location: ../orders_management.php");}
?>
