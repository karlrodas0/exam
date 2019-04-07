<?php
session_start();
$conn = mysqli_connect("localhost","root","","exam");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM user WHERE name='" . $_POST["name"] . "' and pass = '". $_POST["pass"]."'");
	$row  = mysqli_fetch_array($result);
	
	$_SESSION["userID"] = $row['userID'];
	$_SESSION['id']=$row['id'];
	 $count=mysqli_num_rows($result);
if($count==1)
{
			if ($row['id']=="1")
			{ 

                               header ("location: home.php"); 
                             
			}
			else if ($row['id']=="0")
			{ 
                               $_SESSION['id']=$row['id'];

                               header ("location: homeu.php"); 
                               }
                               else if ($row['id']=="2")
			{ 
                               $_SESSION['id']=$row['id'];

                               header ("location: /home.php"); 
                               }
		}


}
if(!empty($_POST["logout"])) {
	$_SESSION["userID"] = "";
	session_destroy();
}
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Todo App Login</title>
<style>
#frmLogin { 
	padding: 100px 570px;
	background: #ffffff;
	color: #555;
	display: inline-block;
	border-radius: 4px; 
}
.field-group { 
	margin:15px 0px; 
}
.input-field {
	padding: 8px;width: 200px;
	border: #A3C3E7 1px solid;
	border-radius: 4px; 
}
.form-submit-button {
	background: #65C370;
	border: 0;
	padding: 8px 80px;
	border-radius: 4px;
	color: #FFF;
	text-transform: uppercase; 
}
.member-dashboard {
	padding: 40px;
	background: #D2EDD5;
	color: #555;
	border-radius: 4px;
	display: inline-block;
	text-align:center; 
}
.logout-button {
	color: #09F;
	text-decoration: none;
	background: none;
	border: none;
	padding: 0px;
	cursor: pointer;
}
.error-message {
	text-align:center;
	color:#FF0000;
}
.demo-content label{
	width:auto;
}
</style>
</head>
<body>
<div>

<div style="display:block;margin:0px auto;">
<?php if(empty($_SESSION["userID"])) { ?>
<form action="" method="post" id="frmLogin">
	<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	

 <img class="w3-image" src="task.png" alt="MCU Logo" width="200" height="200">

	<div class="field-group">
		<div><label for="login"></label></div>
		<div><input name="name" placeholder="Username" autocomplete="off" type="text" required class="input-field"></div>
	</div>
	<div class="field-group">
		<div><label for="password"></label></div>
		<div><input name="pass"  placeholder="Password" autocomplete="off" type="password" required class="input-field"> </div>
	</div>

	<div class="field-group">

		<div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
	</div>   


	<div class="field-group">

		<div>	
<div style="text-align: center">
    <a href="index.php" class="button large hpbottom">Home</a>
</div>

<div style="text-align: center">
    <a href="register.php" class="button large hpbottom">Register</a>
</div>


			
	</div>        
</form>
<?php 
} else { 
$result = mysqlI_query($conn,"SELECT * FROM user WHERE userID='" . $_SESSION["userID"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="frmLogout">
<div class="member-dashboard">Welcome <?php echo ucwords($row['name']); ?>, You have successfully logged in!<br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button">. <br>
<a href="home.php"> Back to home</a>.  </div>

</form>
</div>
</div>
<?php } ?>
</body></html>