<?php
    include 'config.php';

    if (isset($_GET['no']))
    {
        $tid = $_GET['no'];

        if ($query = $con->prepare("DELETE FROM task WHERE taskID = ?  AND status='Done' "  ))
            

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

            header("Location: tasklist.php");
        }
        else
        {
        header("Location: tasklist.php");
        }
?>
