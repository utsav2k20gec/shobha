<!DOCTYPE html>
<html>
<head>
<title>Student Support System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">


</head>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item  w3-wide"><img src="img/logo.png" alt="loading.." height="40px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="study_material.php" class="w3-bar-item w3-button" id="bg-color-SM">Study Material</a>
      <a href="pyqp.php" class="w3-bar-item w3-button" id="bg-color-PYQP"> PYQP</a>
      <a href="assignment_ip.php" class="w3-bar-item w3-button" id="bg-color-AIP"> Assignment(IP)</a>
      <a href="class_tt.php" class="w3-bar-item w3-button" id="bg-color-CTT"> Class TT</a>
      <a href="syllabus.php" class="w3-bar-item w3-button" id="bg-color-SY"> Syllabus</a>
      <a href="coe.php" class="w3-bar-item w3-button" id="bg-color-COE"> CoE</a>
      <a href="holiday_list.php" class="w3-bar-item w3-button" id="bg-color-HL"> Holiday List</a>
      <a href="about_us.php" class="w3-bar-item w3-button" id="bg-color-AU"> About Us</a>
      <a href="#contact" class="w3-bar-item w3-button"> Contact Us</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-hide-medium w3-hide-large " style="display:none;" id="mySidebar">
      <a href="study_material.php" class="w3-bar-item w3-button">Study Material</a>
      <a href="pyqp.php" class="w3-bar-item w3-button"> PYQP</a>
      <a href="assignment_ip.php" class="w3-bar-item w3-button"> Assignment(IP)</a>
      <a href="class_tt.php" class="w3-bar-item w3-button"> Class TT</a>
      <a href="syllabus.php" class="w3-bar-item w3-button"> Syllabus</a>
      <a href="coe.php" class="w3-bar-item w3-button"> CoE</a>
      <a href="holiday_list.php" class="w3-bar-item w3-button"> Holiday List</a>
      <a href="about_us.php" class="w3-bar-item w3-button"> About Us</a>
      <a href="#contact" class="w3-bar-item w3-button"> Contact Us</a>
</nav>
<script src="js/script.js"></script>
</body>
</html>


