<div class="container">
    <div class="row d-flex justify-content-center">
<div class="col-8 mb-8">
    <h2 class="text-center">Login</h2>
    <form action="index.php?page=login" name="send_form" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
        </div>
        <input class="btn btn-outline-primary" type="submit" name="submit" value="Login" />

    </form>
</div>
        </div>
		<br>
</div>
<?php
include('connection.php');

function login($user,$pass)
{
	global $con;
	$result = mysqli_query($con,"SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");
	if(mysqli_num_rows($result) == 1)
	{
		if(!isset($_COOKIE['user']))
		{
		$cookie_name = "user";
		$cookie_value = $user;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}
		header("Location: index.php?page=admin");
		
	}
	else
	{
		echo '<div class="alert alert-danger text-center">Invalid credentials!</div>';
	}
}


if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	login($user,$pass);
}

?>
