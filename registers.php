<?php
 session_start();

 include 'config.php';

 if (isset($_POST['register']))
 {
 	
 	$name = mysqli_real_escape_string($con, $_POST['nam']);
 	$pass = mysqli_real_escape_string($con, $_POST['pas']);
 	
 	$id = mysqli_real_escape_string($con, $_POST['id']);

 	 $query = "INSERT INTO user VALUES('','$name', '$pass','$id')";

	mysqli_query($con, $query);
	# or $con->query($query);
	header('location: home.php');
 }
?>

<!DOCTYPE HTML>
<html>
<html>
    <style>
         body {
            
            background: url("red.jpg") no-repeat center center fixed;
            background-size: cover;

        }
        title
        {
        	color: white;
        }
</style>
	<head>
		 <title>Create New User</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet" type="text/css" />
            <link rel="icon" type="image/png" href="images/icons/faviconn.ico"/>
    </head>
     <body>
        <div class="container">
            <div class="col-lg-offset-3 col-lg-6">
                <h1 class="text-center">
                    <i class="fa fa-user"></i> Create New User
                </h1>
                <form method="POST" class="form-horizontal well">

				


					 <div class="form-group">
                        
                        <div class="col-lg-12">
							<input name="nam" placeholder="username"type="text"
								class="form-control" required />
						</div>
					</div>




					




 <div class="form-group">
                        
                        <div class="col-lg-12">
						
							<input name="pas" placeholder="Password"type="password"
								class="form-control" required />
						</div>
					</div>
<div class="w3-row-padding">
  <div class="w3-half">


		<select class="form-control"  name="id" id="id"required>    
 <option value="">Role</option>
 	 <option value="1">Admin</option>
     <option value="0">User</option>  
    
      </select>

 </div>

 </div>


<br>



					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button name="register"
								class="btn btn-basic btn-lg">
								Register
							</button>
							
							<a  class="btn btn-basic btn-lg" href="home.php">back to home</a> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>