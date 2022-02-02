<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif
  }

  .mySlides {
    display: none
  }

  html {
    background: url('Home Screen.png') no-repeat center fixed;
    background-size: cover;
  }
  p {text-align: center;
  font-size: 25px;}
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#home" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="#scan" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SCAN ATTENDANCE</a>
      <a href="#activity" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MANAGE ACTIVITY</a>
      <a href="#profile" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MANAGE PROFILE</a>
      <a href="#logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGOUT</a>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
  </div>top: 0;
  right: 0;

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
    <a href="#scan" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SCAN ATTENDANCE</a>
    <a href="#activity" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MANAGE ACTIVITY</a>
    <a href="#profile" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MANAGE PROFILE</a>
    <a href="#logout" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LOGOUT</a>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px" id='home'>

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
      <img src="assets/Home Screen.png" width="110%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3><b>WELCOME BACK</b></h3>
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="assets/chinesenewyear.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3><b>HAPPY CHINESE NEW YEAR</b></h3>
        
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="assets/follow sop.jpeg" style="width:110%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3><b>FOLLOW THE SOP's</b></h3>
        
      </div>
    </div>

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="">
      <h2 class="w3-wide">ABOUT US</h2>
      <p class="w3-opacity"><i>Together We Achieve More</i></p>
      <p class="w3-justify"></p>
      <div class="w3-row w3-padding-32">
        <div align='center'>
          <p>GOKUL NATH</p>
          <img src="assets/Home Screen.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
          <p align='center'>Director</p><br>
        </div>
        <div align='center'>
          <p>RAHYAN UDDIN</p>
          <img src="assets/Home Screen.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
          <p align='center'>Assistance Director</p>
        </div>
      </div>
    </div>

    <!-- The Tour Section -->
    <div class="w3-white" id="scan">
      <div align='center' class="w3-container w3-content w3-padding-64" style="max-width:800px"/ onblur='generateBarCode();'>
      <p><b>Please scan your attendance</b></p>
        <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=ATTENDANCE RECORDED&amp;size=100x100" alt="" title="HELLO" width="200" height="200" />
      </div>
    </div>

    <!-- Ticket Modal -->
    <div id="activity" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32">
          <span onclick="document.getElementById('ticketModal').style.display='none'" class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
        </header>
        <div class="w3-container">
          <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
          <input class="w3-input w3-border" type="text" placeholder="How many?">
          <p><label><i class="fa fa-user"></i> Send To</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Enter email">
          <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
      </div>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="profile">
      <h2 class="w3-wide w3-center">PROFILE</h2>
      <h1 align='center'>Welcome</h1>
      <?php
      $sql = "SELECT * FROM users";
      $result = mysqli_query($con, $sql);
      ?>
      <?php
      while ($rows = mysqli_fetch_array($result)) {
      ?>
        <form action="" method="POST" id="signin" id="reg">
          <div id="reg-head" class="headrg">Your Profile</div>
          <table border="0" align="center" cellpadding="2" cellspacing="0">
            <tr id="lg-1">
              <td class="tl-1">
                <div align="left" id="tb-name">EmployeeId:</div>
              </td>
              <td class="tl-4"><?php echo $array['employee_id'] = $rows['employee_id']; ?></td>
            </tr>
            <tr id="lg-1">
              <td class="tl-1">
                <div align="left" id="tb-name">Username:</div>
              </td>
              <td class="tl-4"><?php echo $array['username'] = $rows['username']; ?></td>
            </tr>
            <tr id="lg-1">
              <td class="tl-1">
                <div align="left" id="tb-name">Email:</div>
              </td>
              <td class="tl-4"><?php echo $array['email'] = $rows['email']; ?></td>
            </tr>
            <tr id="lg-1">
              <td class="tl-1">
                <div align="left" id="tb-name">Type:</div>
              </td>
              <td class="tl-4"><?php echo $array['usertype'] = $rows['usertype']; ?></td>
            </tr>
          </table>
        </form>
      <?php
      } // close while loop
      ?>
      </br>
      </form>
    </div>
  </div>

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="logout">
    <p><a href="logout.php">Logout</a></p>
  </div>

  <!-- Image of location/map -->


  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    function generateBarCode() 
{
    var nric = $('#text').val();
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
    $('#barcode').attr('src', url);
}
  </script>

</body>

</html>