<?php include_once '/home2/babimors/comp-uk.motorsfeere.com/phpScript/send_email.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="js/toggle_switch.js"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
   
   

</head>


<body style="background-image: none;">

    <?php require 'header.php'; ?>
    
    <?php
     if (isset($_POST['submit_ContactUs']) & !empty($_POST['submit_ContactUs'])) {

        //if (empty($_POST['lastName'])) {
        // $errors[] = "";
        //}
        if (empty($_POST['name'])) {
            $errors[] = "Please Enter your name";
        }
        if (empty($_POST['email'])) {
            $errors[] = "Please Enter your email";
        }
        
        if (empty($_POST['subject'])) {
            $errors[] = "Please Enter your subject";
        }
        if (empty($_POST['message'])) {
            $errors[] = "Please enter your  message";
        }
    
     
    
if (empty($errors)) {
        $message = '
        <html> 
            <body>
                <div>
                    <p>Hello ' . $_POST['name'] . ',</p>
                    </br>
                    <p> This is the confirmation that your message have been received. Someone will be with you shortly. </p> </br>
                    </br></br>
                    <p>This is what you write to us :</p>
                    <p>' . $_POST['message'] .' </p></br>
                     
                     </br>
                    <p>The Comp-Uk Team .</p>
                </div>
            </body>
        </html>
        ';

       $test = "ibrahim.gbanet@gmail.com" ;
        $testing = "the-team@motorsfeere.com" ;

    $confirmationMail =    sendMail($testing, "No-reply-Comp-UK", $_POST['email'] , $_POST['subject'], $message);

        // header("Location:" . $_SERVER["HTTP_REFERER"] . "?error=none");
        // exit();

        $messages[] = "Vous êtes inscrit(e) !";
        
  
    
                //echo "YOU ARE IN !";
                 echo "<script>alert('Message Sent');</script>";
    
    
} } ?>
    <div class="contact1 dark_target">
        <div id="container-contact1" class="container-contact1 dark_target">
            <div class="contact1-pic js-tilt" data-tilt>
                <img id="contact_img" src="img/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form" method='post'>
                <span class="contact1-form-title dark_target">
                    Get in touch
                </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="text" name="name" placeholder="Name">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Subject is required">
                    <input class="input1" type="text" name="subject" placeholder="Subject">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <textarea class="input1" name="message" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                   <!-- <button class="contact1-form-btn">
                        <span>
                            Send Email
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>-->
                      <input class="contact1-form-btn" type="submit" name="submit_ContactUs" value="Send Email">
                </div>
                
            </form>
        </div>
    </div>

    <?php require 'footer.php'; ?>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="js/main.js"></script>


</body>

</html>
