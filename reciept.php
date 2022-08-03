<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style/styles.css">
	<!-- For Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Rubik+Moonrocks&family=Rubik+Wet+Paint&family=Russo+One&display=swap" rel="stylesheet">


	<!-- Bootstrap CSS -->
	
	<title>Recipt</title>
	<style>
		*{
			color: white;
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
		.btn1{
			background-color: white;
			border-radius: 20px;
		}
		.btn1:hover{
			box-shadow: 0px 0px 10px white;
			transition: 0.4s;
		}
		.invoice-box {
			max-width: 800px;
			margin: auto;
			padding: 30px;
			border: 1px solid #eee;
			box-shadow: 0 0 10px rgba(0, 0, 0, .15);
			font-size: 16px;
			line-height: 24px;
			font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			color: #555;
		}

		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
		}

		.invoice-box table td {
			padding: 5px;
			vertical-align: top;
		}

		.invoice-box table tr td:nth-child(2) {
			text-align: right;
		}

		.invoice-box table tr.top table td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.top table td.title {
			font-size: 45px;
			line-height: 45px;
			color: #333;
		}

		.invoice-box table tr.information table td {
			padding-bottom: 40px;
		}

		.invoice-box table tr.heading td {
			background: #eee;
			border-bottom: 1px solid #ddd;
			font-weight: bold;
		}

		.invoice-box table tr.details td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.item td {
			border-bottom: 1px solid #eee;
		}

		.invoice-box table tr.item.last td {
			border-bottom: none;
		}

		.invoice-box table tr.total td:nth-child(2) {
			border-top: 2px solid #eee;
			font-weight: bold;
		}

		@media only screen and (max-width: 600px) {
			.invoice-box table tr.top table td {
				width: 100%;
				display: block;
				text-align: center;
			}

			.invoice-box table tr.information table td {
				width: 100%;
				display: block;
				text-align: center;
			}
		}

		/** RTL **/
		.rtl {
			direction: rtl;
			font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		}

		.rtl table {
			text-align: right;
		}

		.rtl table tr td:nth-child(2) {
			text-align: left;
		}

		
	</style>
	
</head>

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
            <li><a href="index.php" ><h4 style="color:white;">Home</h4></a></li>
          <!--  <li><a href="schedule.php"><h4 style="color:black;">Schedule</h4></a></li>		-->
             <li><a href="TxnStatus.php" target="_blank"><h4 style="color:white;">Status</h4></a></li> 
            <li><a href="#"><h4 style="color:white;">Team</h4></a></li>           
            <li><a href="contact-us.php"><h4 style="color:white;">Contact</h4></a></li>
        </ul>
    </nav>
</div>

	<div>
		<?php
include "connection.php";
$db = mysqli_select_db($con, "cinema_db");
//if (isset($_GET["id"]))
//{
		$qry = "select * from bookingtable where bookingID = '161'";
		//if ((!$_GET['id'])) {
		//	echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
		//}
		$result = mysqli_query($con, $qry);
		if (mysqli_num_rows($result) == 0) {
			echo "No rows found, nothing to print so am exiting";
			exit;
		}
		while ($row = mysqli_fetch_assoc($result)) {
			$bookingid = $row['bookingID'];
			$movieID = $row['movieID'];
			$bookingFName = $row['bookingFName'];
			$bookingLName = $row['bookingLName'];
			$mobile = $row['bookingPNumber'];
			$email = $row['bookingEmail'];
			$date = $row['bookingDate'];
			$theatre = $row['bookingTheatre'];
			$type = $row['bookingType'];
			$time = $row['bookingTime'];
			$amount = $row['amount'];
			$ORDERID = $row['ORDERID'];
			$date = $row['DATE-TIME'];
		} 
//}		
		?>
	</div>
	<br>
	<div class="invoice-box">
		<table cellpadding="0" cellspacing="0">
			<tr class="top">
				<td colspan="2">
					<table>
						<tr>
							<td class="title">
								
									<h4 style=" color: white;">MV Time</h4>
								
							</td>
							<td>
								
																				
								Created: <?php date_default_timezone_set('Asia/kolkata');
											echo $date = DATE("d-m-y h:i:s", strtotime($date));  ?><br>
								Due: <?php echo "After 24 Hours"; ?>
								<!-- 1 Day = 24*60*60 = 86400 -->
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="information">
				<td colspan="2">
					<table>
						<tr>
							<td>
								Time Cinema<br>
								Anand-388220<br>
								Gujarat
							</td>

							<td>
								<?php echo $bookingFName . ' ' . $bookingLName; ?><br>
								<?php echo $mobile; ?><br>
								<?php echo $email; ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="heading">
				<td style="color: black;">
					Payment Status
				</td>

				<td style="color: black;">
					Check #
				</td>
			</tr>

			<tr class="details">
				<td>
					Success
				</td>

				<td>
					<?php echo 'RS ' . $amount; ?>
				</td>
			</tr>

			<tr class="heading">
				<td style="color: black;">
					Movie Details
				</td>

				<td style="color: black;">
					Info
				</td>
			</tr>

			<tr class="item">
				<td>
					Movie Date
				</td>

				<td>
					<?php echo $date; ?>
				</td>
			</tr>

			<tr class="item">
				<td>
					Theatre Type
				</td>

				<td>
					<?php echo $theatre; ?> </td>
			</tr>

			<tr class="item last">
				<td>
					Movie Type
				</td>

				<td>
					<?php echo $type; ?>
				</td>
			</tr>

			<tr class="total">
				<td></td>

				<td>
					<!-- Total: $385.00 -->
				</td>
			</tr>

		</table>
		
		<img src='abc.png' width='auto' height='120'/>
		

	</div>
	
	<div align="center" style="max-width: 400px; margin:auto; padding: 30px;">
		<input type="button" class="btn1 btn-danger" onClick="window.print()" value="Print Recipt!" style="background-color:white; height: 43px; color:black; font-size:20px; width:125px" />
		<a type="button" class="btn btn1 btn-success" href='index.php' style="color:black; font-size:20px;">Home-Page</a>
	</div>

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
  <!-- footer  -->
  <footer class="bg-gray-200 text-center lg:text-left">
  <div class="text-gray-700 text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-gray-800" href="https://tailwind-elements.com/">MV Time all rights reserved!!</a>
  </div>
</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>