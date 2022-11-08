<?php 
if (isset($_POST['submit_Login']) & !empty($_POST['submit_Login'])) {
// PHP Form Validations
if (empty($_POST['email'])) {
    header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
    exit();
  
}
if (empty($_POST['pwd'])) {
     header("location: /pages/connexion.php?error=emptyinput");   
    exit();
}



if (empty($errors)) {
    // Check the Login Credentials
    
    $sql = "SELECT * FROM account WHERE user_Email=? ";

    $result = $dbh->prepare($sql);
    $result->execute(array($_POST['email']));
    $count = $result->rowCount();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    if ($count == 1) {
        // Compare the password with password hash
        if (password_verify($_POST['pwd'], $res['User_Password'])) {
            // regenerate session id
            //session_start();
           // $_SESSION['login'] = true;
          //  $_SESSION['standardUserId'] = $res['standard_user_id'];
           // $_SESSION['userEmail'] = $res['user_email'];
           // $_SESSION['last_login'] = time();
           // session_start();

            // redirect the user to members area/dashboard page
            header("location: /index.php");
            exit;
        } else {
            
             header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");   
    exit();
        }
    } else {
        
        header("location: /pages/connexion.php?error=unknowDetail");   
    exit();
    }
}
} 
?>