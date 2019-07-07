<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style1.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>
    <!-- Header div -->
    <div id="header" class="header">
        <?php
				include_once('leftMenu.php'); // File containing header code
			?>
    </div>
    <!-- Content div -->
    <div class="content">
        <?php
				if (isset($_GET['page'])){
					$page = $_GET['page']; // To get the page
					if($page == null) {
						$page = 'index'; // Set page to index, if not set
						}switch ($page) {
							case 'home':
								include_once('frontPage.php');
								break;
							case 'admin':
							if(isset($_COOKIE['user'])){
								include_once('admin.php');
							}else{
								include_once('404NotFound.php');
							}break;
							case 'contact':
								include_once('contact.php');
								break;
							case 'login':
								include_once('login.php');
								break;
							case 'admin':
								include_once('admin.php');
								break;
							case 'logout':
								include_once('logout.php');
								break;
							case 'addemployee':
								if(isset($_COOKIE['user'])){
									include_once('addemployee.php');
								}else{
									header('Location: index.php?page=login');
								}break;
							case 'showcontacts':
								if(isset($_COOKIE['user'])){
									include_once('showcontacts.php');
								}else{
									include_once('404NotFound.php');
								}break;
							case 'editcontact':
								if(isset($_COOKIE['user'])){
									include_once('editcontact.php');
								}else{
									include_once('404NotFound.php');
								}break;
							case 'deletecontact':
								if(isset($_COOKIE['user'])){
									include_once('deletecontact.php');
								}else{
									include_once('404NotFound.php');
								}break;
							case 'fullinfo':
								if(isset($_COOKIE['user'])){
									include_once('fullinfo.php');
								}else{
									include_once('404NotFound.php');
								}break;
							case 'fullproblem':
								if(isset($_COOKIE['user'])){
									include_once('fullproblem.php');
								}else{
									include_once('404NotFound.php');
								}break;
							case 'resolveproblem':
								if(isset($_COOKIE['user'])){
									include_once('resolveproblem.php');
								}else{
									include_once('404NotFound.php');
								}break;
							default:
							include_once('404NotFound.php');
							break;
						}
					}else{
						include_once('index.php');
					}
				?>
        <div>
    <?php
				include_once('footer.php');
			?>
</div>
    </div>
</body>
</html>