<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container */
        .container {
            width: 40%;
            margin: 0 auto;
        }

        /* Login */
        #div_login {
            border: 1px solid gray;
            border-radius: 3px;
            width: 470px;
            height: 270px;
            box-shadow: 0px 2px 2px 0px gray;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: cornflowerblue;
            color: white;
            font-family: sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
    </style>
</head>

<body style="background-color:gainsboro;">
<div style="height: 20em;
  overflow: hidden;
  ">
   
     <div  style="
  display: block;
  position: relative;
  top: -195%;
  left: -25%;
  height: 219%;
  width: 200%;
  background: #0c0f6c;
  box-shadow: 0px 8px 0px rgba(0, 0, 0, 0.1);
  transform: rotateZ(356deg) skew(-6deg);

  ">
  </div>
          
    <h1 style="position: absolute;
    top: 4vmax;
    left: 2vmax;
    padding: 0;
    margin: 0;
    color: rgb(234 237 25);;
    font-size: 7em;
    font-family: Lobster ,cursive;
    transform: rotateZ(-6deg);
    text-shadow: 2px 2px 0px #ef4131, 4px 4px 0px #d51123, 6px 6px 0px #44d921, 8px 8px 0px #21221d, 10px 10px 0px #e90404;">Admin Panel</h1>
  
    
</div>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1 >Login</h1>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" />
                </div>
                <div>
                    <center>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
    </center>
                </div>
            </div>
        </form>
    </div>
    
</body>

</html>

<?php
include "config.php";

if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: admin.php');
        } else {
            echo "Invalid username and password";
        }
    }
}
?>