
<?php 

  session_start();
$conn = mysqli_connect("localhost","root","","exam");
$result = mysqlI_query($conn,"SELECT * FROM user WHERE userID='" . $_SESSION["userID"] . "'");
$row  = mysqli_fetch_array($result);

if($_SESSION['id'] != '0')
{
    // not logged in
    header('Location: login.php');
    exit();
}


 include 'config.php';
 
 
 
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "120";
?>

<!DOCTYPE html>
<html>
<head>
<title>Todo App</title>
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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
    <form method="POST">
     <div class="w3-container">
   

  <div class="w3-dropdown-hover">
    <button class="w3-button w3-light-grey">Tasks</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">

     
      
        <a href="tasklistuser.php"  class="w3-bar-item w3-button"> Add New Task</a>
     
      
      
    </div>
  </div>



<div class="w3-dropdown-hover">
    <button class="w3-button w3-light-grey"><?php echo ucwords($row['name']); ?></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="changepass.php"  class="w3-bar-item w3-button">Change Pass</a>

     

      
    </div>
  </div>

   <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>


    

 


       <input type="hidden" name= "dep" value='<?php echo ucwords($row['name']); ?>'>


       


     

    


      
    </div>
  </div>
</div>
</form>
  </div>

<!-- Header -->

<header class="w3-display-container w3-content w3-wide" style="max-width:300px;" id="home">
    <br>
<br>
<br>
<br>
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Welcome <b><?php echo ucwords($row['name']); ?></b></h3>
  
<br>
<br>

  <img class="w3-image" src="task.png" alt="MCU Logo" width="1500" height="800">
 
  <div class="w3-display-middle w3-margin-top w3-center">
   
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    
  </div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="addtask.php" 
 button class="button button3">Add New Task</button>
  </a>



    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">


       
       

      </div>
    </div>
   

  <div class="w3-row-padding w3-grayscale">
  
    
    </div>
  </div>


<br>
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
  
  
<!-- End page content -->
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Created by Karl Rodas<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">   </a></p>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>
