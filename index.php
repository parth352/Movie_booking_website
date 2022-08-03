<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- For Style CSS -->
    <link rel="stylesheet" href="style/styles.css">

    <title>MV Time</title>
    <link rel="icon" type="image/png" href="img/logo.png">

    <!-- For Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- For Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Rubik+Moonrocks&family=Rubik+Wet+Paint&family=Russo+One&display=swap" rel="stylesheet">

    <!--For Tailwind CSS -->
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- CSS of Website -->
    <style>
        body {
            background-color: gainsboro;
        }

        .navbar ul li:hover {
            background-color: transparent;
        }

        .navbar ul li a:hover {
            background-color: #0c0f6c;
            border-radius: 50px;
            transition: 0.5s all;
            box-shadow: 0 0 9px white;
        }

        .navbar-menu li a {
            padding: 0px 10px;
        }

        .navbar ul li a h4 {
            font-family: 'Bree Serif', serif;
            font-size: 20px;
            color: white;
            line-height: 30px;
        }

        .navbar ul li a h4:hover {
            color: white;
        }

        .main-heading {
            animation: move 1s ease infinite;
        }

        .footer-brand .footer-heading {
            font-family: 'Russo One', sans-serif;

        }

        .trailers-grid-item img{
            height: 110%;
        }

        #home-section-3{
            margin: 0px 0px;
        }
        #home-section-2, #home-section-3{
            margin: 0px ;
        }
        .footer-section{
            padding: 0px;
        }
        .w-full{
            width: 70%;
        }
        @keyframes move {
            0% {
                transform: rotateZ(-6deg);
            }

            50% {
                transform: rotateZ(5deg);
            }

            100% {
                transform: rotateZ(-6deg);
            }
        }
    </style>
</head>

<body style="background-color:black;">
    <?php
    include "connection.php";
    $sql = "SELECT * FROM movieTable";
    ?>
    <div style="height: 15em;
  overflow: hidden;
  ">

        <div style="
  display: block;
  position: relative;
  top: -195%;
  left: -25%;
  height: 219%;
  width: 200%;
  background: #0c0f6c;
  box-shadow: 0px 8px 0px rgba(0, 0, 0, 0.1);
  transform: rotateZ(356deg) skew(-6deg);
  border: 2px solid white;
  ">
        </div>
        <a href="index.php">
            <h1 class="main-heading" style="position: absolute;
    top: 1vmax;
    left: 2vmax;
    padding: 0;
    margin: 0;
    color: white;
    font-size: 7em;
    font-family: 'Russo One', sans-serif;
    transform: rotateZ(-6deg);
    text-shadow: 2px 2px 0px #ef4131, 4px 4px 0px #d51123, 6px 6px 0px black, 8px 8px 0px #21221d, 10px 10px 0px #e90404;">MV Time</h1>
        </a>
    </div>
    <div class="navbar-container">
        <nav class="navbar">
            <ul class="navbar-menu">
                <li><a href="index.php">
                        <h4>Home</h4>
                    </a></li>
                <!--  <li><a href="schedule.php"><h4 style="color:black;">Schedule</h4></a></li> -->
                <li><a href="TxnStatus.php" target="_blank">
                        <h4>Status</h4>
                    </a></li>
                <li><a href="#">
                        <h4>Team</h4>
                    </a></li>
                <li><a href="contact-us.php">
                        <h4>Contact</h4>
                    </a></li>
            </ul>
        </nav>
    </div>

    <!-- Image Slider -->

    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel" style="width:1200px;">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="img/image slider/6790561.jpg" class="block w-full" alt="..." />
                <div class="carousel-caption hidden md:block absolute text-center">
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="img/image slider/7067663.jpg" class="block w-full" alt="..." />
                <div class="carousel-caption hidden md:block absolute text-center">

                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="img/image slider/7779150.jpg" class="block w-full" alt="..." />
                <div class="carousel-caption hidden md:block absolute text-center">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="home-section-1" class="movie-show-container">
        <h1 style="color:#ff0000;
                   font-size:30px;">Currently Showing</h1>
        <h3 style="color:red;">Book a movie now</h3>

        <div class="movies-container">

            <?php
            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    for ($i = 0; $i <= 5; $i++) {
                        $row = mysqli_fetch_array($result);
                        echo '<div class="movie-box">';
                        echo '<img src="' . $row['movieImg'] . '" alt=" ">';
                        echo '<div class="movie-info ">';
                        echo '<h3>' . $row['movieTitle'] . '</h3>';
                        echo '<a href="booking.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    mysqli_free_result($result);
                } else {
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }

            // Close connection
            mysqli_close($con);
            ?>
        </div>
    </div>

    <!-- Movie's trailer Section -->
    <hr>

    <div id="home-section-2" class="services-section">
        <h1 style="color:#ff0000;
                   font-size:30px; ">How it works</h1>
        <h3 style="color:red;">3 Simple steps to book your favourit movie!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2 style="color:white;">1. Choose your favourite movie</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2 style="color:white;">2. Pay for your tickets</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2 style="color:white;">3. Pick your seats & Enjoy watching</h2>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    <hr>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title" 
        style="
        color:#ff0000;
        font-size:30px;
        ">Explore new movies</h1>
        <h3 style="color:red;">Now showing</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/Kashmir files2.jpg" alt="">
                <div class="trailer-item-info" data-video="A179apttY58">
                    <h3>Kashmir Files</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/radhe-shyam2.jpg" alt="">
                <div class="trailer-item-info" data-video="M_Z7YQkrnAo">
                    <h3>Radhe Shyam</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thor2.jpg" alt="">
                <div class="trailer-item-info" data-video="KHPrDP0F5_o">
                    <h3>Thor</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/bachchan-pandey.jpg" alt="">
                <div class="trailer-item-info" data-video="4d8m59ct2wQ">
                    <h3>Bachan Pandey</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/rrr3.jpg" alt="">
                <div class="trailer-item-info" data-video="GY4BgdUSpbE">
                    <h3>RRR</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/the-matrix.png " alt="">
                <div class="trailer-item-info" data-video="9ix7TUGVYIo">
                    <h3>Matrix</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div style="background-color:gray;">
        <div class="footer-section footer-section1">
            <div class="footer-brand">
                <a href="index.php">
                    <h1 class="footer-heading">MV Time</h1>
                </a>
            </div>
        </div>
        <div class="footer-section footer-section2">
            <h2 style="color:white;"><i class="fas fa-user-alt"></i> Social Media</h2>
            <div class="footer-section-inner-container">
                <span><i class="fab fa-lg fa-facebook-square"></i> Facebook</span>
                <span><i class="fab fa-lg fa-twitter-square"></i> Twitter</span>
                <span><i class="fab fa-lg fa-instagram"></i> Instagram</span>
            </div>
        </div>
        <!-- footer  -->
        <footer class="bg-gray-200 text-center lg:text-left">
  <div class="text-gray-700 text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-gray-800" href="https://tailwind-elements.com/">MV Time all rights reserved!!</a>
  </div>
</footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>