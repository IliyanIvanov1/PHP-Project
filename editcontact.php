<?php
    $count=count($_GET);
    if($count>1)
    {
    $id=$_GET['id'];
    $firstName=$_GET['firstName'];
    $secondName=$_GET['secondName'];
    $lastName=$_GET['lastName'];
    $address=$_GET['address'];
    $gsm=$_GET['gsm'];
    $facNumber=$_GET['facNumber'];
    $idCardNumber=$_GET['idCardNumber'];
    $email=$_GET['email'];
    $city=$_GET['city'];
    $country=$_GET['country'];
    $pin=$_GET['pin'];
    $zipCode=$_GET['zipCode'];
    }

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $firstName=$_POST['firstName'];
        $secondName=$_POST['secondName'];
        $lastName=$_POST['lastName'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $zipCode=$_POST['zipCode'];
        $facNumber=$_POST['facNumber'];
        $idCardNumber=$_POST['idCardNumber'];
        $email=$_POST['email'];
        $pin=$_POST['pin'];
        $gsm=$_POST['gsm'];
    }

    Print '<h2>Edit Contact</h2>
     <p> <form action="index.php?page=editcontact" method=POST>
    <table class="table table-striped">
    <tr><td>First name:</td><td><input type="text" value="';
    Print $firstName;
    print '" name="firstName" /></td></tr>

    <tr><td>Second name:</td><td><input type="text" value="';
    Print $secondName;
    print '" name="secondName" /></td></tr>

    <tr><td>Last name:</td><td><input type="text" value="';
    Print $lastName;
    print '" name="lastName" /></td></tr>

    <tr><td>Address:</td><td><input type="text" value="';
    Print $address;
    print '" name="address" /></td></tr>

    <tr><td>Phone number:</td><td><input type="text" value="';
    Print $gsm;
    print '" name="gsm" /></td></tr>

    <tr><td>Faculty number:</td><td><input type="text" value="';
    Print $facNumber;
    print '" name="facNumber" /></td></tr>

    <tr><td>ID Card number:</td><td><input type="text" value="';
    Print $idCardNumber;
    print '" name="idCardNumber" /></td></tr>

    <tr><td>Email:</td><td><input type="text" value="';
    Print $email;
    print '" name="email" /></td></tr>

    <tr><td>City:</td><td><input type="text" value="';
    Print $city;
    print '" name="city" /></td></tr>

    <tr><td>Country:</td><td><input type="text" value="';
    Print $country;
    print '" name="country" /></td></tr>

    <tr><td>PIN:</td><td><input type="text" value="';
    Print $pin;
    print '" name="pin" /></td></tr>

    <tr><td>ZIP Code:</td><td><input type="text" value="';
    Print $zipCode;
    print '" name="zipCode" /></td></tr>

    <tr><td colspan="2" ><input class="btn btn-outline-primary" type="submit" name="submit" value="Edit contact" /></td></tr>
    <input type="hidden" name=id value=';
    Print $id;
    print '>
    </table>
    </form> <p>';

    if(empty($firstName) || empty($secondName) || empty($lastName) || empty($country) || empty($city) 
    || empty($address) || empty($zipCode) || empty($facNumber) || empty($idCardNumber) || empty($email) 
    || empty($pin) || empty($gsm))
    {
        echo '<div class="alert alert-danger">Please fill all the blank fields!</div>';
    }

    include('connection.php');

    if(isset($_POST['submit']))
    {
         $queryResult=mysqli_query($con,"UPDATE contacts    SET first_name='".$firstName."',second_name='".$secondName."',last_name='".$lastName."',     address='".$address."',gsm='".$gsm."',faculty_number='".$facNumber."',  idcard_number='".$idCardNumber."',email='".$email."',city='".$city."',country='".$country."',    pin='".$pin."',zip_code='".$zipCode."' WHERE id=".$id."");
         if($queryResult)
         {
             echo '<div class="alert alert-success alert-dismissible">Contact successfully updated!</div>';
         }
         else
         {
            echo '<div class="alert alert-danger">Updating contact failed</div>';
         }
    }
?>