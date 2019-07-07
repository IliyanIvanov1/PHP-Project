<?php
    $id=$_GET['id'];
    include('connection.php');
    $queryResult=mysqli_query($con,"UPDATE problems SET status='resolved' , date_resolved=NOW() WHERE id=".$id."");
    if($queryResult)
    {
      header('Location: index.php?page=admin');
    }
?>