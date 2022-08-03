<!DOCTYPE html>
<html lang="en">
<?php
$id = $_GET['id'];
//conditions
if ((!$_GET['id'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}
include "connection.php";
$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id";
$movieImageById = mysqli_query($con, $movieQuery);
$row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
   
    <title>Book <?php echo $row['movieTitle']; ?> Now</title>
    <link rel="icon" type="image/png" href="img/logo.png">

    <!-- For Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Josefin+Sans:wght@700&family=Rubik+Moonrocks&family=Rubik+Wet+Paint&family=Russo+One&display=swap" rel="stylesheet">
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
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        var mobile=document.verify.pNumber.value;
            if(mobile.length<10 || mobile.length>10)
	{
		alert("enter valid mobile nummber");
        document.verify.pNumber.focus();
		return false;
	}
    </script>
    
        
    
</head>
<!-- For CSS -->
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
        .footer-brand .footer-heading {
            font-family: 'Russo One', sans-serif;
        }
        .booking-panel{
            background-color: #ffffff63;
            border-radius: 20px;
        }
        .booking-panel-section booking-panel-section4{
            background-color: white;
        }
        .input1{
            outline: none;
        }
        .input1::placeholder{
            color: black;
        }
        .booking-form-container form button{
            background-color: blue;
        }
        .booking-form-container form button:hover{
            background-color: blue;
            box-shadow: 0px 0px 10px black;
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
            <li><a href="index.php" ><h4 style="color:white;">Home</h4></a></li>
           <!--  <li><a href="schedule.php"><h4 style="color:black;">Schedule</h4></a></li> -->
            <li><a href="TxnStatus.php" target="_blank"><h4 style="color:white;">Status</h4></a></li>  
            <li><a href="#"><h4 style="color:white;">Team</h4></a></li>           
            <li><a href="contact-us.php"><h4 style="color:white;">Contact</h4></a></li>
        </ul>
    </nav>
</div>
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1 style="color:white;
                       border:2px solid white;
                       border-radius:10px;
                       font-size:30px;
                       font-family: 'Josefin Sans', sans-serif;
                       ">Reserve Your Ticket</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                echo '<img src="' . $row['movieImg'] . '" alt="">';
                ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div  style="color:#ff0000;" class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENGRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="booking-form-container">
                <form name="verify" action="verify.php" method="POST">


                    <select name="theatre" required>
                        <option value="" disabled selected>THEATRE</option>
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>

                    <select name="type" required>
                        <option value="" disabled selected>TYPE</option>
                        <option value="3d">3D</option>
                        <option value="2d">2D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>

                    <select name="date" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="12-3">March 26,2022</option>
                        <option value="13-3">March 27,2022</option>
                        <option value="14-3">March 28,2022</option>
                        <option value="15-3">March 29,2022</option>
                        <option value="16-3">March 30,2022</option>
                    </select>

                    <select name="hour" required>
                        <option value="" disabled selected>TIME</option>
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>

                    <input class="input1" placeholder="First Name" type="text" name="fName" required>

                    <input class="input1" placeholder="Last Name" type="text" name="lName">

                    <input class="input1" placeholder="Phone Number" type="text" name="pNumber" required>
                    <input class="input1" placeholder="Email" type="email" name="email" required>
                    <input class="input1" type="hidden" name="movie_id" value="<?php echo $id; ?>">



                    <button type="submit" value="save" name="submit" class="form-btn">Book a seat</button>

                </form>
                
            </div>
        </div>
    </div>
</br>
</br>
</br>
</br>
</br>
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