<?php
//to run this file session and db connection are required
require "PHP/connect_db.php"; session_start(); ?>

<html>
<body>


<h1>Addresses panel</h1>
<?php  
   // check number of addresses which are not hidden
   
   $sqlAd="SELECT * FROM Delivery_address WHERE NOT Address_Status ='Hidden' AND User_ID ='".$_SESSION['User_ID']."'";
  //$queryAd=mysqli_query($conn, $sqlAd);
  if ($queryAd=mysqli_query($conn, $sqlAd)) {
    $rowcount=mysqli_num_rows($queryAd);
     
     //if the number < 1, the form will not appear
     
   if($rowcount>0){
  
echo '<form action="PHP/AddressControllerAction.php" method="post">';
  echo '<p>Please select the address:</p>';
// a loop to print all the addresses (radio buttons) which are not hidden
      //If address is default show it to the user
  while($rowAd=mysqli_fetch_assoc($queryAd)){
    
    $addres=$rowAd['Country'].", ".$rowAd['City'].", ".$rowAd['Street'].", ".$rowAd['ZIP'];
    
    if($rowAd['Address_Status']=="Default"){$addres=$addres."(Deafault address)"; }
   echo '<input type="radio" required id="'.$rowAd['Address_ID'].'" name="address" value="'.$rowAd['Address_ID'].'">
         <label for="html">'.$addres.'</label><br>';
  }
  

echo '<br>
<input type="submit" value="Remove" name="Remove">
<input type="submit" value="Make deafault" name="deafault">
</form>';
   }
  }
  // next is a normal post form to create new address
  ?>
  <form action="PHP/AddAddressAction.php" method="post">
     <p>Pleaseenter the details:</p>
    
    <label for="Country">Country:</label>
  <input type="text" id="Country" name="Country" maxlength="20" required ><br><br>
    
      <label for="City">City:</label>
  <input type="text" id="City" name="City" maxlength="20" required ><br><br>
    
      <label for="Street">Street:</label>
  <input type="text" id="Street" name="Street" maxlength="20" required ><br><br>
    
      <label for="ZIP">ZIP:</label>
  <input type="text" id="ZIP" name="ZIP" maxlength="7" required ><br><br>
    
    <input type="submit" value="Add new address" name="AddAddress">
    </form>
</body>
</html>
