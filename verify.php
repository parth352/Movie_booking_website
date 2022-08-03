<?php
include "connection.php";
session_start();

// variables
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$mobile = $_POST['pNumber'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['hour'];
$movieid = $_POST['movie_id'];
$order = "MVTime" . rand(10000, 99999999);
$cust  = "CUST" . rand(1000, 999999);

//sessions
// $_SESSION['ORDERID'] = $order;


//conditions
if ((!$_POST['submit'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}

if (isset($_POST['submit'])) {

    $qry = "INSERT INTO bookingtable(`movieID`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`,`amount`, `ORDERID`)VALUES ('$movieid','$theatre','$type','$date','$time','$fname','$lname','$mobile','$email','Not Paid','$order')";

    $result = mysqli_query($con, $qry);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
--> <link rel="stylesheet" href="style/styles.css">
    
     <!-- For Google Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Rubik+Moonrocks&family=Rubik+Wet+Paint&family=Russo+One&display=swap" rel="stylesheet">


    <title>Movie Booking</title>
    
</head>

<!-- CSS -->
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
    table{
        border-collapse: collapse;
        background-color: white;
    }
    .btn1{
        border-radius: 20px;
        border: none;
        border: 2px solid white;
        color: white;
        padding: 15px;
        background-color: blue;
    }
    .btn1:hover{
        box-shadow: 0px 0px 10px black;
        transition: 0.5s all;
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
           <!-- <li><a href="schedule.php"><h4 style="color:black;">Schedule</h4></a></li> -->
           <li><a href="TxnStatus.php" target="_blank"><h4 style="color:white;">Status</h4></a></li>  
            
            <li><a href="#"><h4 style="color:white;">Team</h4></a></li>           
            <li><a href="contact-us.php"><h4 style="color:white;">Contact</h4></a></li>
        </ul>
    </nav>
</div>
    
    <center>
        
        <h1 style="color:red;
                   border: 2px solid white;
                   border-radius:10px">Verify Your Details </h1>
        <br><br>

        <form method="post" action="seats.html">
            <table border="1" style="text-align: center; background-color:white;">
                <tbody>
                    <tr>
                        <th>S.No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td><label>ORDER_ID::*</label></td>
                        <td><?php echo $order; ?>
                            <input type="hidden" name="ORDER_ID" value="<?php echo $order; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><label>Name</label></td>
                        <td><?php echo $_POST['fName'] . " " . $_POST['lName']; ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><label>Website ::*</label></td>
                        <td>
                            <?php echo "MV Times"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><label>THEATRE ::*</label></td>
                        <td>
                            <?php echo $_POST['theatre']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><label>TYPE ::*</label></td>
                        <td>
                            <?php echo $_POST['type']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><label>txnAmount*</label></td>
                        <td>
                            <?php
                            if ($theatre == "main-hall") {
                                $ta = 200;
                            }
                            if ($theatre == "vip-hall") {
                                $ta = 500;
                            }
                            if ($theatre == "private-hall") {
                                $ta = 900;
                            }

                            ?>

                            <input type="text" name="TXN_AMOUNT" value="<?php echo $ta; ?>" readonly>
                            <input type="hidden" name="CUST_ID" value="<?php echo $cust; ?>">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="retail">
                            <input type="hidden" name="CHANNEL_ID" value="WEB">

                        </td>
                    </tr>


                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button value="Book Now!" class="btn1" type="submit" onclick="" type="button">Confirm</button>
                            <!-- <input value="CheckOut" type="submit"	onclick=""></td> -->

                </tbody>
            </table>
            * - Mandatory Fields
        </form>
    </center>
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
        <footer class="bg-gray-200 text-center  lg:text-left">
  <div class="text-gray-700 text-center p-4" style="background-color: white;">
    © 2022 Copyright:
    <a class="text-gray-800" href="https://tailwind-elements.com/">MV Time all rights reserved!!</a>
  </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>