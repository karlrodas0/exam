<?php
    include 'config.php';

    if (isset($_GET['no']))
    {
        $tid = $_GET['no'];

        if ($query = $con->prepare("DELETE FROM user WHERE userID = ? " ))
            

        {
            $query->bind_param("i",$tid);
            $query->execute();
            $query->close();
            
        }
        else
        {
            echo "Cannot Delete";
        }
            $con->close();

            header("Location: userslist.php");
        }
        else
        {
        header("Location: userslist.php");
        }
?>
