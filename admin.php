<?php

if(isset($_COOKIE['user']))
{
	echo '<h2><div class="alert alert-primary" role="alert">Welcome, '.$_COOKIE['user'].'</div></h2>'	;
}
else
{
	header('Location: index.php?page=login');
}
	include('connection.php');

	$data= mysqli_query($con, "SELECT id,date_added,names_from,email_from FROM problems WHERE status='pending'");
	if(mysqli_num_rows($data)!=0)
	{
		echo '<h3><div class="alert alert-danger">There are problems to be examined!</div></h3>';
		Print '<table class="table table-striped">
				<tr>
					<th>Names</th>
					<th>Email</th>
					<th>Date</th>
					<th>Option</th>
				</tr>';
		while ($row = $data->fetch_assoc())
		{
			Print '<tr><td>';
			Print $row['names_from'];
			Print '</td><td><a href="mailto:';
			Print $row['email_from'];
			Print '">';
			Print $row['email_from'];
			Print '</a></td><td>';
			Print $row['date_added'];
			Print '</td><td>';
			Print '<a class="btn btn-outline-primary btn-sm" href=?page=fullproblem&id='.$row['id'].'>Show comment</a> 
				   <a class="btn btn-outline-primary btn-sm" href=?page=resolveproblem&id='.$row['id'].'>Resolve</a></td></tr>';
		}
	}
	else
	{
		echo '<h3><div class="alert alert-success alert-dismissible">There are no problems reported!</div></h3>';
	}
?>