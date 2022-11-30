<?php  session_start(); ?>
<head>
    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<?php 
    include "header.php";


?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php
                                                                                                                                                                                                                                                                                                                    if (isset($_SESSION['User_FName'])) {
                                                                                                                                                                                                                                                                                                                        echo $_SESSION['User_FName'];
                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                        echo "notFound";
                                                                                                                                                                                                                                                                                                                    } ?></span><span class="text-black-50"><?php
                                                                                            if (isset($_SESSION['User_Email'])) {
                                                                                                echo $_SESSION['User_Email'];
                                                                                            } else {
                                                                                                echo "notFound";
                                                                                            } ?>"</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input disabled type="text" class="form-control" placeholder="First Name" value="
                    <?php
                    if (isset($_SESSION['User_FName'])) {
                        echo $_SESSION['User_FName'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input disabled type="text" class="form-control" value="
                    <?php
                    if (isset($_SESSION['User_SName'])) {
                        echo $_SESSION['User_SName'];
                    } else {
                        echo "notFound";
                    } ?>" placeholder="Last Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input disabled type="text" class="form-control" placeholder="Email" value="
                    <?php
                    if (isset($_SESSION['User_Email'])) {
                        echo $_SESSION['User_Email'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input disabled type="password" class="form-control" placeholder="Password" value="
                    <?php
                    if (isset($_SESSION['User_Password'])) {
                        echo $_SESSION['User_Password'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input disabled type="text" class="form-control" placeholder="Phone number" value="<?php
                                                                                                                                                                            if (isset($_SESSION['User_Phone_Number'])) {
                                                                                                                                                                                echo $_SESSION['User_Phone_Number'];
                                                                                                                                                                            } else {
                                                                                                                                                                                echo "notFound";
                                                                                                                                                                            } ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input disabled type="text" class="form-control" placeholder="Address" value="<?php
                                                                                                                                                                if (isset($_SESSION['User_Address'])) {
                                                                                                                                                                    echo $_SESSION['User_Address'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo "notFound";
                                                                                                                                                                } ?>"></div>

                </div>
                <div class="mt-5 text-center"><a href="PHP/signOut.inc.php"> <button class="btn btn-primary profile-button" type="button">Log Out</button> </a></div>
            </div>
        </div>
        <div class="col-md-4">

            <center>
                <center>
                    <P>ORDERS</P>
                </center>
                <table>
                    <tr>

                        <th>No </th>
                        <th>Product </th>
                        <th>Date</th>
                        <th>Address</th>
                    </tr>
                    <?php
                    $host = "localhost";
                    $user = "root";
                    $password = '';
                    $db_name = "babimors_compuk";

                    $con = mysqli_connect($host, $user, $password, $db_name);
                    if (mysqli_connect_errno()) {
                        die("Failed to connect with MySQL: " . mysqli_connect_error());
                    }
                    $customer = $_SESSION['User_Email'];
                    $customer = stripcslashes($customer);
                    $customer = mysqli_real_escape_string($con, $customer);
                    $sql_order = "SELECT * from `orders_data`  where Cus_Email = '$customer'";

                    $result_order = mysqli_query($con, $sql_order);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count_order = mysqli_num_rows($result_order);

                    if ($count_order > 0) {


                        for ($x = 1; $x <= $count_order; $x++) {
                            $row_order = mysqli_fetch_assoc($result_order);

                            $produt_id = $row_order["Product_ID"];



                            $sql = "SELECT * FROM `product`  where Product_ID = '$produt_id' ";
                            $result = mysqli_query($con, $sql);

                            $row = mysqli_fetch_assoc($result);
                            $row["Product_Name"];
                            $row_order["Date_Placed"];
                            $row_order["Cus_Address"];
                            echo  "
                        <tr>
                        <td>" .  $x . "</td>
                        <td>" . $row["Product_Name"] . "</td>
                        <td>" . $row_order['Date_Placed'] . "</td>
                        <td>" . $row_order['Cus_Address'] . "</td>
                        </tr>
                        ";


                            // $row["title"];
                            // $row_order["date_palaced"];
                            // $row_order["delivery_address"];
                            // echo  "
                            // <tr>
                            // <td>" . $row["title"] . "</td>
                            // <td>" . $row_order['date_palaced'] . "</td>
                            // <td>" . $row_order['delivery_address'] . "</td>
                            // </tr>
                            // ";
                        }
                    } else {
                        echo "";
                    }  ?>

                </table>
            </center>
        </div>
    </div>
</div>
<?php 
    include "footer.php"

?>
</div>
</div>
