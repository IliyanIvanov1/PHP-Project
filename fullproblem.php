<?php
    include("connection.php");
    $id=$_GET['id'];

    $data = mysqli_query($con,"SELECT date_added,names_from,email_from,comment FROM problems WHERE id=".$id."");
    $problem = $data->fetch_assoc();

    Print '<table class="table table-striped"';
    Print '<tr><th>Names:</th><td>';
    Print $problem['names_from'];
    Print '</td></tr>';

    Print '<tr><th>Email:</th><td><a href="mailto:';
    Print $problem['email_from'];
    Print '">';
    Print $problem['email_from'];
    Print '</a></td></tr>';

    Print '<tr><th>Date added:</th><td>';
    Print $problem['date_added'];
    Print '</td></tr>';

    Print '<tr><th>Comment:</th><td>';
    Print $problem['comment'];
    Print '</td></tr></table>';

    Print '<a class="btn btn-outline-primary" href=?page=admin>Go Back</a>';
?>