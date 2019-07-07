<?php
$id=$_GET['id'];
    include('connection.php');
    $queryResult=mysqli_query($con,"DELETE FROM contacts WHERE id=".$id."");
    if($queryResult)
    {
      header('Location: index.php?page=showcontacts');
    }
?>