<?php
require "../connect_db.php";

$sql= "INSERT INTO TESTUPLOAD ( NAME, img) 
SELECT  'test', BulkColumn 
FROM Openrowset( Bulk 'Desktop\wall.jpg', Single_Blob) as img";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "OK";

?>
