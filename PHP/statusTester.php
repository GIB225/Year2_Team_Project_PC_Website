<?php
session_start();
//$_SESSION['User_Status']="Admin";
echo $_SESSION['User_Status'];
//$_SESSION['User_ID']=29;
echo $_SESSION['User_ID'];

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}


?>
