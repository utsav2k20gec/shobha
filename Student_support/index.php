

<?php include("navigation.php") ?>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Student Support System</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Student Support System</span><br>
    <span class="w3-large">Stop wasting valuable time get data in one click.</span>
    <p><a href="#work" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get Now</a></p>
  </div> 
</header>


<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 style="color:#4d4dff;font-weight:bold" class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we have done for students!!</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col m4 w3-margin-bottom" >
      <div class="w3-card">
        <img src="img/sm1.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Study Materials</h3>
          <p style="text-align:justify;min-height:150px">In this module study material is there for students. It will help the students to find all the data related to study and also they can download the study material in pdf format for future reference. </p>
          <p><a href="study_material.php"><button class="myButton" > Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom" >
      <div class="w3-card">
        <img src="img/pyqp.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Previous Year Question Paper</h3>
          <p style="text-align:justify;min-height:150px">In this module all the previous year question papers are there so with the help of this module students can get the idea about their exam and also they can download the previous year question paper in pdf format for future reference.</p>
          <p><a href="pyqp.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/ass.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Assignment(IP)</h3>
          <p style="text-align:justify;min-height:150px">In this module all the assignments are there for students and students can refer that assignment for their purpose and also they can download the assignment in pdf format for future reference.</p>
          <p><a href="assignment_ip.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/ctt.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Class Time Table</h3>
          <p style="text-align:justify;min-height:150px">In this module daily class time table is there for students so students can get to know the class timings and also they can download the time table in pdf format for future reference.</p>
          <p><a href="class_tt.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/sy.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Syllabus</h3>
          <p style="text-align:justify;min-height:150px">In this module students can get to know about their syllabus and also they can download the syllabus for future reference.</p>
          <p><a href="syllabus.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/calendar.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Calendar of Events</h3>
          <p style="text-align:justify;min-height:150px">In this module students can get to know how many events are there and when and also they can download the calendar of events for future reference.</p>
          <p><a href="coe.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/hl.jpg" alt="loading....." style="width:100%;height:270px">
        <div class="w3-container">
          <h3 style="color:#4d4dff;font-weight:bold">Holiday List</h3>
          <p style="text-align:justify;min-height:150px">In this module students can get to know about college holiday and also they can download the holiday list for future reference.</p>
          <p><a href="holiday_list.php"><button class="myButton"> Know More <i class="fa fa-hand-o-right"></i> </button></a></p>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Contact Section -->
<?php include("contact_us.php") ?>

<!-- Footer -->
<?php include("footer.php") ?>
