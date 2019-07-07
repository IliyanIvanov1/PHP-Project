<?php
    include('connection.php');

    $data = mysqli_query($con,"SELECT * FROM contacts");

    echo "<h2>Contacts</h2>";
    echo "<table class='table table-striped'>";
    echo "<tr>
              <th width=200>First Name</th>
              <th width=200>Second Name</th>
              <th width=200>Last Name</th>
              <th width=200>Email</th>
              <th width=200>Phone Number</th>
              <th width=250>Options</th>
           </tr>";

    while($info = $data->fetch_assoc())
    {
        echo "<tr><td>".$info['first_name']."</td>";
        echo "<td>".$info['second_name']."</td>";
        echo "<td>".$info['last_name']."</td>";
        echo "<td><a href=mailto:".$info['email'].">".$info['email']."</a></td>";
        echo "<td>".$info['gsm']."</td>";
        echo "<td><a class='btn btn-outline-primary btn-sm' href=?page=editcontact&id=".$info['id']."&firstName=".$info['first_name']."&secondName=".$info['second_name']."&lastName=".$info['last_name']."&address=".$info['address']."&gsm=".$info['gsm']."&facNumber=".$info['faculty_number']."&idCardNumber=".$info['idcard_number']."&email=".$info['email']."&city=".$info['city']."&country=".$info['country']."&pin=".$info['pin']."&zipCode=".$info['zip_code'].">Edit</a> 
                  <a class='btn btn-outline-primary btn-sm' href=?page=deletecontact&id=".$info['id']." onclick='return confirm('Are you sure?')'>Remove</a> 
                  <a class='btn btn-outline-primary btn-sm' href=?page=fullinfo&id=".$info['id'].">Show more</a></td></tr>";
        
    }
    echo "</table>";
?>