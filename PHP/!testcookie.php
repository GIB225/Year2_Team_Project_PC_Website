<?php
ob_start();
?>

<!DOCTYPE html>
<?php
    setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60,"/","comp-uk.motorsfeere.com",true);
?>
<html>
<body>
    <?php
        echo "cookie is created."
    ?>
    <p>
        <strong>Note:</strong> 
        You might have to reload the 
        page to see the value of the cookie.
    </p>
  
</body>
</html>

<?php
echo "COOKIES:<br>";
    echo  print_r($_COOKIE);
?>

