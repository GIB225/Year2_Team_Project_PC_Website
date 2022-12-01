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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/about_us.css">

    <script src="js/toggle_switch.js"></script>
    <script src="js/about_us.js"></script>
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
<!-- font-family: 'Staatliches', cur sive; -->
<!-- font-family: 'Russo One', sans-serif; -->


<body style="background:none;">

    

     <?php require 'header.php'; ?>

    <div class="main-container-about-us-page" >
        <section class="page" >
            <section style="margin-top:200px ;" >
                <ul class="tabs-controls">
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link tabs-controls__link--active " data-id="1">
                            COMPUK
                        </a>
                    </li>
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link" data-id="2">
                            Products
                        </a>
                    </li>
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link" data-id="3">
                            Delivery
                        </a>
                    </li>
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link" data-id="4">
                            Tab D
                        </a>
                    </li>
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link" data-id="5">
                            Tab E
                        </a>
                    </li>
                    <li class="tabs-controls__item">
                        <a href="#" class="tabs-controls__link" data-id="6">
                            Tab F
                        </a>
                    </li>
                </ul>
            </section>
            <section class="cards-container">
                <div class="card card--current" id="1">
                    <h1>COMPUK</h1>
                    <p>
                        COMPUK is an online computer sales platform created by a group of college students. The company was founded in 2022 with 6 employees.
                        We can customize computers to meet the needs of each user

                    </p>
                </div>
                <div class="card" id="2">
                    <h1>What we offer</h1>
                    <p>
                        COMPUK aims to bring together a section of the digital gaming world, from the Desktop and Laptop lineage, to give our users a concentrated pool of options. What we would offer is convenience and the ability of quick comparison all in one place. 
                    </p>
                </div>
                <div class="card" id="3">
                    <h1>Delivery options</h1>
                    <p>
We offer a range of delivery which range from free to special delivery options based on product weight, size and where you are. We ship products in the UK free of charge. Our professional team provides maintenance, technical support, and assistance for each user to solve computer related issues.
                    </p>
                </div>
                <div class="card" id="4">
                    <h1>D. Sed do eiusmod</h1>
                    <p>
                        Sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrcaecat cupidatat nonv proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.
                    </p>
                </div>
                <div class="card" id="5">
                    <h1>E. Ut enim ad minim veniam</h1>
                    <p>
                        Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in vo cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="card" id="6">
                    <h1>F. Labore et dolore magna aliqua</h1>
                    <p>
                        Labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in volupest laborum.
                    </p>
                </div>
            </section>
        </section>

    </div>


    <?php require 'footer.php'; ?>
</body>

</html>
