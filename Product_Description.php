<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie -Your One Stop Source of Unlimited Movies</title>
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
        body {
            margin: 0%;
            padding: 0%;
            font-family: "Arial", Helvetica, sans-serif;
        }

        i {
            font-size: 30px;
            cursor: pointer;
            position: relative;
            ;
        }
    </style>

</head>
<!-- font-family: 'Staatliches', cur sive; -->
<!-- font-family: 'Russo One', sans-serif; -->


<body style="background:none ;" class="dark_target">

    <header class="navigationBar" id="navigationLightMode" style="margin-bottom:100px ;">
        <ul id="navbar">
            <div id="logoblock">
                <a href="mainpage.php" class="link">
                    <p id="logoMovie" style="color:white">
                        LOGO

                    </p>
                </a>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="filmPage.html">DESKTOP PCs</a></li>
                <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
                <li class="navbaritem"><a class="link" href="contact_us.html">CONTACT US</a></li>
                <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
            </div>

            <div id="membershipblock">



                <li><i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i> <i id="toggle_button"
                        style="display: flex;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>


                <br>
                <br>
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search"
                            style="font-size: xx-large;color:white"></i> </a></li>

                <br>
                <br>
                <li><a class="sign-in-logo" class="link" href="Sign_up.html"> <i class="bi bi-person-fill"
                            style="font-size: xx-large;color:white"></i> </a></li>
        </ul>
        </div>
        </ul>
    </header>

    <div class="main-product-description-container" style="padding-top:100px;">
        <div class="main-product-description-sub-container " id="product_heading_with_button">
            <div class="product-heading-container">
                <h3>LAPTOP</h3>
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
                <div class="summary-container price-container dark_target">
                    <p><strong>£500 </strong>ex. VAT</p>
                </div>
                <div class="summary-container price-container dark_target">
                    <p><strong>£600 </strong>inl. VAT</p>
                </div>
            </div>
            <div class="main-summary-description-conatiner">
                <button>PROCEED <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg></button>
            </div>
        </div>
        <div class="main-product-description-sub-container dark_target" id="description-block" style="display:flex ;">

            <div class="main-product-sub-container">
                <img src="img/AGILITY_PRO.webp" alt="">
            </div>
            <div class="main-product-sub-container">
                <div class="main-product-heading-container">
                    <h2>LAFIFE 15.6</h2>
                </div>
                <div class="main-product-heading-description-container">
                    <ul class="description-ulisted">
                        <li class="description-ulisted-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>PCS 3601 CASE</li>
                        <li class="description-ulisted-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg> Intel® Core™ i3-10100</li>
                        <li class="description-ulisted-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>GIGABYTE B560 HD3 (rev. 1.0)</li>
                        <li class="description-ulisted-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg> 8GB PCS PRO DDR4 2666MHz</li>
                        <li class="description-ulisted-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill=" #057df5" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>2GB GEFORCE GT 1030 - DVI, HDMI</li>
                    </ul>

                </div>
                <div class="main-product-heading-description-container-button">
                    <Button>BUY NOW</Button>
                </div>
                <div>
                    <p> FREE STANDARD DELIVERY TO MAINLAND UK ON ALL ORDERS!</p>
                </div>

            </div>

        </div>


        <div class="specific-description-container dark_target" id="specific_description" style="display:none ;">
            <p>Here are the specific details for the <strong>Laptop</strong></p>
            <div class="specific-description-main-container dark_target">
                <div class="specific-description-sub-container dark_target">
                    <div class="specific-heading dark_target">
                        <p>CHIPSET</p>
                    </div>
                    <div class="specific-description-details dark_target">
                        <div class="description-details-title">
                            <p>Processor Support</p>

                        </div>
                        <div class="description-details-paragraph ">
                            <p>Intel Celron</p>
                        </div>
                    </div>
                </div>
                <div class="specific-description-sub-container">
                    <div class="specific-heading">
                        <p>MEMORY</p>
                    </div>
                    <div class="specific-description-details dark_target">
                        <div class="description-details-title">
                            <p>RAM</p>
                            <p>Max Ram</p>
                            <p>Technology</p>
                            <p>Speed</p>
                            <p>Form Factor</p>

                        </div>
                        <div class="description-details-paragraph">
                            <p>8GB</p>
                            <p>32 GB Supported</p>
                            <p>DDR4 SDRAM</p>
                            <p>3200 MHZ</p>
                            <p>SO-DIMM 260-pin</p>
                        </div>
                    </div>
                </div>
                <div class="specific-description-sub-container">
                    <div class="specific-heading">
                        <p>MEMORY</p>
                    </div>
                    <div class="specific-description-details dark_target">
                        <div class="description-details-title">
                            <p>RAM</p>
                            <p>Max Ram</p>
                            <p>Technology</p>
                            <p>Speed</p>
                            <p>Form Factor</p>

                        </div>
                        <div class="description-details-paragraph">
                            <p>8GB</p>
                            <p>32 GB Supported</p>
                            <p>DDR4 SDRAM</p>
                            <p>3200 MHZ</p>
                            <p>SO-DIMM 260-pin</p>
                        </div>
                    </div>
                </div>
                <div class="specific-description-sub-container">
                    <div class="specific-heading">
                        <p>MEMORY</p>
                    </div>
                    <div class="specific-description-details dark_target">
                        <div class="description-details-title">
                            <p>RAM</p>
                            <p>Max Ram</p>
                            <p>Technology</p>
                            <p>Speed</p>
                            <p>Form Factor</p>

                        </div>
                        <div class="description-details-paragraph">
                            <p>8GB</p>
                            <p>32 GB Supported</p>
                            <p>DDR4 SDRAM</p>
                            <p>3200 MHZ</p>
                            <p>SO-DIMM 260-pin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="footerMenu">
        <div class="footer-menu-sub-container">
            <div class="footer-menu-sub-container-box">
                <h2>LOGO</h2>
            </div>
            <div class="footer-menu-sub-container-box">
                <p>Manufacturer of performance custom computers and laptops. Customise your ideal gaming PC or laptop
                    using our advanced configurator.</p>
            </div>
            <div class="footer-menu-sub-container-box">
                <span>Contact Us</span>
                <h3> 0333 011 7000 | Open Now</h3>
            </div>
            <div class="footer-menu-sub-container-box"><img src="img/UK_Payment Logos_Footer.webp" alt=""></div>
        </div>
        <div class="footer-menu-sub-container-links">

            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Terms & Conditions</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Privacy and Legal</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Corporate Responsibility</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Disclaimer</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Site Map</a>
                    </li>
                </ul>
            </div>
            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Contact Us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Returns Poicy</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Warranty</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">FAQs</a>
                    </li>

                    <li class="footerMenu__listItem">
                        <a href="" class="link">Right to Cancel</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Payment Options</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Vacancies</a>
                    </li>
                </ul>
            </div>
            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">About us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Careers</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Corporate Events</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Why buy from us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Our Service</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Finance</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Testimonials</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link"><strong>COMPUK</strong> terms</a>
                    </li>

                </ul>
            </div>

        </div>

    </section>

    <footer class="legalFooter">
        <div class="legalFooter__description">
            <p>© <STrong>COMPUK</STrong> Cinemas Limited 2019 to 2022. All rights reserved</p>
        </div>
        <div class="legalFooter_socialIcons">
            <img src="img/facebook.png" alt="">
            <img src="img/instagram.png" alt="">
        </div>

    </footer>


</body>



</html>