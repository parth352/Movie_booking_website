<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img/logo.png">

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

    <!-- For style.css -->
    <link rel="stylesheet" href="style/style2.css">

</head>

<style>
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

    .footer-section {
        padding: 0px;
    }

    .colorwhite {
        color: white;
    }

    .contact-us-section {
        background-color: #ffffff3d;
        border-radius: 30px;
        padding: 10px 45px;
        box-shadow: 2px 2px 5px white;
    }
    .contact-us-section1 form *:not(button){
        border-bottom: 2px solid black;
    }
    .input1{
        outline: none;
        border-radius: 15px;
        width: 70%;
    }
    .input1::placeholder{
        color: black;
    }
    .input1:focus{
        width: 100%;
        transition: 0.5s all;
    }
    .input2{
        width: 80%;
    }
    .contact-us-section1 form button{
        border-radius: 15px;
        background-color: blue; 
        padding: 15px;
        font-weight: 700;
    }
    .contact-us-section1 form button:hover{
        box-shadow: 0px 0px 10px white;
        transition: 0.5s;
    }
    .contact-us-section2 h3{
        border-bottom: 2px solid white;
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

<body style="background-color:black;">
    <?php
    include "connection.php";
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
    top: 2vmax;
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
                <!--    <li><a href="schedule.php"><h4 style="color:black;">Schedule</h4></a></li>      -->
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

    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1 style="color:white;
                       font-size:40px;">Contact</h1>
            <p style="color: white;">Feel Free to Contact Us </p>
            <form action="" method="POST">
                <input class="input1" placeholder="First Name" name="fName" required><br>
                <input class="input1" placeholder="Last Name" name="lName"><br>
                <input class="input1" placeholder="E-mail Address" name="eMail" required><br>
                <textarea class="input1 input2" placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                if (isset($_POST['submit'])) {
                    $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '" . $_POST["fName"] . "',
                                        '" . $_POST["lName"] . "',
                                        '" . $_POST["eMail"] . "',
                                        '" . $_POST["feedback"] . "')";
                    $add = mysqli_query($con, $insert_query);

                    if ($add) {
                        echo "<script>alert('Succesfully Submitted');</script>";
                    }
                }
                ?>
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1 style="color:white;
                       font-size:40px;">Address & Info</h1>
            <h3 style="color: white;">Phone Numbers</h3>
            <p><a class="colorwhite" href="tel:4589327590">4589327590</a><br>
                <a class="colorwhite" href="tel:9458671820">9458671820</a>
            </p>
            <h3 style="color: white;">Address</h3>
            <p class="colorwhite">Anand-388120 Gujarat</p>
            <h3 style="color:white" ;>E-mail</h3>
            <p class="colorwhite"><a class="colorwhite" href="mvtime@gmail.com">mvtime@gmail.com</a></p>
        </div>
    </div>

    <h1
     style="color: white;
            font-size:50px;
            text-align:center;
            border-bottom:2px solid white;">Our Location</h1>

    <div style="width: 75%; height: 350px; margin:0px auto 100px auto;">
        <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=BUE&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>