<script type="text/javascript">
    function forbidSpaces(inputName)
    {
                document.getElementById(inputName).onkeydown = function (event) {
          var event = event || window.event;  // get event object
          var key = event.keyCode || event.which; // get key cross-browser
                
          if (key == 32) { //Space bar key code
            //Prevent default action, which is inserting space
            if (event.preventDefault) event.preventDefault(); //normal browsers
            event.returnValue = false; //IE
          }
        };
    }

</script>

<h2>Adding Contact</h2>
<form action="index.php?page=addemployee" name="addEmployee" method="POST">
<table class="table table-striped">
<tr><td>First name:</td>
<td><input type="text" name="firstName" id="firstName"/></td></tr>
<script>forbidSpaces('firstName')</script>
<tr><td>Second name:
<td><input type="text" name="secondName" id="secondName"  /></td></tr>
<script>forbidSpaces('secondName')</script>
<tr><td>Last name:
<td><input type="text" name="lastName" id="lastName"  /></td></tr>
<script>forbidSpaces('lastName')</script>
<tr><td>Country:
<td><input type="text" name="country" id="country"  /></td></tr>
<script>forbidSpaces('country')</script>
<tr><td>City:
<td><input type="text" name="city" id="city"  /></td></tr>
<script>forbidSpaces('city')</script>
<tr><td>Address:
<td><input type="text" name="address" id="address"  /></td></tr>
<script>forbidSpaces('address')</script>
<tr><td>ZIP code:
<td><input type="text" name="zipCode" id="zipCode"  /></td></tr>
<script>forbidSpaces('zipCode')</script>
<tr><td>Faculty number:
<td><input type="text" name="facNumber" id="facNumber"/></td></tr>
<script>forbidSpaces('facNumber')</script>
<tr><td>ID Card Number:
<td><input type="text" name="idCardNumber" id="idCardNumber"/></td></tr>
<script>forbidSpaces('idCardNumber')</script>
<tr><td>Email:
<td><input type="text" name="email" id="email" /></td></tr>
<script>forbidSpaces('email')</script>
<tr><td>PIN:
<td><input type="text" name="pin" id="pin"/></td></tr>
<script>forbidSpaces('pin')</script>
<tr><td>Phone number:
<td><input type="text" name="phoneNumber" id="phoneNumber"/></td></tr>
<script>forbidSpaces('phoneNumber')</script>

<tr><td colspan='2'><input class="btn btn-outline-primary" type="submit" name="submit" value="Add contact" /></td></tr>
</table>
</form>


<?php
$firstName='';
$secondName='';
$lastName='';
$country='';
$city='';
$address='';
$zipCode='';
$facNumber='';
$idCardNumber='';
$email='';
$pin='';
$phoneNumber='';

function checkIfEmployeeExists($pin)
{
    include('connection.php');

    $result = mysqli_query($con,"SELECT pin FROM contacts");

    if(mysqli_num_rows($result)!=0)
    {
        while ($row = $result->fetch_assoc())
        {
            if($pin===$row['pin'])
            return true;
        }
        return false;
    }
    else
    {
        return false;
    }
}

if(isset($_POST['submit']))
{
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
    $phoneNumber=$_POST['phoneNumber'];

    if(empty($firstName) || empty($secondName) || empty($lastName) || empty($country) || empty($city) 
    || empty($address) || empty($zipCode) || empty($facNumber) || empty($idCardNumber) || empty($email) 
    || empty($pin) || empty($phoneNumber))
    {
        echo "<script type='text/javascript'>alert('Please fill all the blank fields!')</script>";
    }
    else
    {
        $empExists=checkIfEmployeeExists($pin);
        if($empExists)
        {
           echo 'Employee with such pin already exists';
        }
        else
        {
            
            include('connection.php');
            $queryResult=mysqli_query($con,"INSERT INTO contacts(first_name,second_name,last_name,address,gsm,faculty_number,idcard_number,email,city,country,pin,zip_code) 
                                            VALUES('".$firstName."','".$secondName."','".$lastName."','".$address."','".$phoneNumber."','".$facNumber."','".$idCardNumber."','".$email."','".$city."','".$country."','".$pin."','".$zipCode."')") ;

            if($queryResult)
            {
                echo '<div class="alert alert-success alert-dismissible">Contact successfully added!</div>';
            }
            else
            {
                echo '<div class="alert alert-danger">Adding contact failed!</div>';
            }
        }
    }
}

