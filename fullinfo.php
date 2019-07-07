<?php
    include("connection.php");
    $id=$_GET['id'];

    $data = mysqli_query($con,"SELECT * FROM contacts WHERE id=".$id."");
    $contact = $data->fetch_assoc();
    
    Print '<h2>Contact Details</h2>
    <table class="table table-striped">
    <tr><td>First name:</td><td>';
    Print $contact['first_name'];
    print '</td></tr> 
    
    <tr><td>Second name:</td><td>';
    Print $contact['second_name'];
    print '</td></tr> 

    <tr><td>Last name:</td><td>';
    Print $contact['last_name'];
    print '</td></tr> 

    <tr><td>Address:</td><td>';
    Print $contact['address'];
    print '</td></tr> 

    <tr><td>Phone number:</td><td>';
    Print $contact['gsm'];
    print '</td></tr> 

    <tr><td>Faculty number:</td><td>';
    Print $contact['faculty_number'];
    print '</td></tr> 

    <tr><td>ID Card number:</td><td>';
    Print $contact['idcard_number'];
    print '</td></tr> 

    <tr><td>Email:</td><td>';
    Print $contact['email'];
    print '</td></tr> 

    <tr><td>City:</td><td>';
    Print $contact['city'];
    print '</td></tr> 

    <tr><td>Country:</td><td>';
    Print $contact['country'];
    print '</td></tr> 

    <tr><td>PIN:</td><td>';
    Print $contact['pin'];
    print '</td></tr> 

    <tr><td>ZIP Code:</td><td>';
    Print $contact['zip_code'];
    print '</td></tr> '
?>