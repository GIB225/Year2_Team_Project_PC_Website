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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">


    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="js/toggle_switch.js"></script>
    <script>

    </script>
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
    
   <?php include '/header.php'; ?>
<!-- font-family: 'Staatliches', cursive; -->
<!-- font-family: 'Russo One', sans-serif; -->


<body>

    <?php include '/header.php'; ?>
    
    <div class="mainbox-container" id="main_body">
        <div class="mainbox-container-1">
            <section class="bannerContainer">


                <div class="slider-frame">
                    <div class="slide-images">
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slidshow1.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow2.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow3.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slidshow1.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow3.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="bannerTextContainer">

                    <p id="bannerText">
                        LEADING THE WAY IN BESPOKE PC SYSTEMS AND LAPTOP GAMING
                        <br>
                        <a href="#"> <button class="linkButton">SEE COLLECTIONS</button>
                    </p>

                </div>
                <div>

                    </a>
                </div>


            </section>
        </div>
        <div class="banner-1-container" style="margin-top:-1px ;">

            <div class="banner-1-sub-container">
                <img src="img/homepage-lineup-laptops.png" alt="">
            </div>
            <div class="banner-1-sub-container">
                <div class="banner-1-sub-container-heading">
                    <h1 style="font-family: 'Russo One', sans-serif; ">
                        CUSTOM LAPTOPS</h1>
                </div>
                <div class="banner-1-sub-container-paragraph">
                    <p
                        style="  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Why buy off-the-shelf? Custom build your ideal laptop here only pay for what you need!
                    </p>

                </div>
                <div class="banner-1-sub-container-button">
                    <button style="  font-family: 'Russo One', sans-serif;  ">CONFIGURE NOW</button>
                </div>
            </div>
        </div>

        <div class="devices-container-heading">
            <h3 id="devices-container-heading-h3" style="font-family: 'Russo One', sans-serif;font-size:19px ">FEATURED SYSTEMS</h3>

        </div>

        <div class="change-buttons">
            <button id="laptopChange_Button" onclick="changeToLaptop()">LAPTOPS</button>
            <button id="desktopChange_Button" onclick="changeToDesktop()">DESKTOPS</button>
        </div>



        <div class="devices-container" id="desktop_container">
            <div class="devices-sub-container">
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="devices-sub-container">
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/AGILITY_PRO.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="devices-container-laptop" id="laptop_container">
            <div class="devices-sub-container">
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">LAFIFE PRO 15 6</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">LAFIFE PRO 15 6</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">LAFIFE PRO 15 6</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="devices-sub-container">
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">LAFIFE PRO 15 6</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">LAFIFE PRO 15 6</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
                <div class="devices-sub-container-product">
                    <div class="productdetails">
                        <div class="product-details-title">AGILITY PRO</div>
                        <div class="product-details-img"><img src="img/Lafife Pro 15 6.webp" alt=""></div>
                        <div class="product-details-description">
                            <ul class="description-ulisted">
                                <li class="description-ulisted-item">PCS 3601 CASE</li>
                                <li class="description-ulisted-item"> Intel® Core™ i3-10100</li>
                                <li class="description-ulisted-item">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                <li class="description-ulisted-item"> 8GB PCS PRO DDR4 2666MHz</li>
                                <li class="description-ulisted-item">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                            </ul>
                        </div>
                        <div class="product-details-buy-buttons">
                            <button>CONFIGURE THIS PC ></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="banner-1-container">
            <div class="banner-1-sub-container">
                <div class="banner-1-sub-container-heading">
                    <h1 style="font-family: 'Russo One', sans-serif; ">CONFIGURE YOUR PC</h1>
                </div>
                <div class="banner-1-sub-container-paragraph">
                    <p
                        style="  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        No matter what PC you're looking to buy - we've got the ideal custom built PC for you!
                    </p>

                </div>
                <div class="banner-1-sub-container-button">
                    <button style="  font-family: 'Russo One', sans-serif;  ">CONFIGURE NOW</button>
                </div>
            </div>
            <div class="banner-1-sub-container">
                <img src="img/homepage-lineup-workstation.png" alt="">
            </div>
        </div>
        <div class="shipping-banner-outer">
            <div class="shipping-banner">
                <div class="shipping-banner-sub-container">
                    <div class="shipping-banner-sub-container-img"><img src="img/delivery-van.png" style="width:100px ;"
                            alt=""></div>
                    <div class="shipping-banner-sub-container-heading">
                        <h3>NEXT DAY PCs</h3>
                    </div>
                    <div class="shipping-banner-sub-container-paragraph">
                        <p>IN STOCK & READY TO SHIP!</p>
                    </div>
                </div>
                <div class="shipping-banner-sub-container">
                    <button>ORDER NOW</button>
                </div>
            </div>
        </div>

       
       
    </div>
    <section class="footerMenu">
        <div class="footer-menu-sub-container">
            <div class="footer-menu-sub-container-box"><h2>LOGO</h2></div>
            <div class="footer-menu-sub-container-box"><p>Manufacturer of performance custom computers and laptops. Customise your ideal gaming PC or laptop using our advanced configurator.</p></div>
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