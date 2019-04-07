<?php
include 'config.php';
if (isset($_POST['register']))
 {
  
 
  
  $name = mysqli_real_escape_string($con, $_POST['nam']);
  $suggestion = mysqli_real_escape_string($con, $_POST['sug']);

  $query = "INSERT INTO contact VALUES('','$name','$suggestion' ,NOW())";
  mysqli_query($con, $query);
  # or $con->query($query);
  header('location: home.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Todo App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/home.css">
<link rel="icon" type="image/png" href="images/icons/faviconn.ico"/>
<body>

    <style>

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button3:hover {
     background-color: #4CAF50;
    color: white;
}
</style>
</body>

<!-- Navbar (sit on top) -->
<div class="w3-top">

  <div class="w3-bar w3-white w3-wide w3-padding w3-card">

    <img src="task.png" alt="Smiley face" width="31" height="31"> 
    <a href="#home" class="w3-bar-item w3-button"><b></b> Todo App</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->

<header class="w3-display-container w3-content w3-wide" style="max-width:300px;" id="home">
    <br>
<br>
<br>
<br>
<a href="https://www.mcuhospital.org">
  <img class="w3-image" src="task.png" alt="MCU Logo" width="1500" height="800">
  </a>
  <div class="w3-display-middle w3-margin-top w3-center">
   
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    
  </div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php" 
 button class="button button3">Add Task Now</button>
  </a>



    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">


       
       

      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p><b>Todo App</b> provides a single, integrated mechanism for capturing, monitoring, and reporting on Task issues. This allows for multiple task and business benefits and make it easy to manage customer interactions. It's more less time on unnecessary manual record, making it paperless and freeing up valuable time for more important work by systematically capturing task and categorizing them correctly, a task recorder system allows for proper management of incidents leading to quicker process times.
    </p>
  </div>

  
<br>
<br>
<br>
<br>
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk if you have Concern and Suggestions</p>
    <form method="POST">


    

      <input class="w3-input w3-section w3-border" type="text" minlength="4" placeholder="Name"  name="nam" required>
     


      <input class="w3-input w3-section w3-border" type="text" minlength="10" placeholder="Concern and Suggestions"  name="sug" required>
     


     

      <button name="register" class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  <br>
  
<!-- End page content -->
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Created by Karl Rodas<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">   </a></p>
</footer>



</body>
</html>
