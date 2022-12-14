<?php ob_start(); ?>
<!DOCTYPE html>
<?php
    require "PHP/IndSQLandDBcon.php";
   error_reporting(0);
 ?>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <script src="js/toggle_switch.js"></script>
    <link rel="stylesheet" href="css/product_description.css">
       <style>
           .main-product-description-sub-container {
                background-color: white;
            }
           .main-product-sub-container img{
  
   padding-right: 5vmax;
  
padding-left: 5vmax;
  
width: 30vmax;
  
padding-top: 5vmax;
padding-bottom:8vmax
}
           
        @media (max-width: 720px) {

            .main-product-description-sub-container {
                display: flex;
                justify-content: center;

                background-color: white;
                flex-direction: column;
                background-color: #0376ea;
                align-items: center;
                align-content: center;
                justify-items: center;
            }

            .main-product-sub-container-description {
                display: flex;
                flex-direction: column;
                align-items: center;
                align-content: center;
                justify-items: center;
                justify-content: center;
            }

            .main-summary-description-conatiner {
                display: flex;

            }

            .summary-container {
                margin-left: 0.5vmax;
                margin-right: 0.5vmax;
            }

            .summary-container p {
                margin-left: 15px;
                margin-right: 15px;
                font-size: 2vmax;
            }

            #summary-container-heading {
                font-weight: 600;

            }

            .price-container p strong {
                font-size: 12px;
                color: #0376ea;

            }
            #summary-container-heading{
                display: none;
            }
            #product_heading_with_button{
                display: flex;
                flex-direction: column;
            }
            .main-product-sub-container-description{
    padding-right: 0vmax;
}
.description-ulisted-item{
    font-size: 2vmax;
}.description-ulisted-item span{
   
   font-size: 1vmax;
  

}
#description-block{
                min-width: auto;
            }
            .main-product-description-sub-container {
                background-color: white;
            }



        }
        @media (max-width:390px){
            body{
                width: 390px;
                overflow: hidden;
            }
            #description-block{
                min-width: 390px;
            }
        }
    </style>


</head>



<body style="background:none ;" class="dark_target">

    <?php require 'header.php'; ?>

    <div class="main-product-description-container" style="padding-top:100px;">
        <div class="main-product-description-sub-container " id="product_heading_with_button">
            <div class="product-heading-container">
                <?php
                echo "<a href='".$res2["Man_Link"]."' target=\"_blank\" rel=\"noopener noreferrer\"><h3>".$res2["Man_Name"]."</h3></a>";
                ?>
               
            </div>
            <div class="product-heading-container">
                <button id="change-to-product" onclick="changeToProduct()" >PRODUCT</button>
                <button id="change-to-specification" onclick="changeToDescription()">DETAILED SPECIFICATION</button>
            </div>
        </div>
        <div class="main-product-description-sub-container dark_target " id="product_summary_with_button">
            <div class="main-summary-description-conatiner ">
                <div class="summary-container" id="summary-container-heading">
                    <p>SYSTEM SUMMARY</p>
                </div>
               
                <?php
require "PHP/IndProductPriceDis.php";
                ?>
                
                
                
            </div>
            <div class="main-summary-description-conatiner">
                <?php
               echo "<a href='PHP/checkStatusForBasket.php?product=".$res["Product_ID"]."'>"; 
                   ?>
                   
                   <button>
                   
                   Put in the basket <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg></button></a>
            </div>
        </div>
        <div class="main-product-description-sub-container dark_target" id="description-block" style="display:flex ;">

            <div class="main-product-sub-container">
                
                <?php
                echo "<img src=\"Products/Images/".$res['Product_ID'].".jpg\" alt=\"No image\">";
                ?>
                
            </div>
            <div class="main-product-sub-container">
                <div class="main-product-heading-container">
                    <?php
                    $NamePR=$res["Product_Name"];
                    $NamePRL=Strlen($NamePR);
                    $Jump=30;
                    $Changes= (int)($NamePRL/ $Jump);
                    
                    $text=$NamePR;
                    $insert="<br>";

                    require "PHP/textCutter.php";
                    
                    
                    $NamePR=$text;
                    echo "<h2>".$NamePR."</h2>";
                    ?>
                    
                </div>
                <div class="main-product-heading-description-container">
                    <ul class="description-ulisted">
                        <li class="description-ulisted-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16"> </svg>

                             <?php require "PHP/IndProductPreDescription.php"; ?>
                        </li>
                    </ul>

                </div>
                <div class="main-product-heading-description-container-button">
                    <?php echo "<a href='checkout_page.php?ProductID=".$res["Product_ID"]."'>";?>
                    <Button>BUY NOW</Button>
                    </a>
                </div>
                <div>
                    <p> FREE STANDARD DELIVERY TO MAINLAND UK ON ALL ORDERS!</p>
                </div>

            </div>

        </div>


        <div class="specific-description-container dark_target" id="specific_description" style="display:none ;">
            <p>Here are the specific details for the <strong>Item</strong></p>
            <div class="specific-description-main-container dark_target">
                <div class="specific-description-sub-container dark_target">
                    <div class="specific-heading dark_target">
                        <p>SPECIFICATIONS</p>
                    </div>
                    <div class="specific-description-details dark_target">
                      
                            <?php
                        $Points=file("Products/Points/".$res['Product_ID'].".txt");
                        
                        foreach($Points as $Point){
                        
                
                    echo $Point."<br>";
                        }
                    ?>
                    </div>
                </div>
                <div class="specific-description-sub-container">
                    <div class="specific-heading">
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="specific-description-details dark_target">
                        
                                            <?php
                        $Description=file("Products/Description/".$res['Product_ID'].".txt");
                        
                        foreach($Description as $Des){
                        
                
                    echo $Des."<br>";
                        }
                    ?>
                    </div>
                </div>
                
              <!-- -->
            </div>
        </div>
    </div>



    <?php require 'footer.php'; ?>


</body>



</html>
