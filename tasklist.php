<?php 
session_start();
$conn = mysqli_connect("localhost","root","","exam");
$result = mysqli_query($conn,"SELECT * FROM user WHERE userID='" . $_SESSION["userID"] . "'");
$row  = mysqli_fetch_array($result);


if($_SESSION['id'] != '1')
{
    // not logged in
    header('Location: login.php');
    exit();
}
    
    include 'config.php';
    $query = "SELECT * FROM task   ";

  
    $results = $con->query($query);

       if (isset($_POST['submit']))
 {
  $name = mysqli_real_escape_string($con, $_POST['nam']);
 
  $status = mysqli_real_escape_string($con, $_POST['sta']);
 $user = mysqli_real_escape_string($con, $_POST['use']);

    $query = "INSERT INTO task VALUES('','$name', 'Not Done','$user',NOW())";

  
  

  
  mysqli_query($con, $query);

  header('location: tasklist.php');
      }
   



?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "120";
?>
<!DOCTYPE html>
<html lang="en" >
<style>
table {
    border-collapse: collapse;
    border: 1px solid black;
} 

th,td {
    border: 1px solid black;
}


table.c {
    table-layout: auto;
    width: 100%;    


}
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: }
</style>

<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All User Todo List </title>
  <link rel="icon" type="image/png" href="images/icons/faviconn.ico"/>
   
       <link href="css/max.css"
            rel="stylesheet" />
            <link href="css/table.css"
            rel="stylesheet" />
            <script src="css/table.js"></script>
            <script src="css/tables.js"></script>
    

<body bgcolor="#b2ad7f ">

<div class="table-title">

</div>
</head>

<body>
<div style="text-align: center;">
   <body class="container">
    <h1>All User Todo List</h1>
    <form method="post" action="">
        <input type="text" name="nam"  value="" required>
        <input type="hidden" name= "use" value='<?php echo ucwords($row['name']); ?>'>
        <input type="submit" name="submit" value="Add to do list">
    </form> 
 
</div>


<div style="text-align: right">


   <a href="home.php"><button>Back to home</button></a>
  </div>
</div>











	
<table class="c" id="tblUsers"bgcolor="#a2b9bc ">
 
    <thead>
<tr>
<th align="center">#</th>
<th align="center">Task Date</th>
<th align="center">User</th>
<th align="center">Task Name</th>

<th align="center">Status</th>








<th></th>
<th></th>
</tr>
</thead>

                    <tbody class="table-hover">
                        <?php

                            while ($row = mysqli_fetch_array($results))
                            {

                        
                                $tid = $row['taskID'];
                                  $nam = $row['name'];
                                  
                                    $sta = $row['status'];
                                     $dat = $row['date'];
                                      $use = $row['user'];
                                
                             
                              
                           $formattedDate = date("m-d-y G:i ", strtotime($row["date"]));
                                 
                             
                                


                                echo 
            "<tr>


              <td align='center' >" . $tid ."</td>
              <td align='center' >" . $formattedDate . "</td>
                <td align='center' >" . $use . "</td>
               <td align='left' >" . $nam . "</td>
             
                <td align='center' >" . $sta ."</td>
                
                
            

   

                                    <td align='center'>
                                        <a class='btn btn-xs btn-info'  
                                            href='update.php?no=" . $tid . "'title=UPDATE>
                                            <img src='images/edit.png'  style='width:20px;height:20px;'></a>
</td>

   <td align='center'>
                                      <a onclick=\"return confirm('Are you sure?')\" href=\"delete.php?no=" . $tid ."\" title=REMOVE><img src='delete.png'  style='width:20px;height:20px;'></a>
</td>







        ";

                                    
                            }
                        ?>
                </tbody>
</table>
  

  
  

    <script  src="js/index.js"></script>


<script >
var old_count = 0;

setInterval(function(){    
    $.ajax({
        type : "POST",
        url : "file.php",
        success : function(data){
            if (data > old_count) {
                alert('new record on i_case');
                old_count = data;
            }
        }
    });
},1000);
</script>

</body>

</html>
    <script>
        $(document).ready(function(){
        $('#tblUsers').DataTable();});
        </script>
         
         <script>
        var cells = document.getElementById("tblUsers").getElementsByTagName("td");
for (var i = 0; i < cells.length; i++) {
    if (cells[i].innerHTML == "Done") {
        cells[i].style.backgroundColor = "#00FFFF";
    }
}
        </script>

               <script>
        var cells = document.getElementById("tblUsers").getElementsByTagName("td");
for (var i = 0; i < cells.length; i++) {
    if (cells[i].innerHTML == "Not Done") {
        cells[i].style.backgroundColor = "gray";
    }
}
        </script>

        