
<?php
	if (isset($_REQUEST['no']))
	{
		include 'config.php';
		$query = "SELECT taskID, name,  status,date FROM task
			WHERE taskID=" . $_REQUEST['no'];
		$results = $con->query($query);

		if (mysqli_num_rows($results) > 0)
		{

			while ($row = mysqli_fetch_array($results))
			{
				$tid = $row['taskID'];
               $nam = $row['name'];
              
                  $sta = $row['status'];
                $dat = $row['date'];
               
             
			}

			if (isset($_POST['update']))
			{
				$name = mysqli_real_escape_string($con, $_POST['nam']);
			
				
				$status = mysqli_real_escape_string($con, $_POST['sta']);

			
			 	

				$query_update = "UPDATE task SET
				name='" . $name . "', 
					
					status='" . $status . "'
					WHERE taskID=" . $tid;

					
				mysqli_query($con, $query_update);
				header('location: admintasklist.php');
			}


			}
	}
?>

<!DOCTYPE HTML>
<html>
<style>
	 body {
            
            background: url("back.png") no-repeat center center fixed;
            background-size: cover;

        }
</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TaskID#<?php echo $tid; ?> Details</title>
		<link href="css/edit1.css"
            rel="stylesheet" type="text/css" />

            <link rel="icon" type="image/png" href="images/icons/faviconn.ico"/>
            <link rel="stylesheet" href="css/edit2.css">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">TaskID#<?php echo $tid; ?> Details</h1>
			<div class="col-lg-offset-3 col-lg-6">
			  <form method="POST" enctype="multipart/form-data" >






 	
 <div class="w3-row-padding">
  <div class="w3-half">
    <label>Status</label>

		<select class="form-control"  name="sta" id="sta" >    
 <option value="<?php echo $sta; ?>"><?php echo $sta; ?></option>
 	 <option value="Done">Done</option>
     <option value="Not Done">Not Done</option>  
    
      </select>

 </div>

 </div>

<div class="w3-row-padding">
  <div class="w3-half">
    <label>Task Name</label>
    <textarea rows="4" cols="55" name="nam" value='<?php echo $nam; ?>' required><?php echo $nam; ?></textarea>

</div>

  
						

 
</div>

<p align="center">

	

<br>
    
   <p align="center">
				
							<button name="update"
								class="btn btn-success">
								Update
							</button>
							<a href="admintasklist.php" class="btn btn-default">
								Back to View
							</a>
</p>

				
			</div>	
			<br>

								</div>
</div>
</p>
						</div>
					</div>
				</form>
			</div>

			
			<script type="text/javascript">
  function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
  }
</script>
		</div>
	</body>
</html>