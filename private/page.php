<?php 
require_once dirname(__FILE__).'/../framework/helpers.php';

require_once dirname(__FILE__).'/../framework/loggedin.php';

if(!empty($_REQUEST['id'])){
    
    $user = db_single("SELECT * FROM Pages WHERE ID='".$_REQUEST['id']."'");
};

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Dashboard Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 main">
                    <h1 class="page-header"><?php if(!empty($user)){ echo "Update user";}
                    else echo "New user"; ?></h1>

					<form class="form-signin" method="POST" action="pages.php">
						<input type="hidden" name="action" value="<?php if(empty($user)){ echo "insert";} else echo "update"; ?>">
						<input type="hidden" name="id" value="<?php if(!empty($user)){ echo $user->ID;}  ?>">

						<label for="title" class="sr-only">Title</label>
						<input type="title" id="title" name="title" value="<?php if(!empty($user)){ echo $user->title;}  ?>" class="form-control" placeholder="Title" required autofocus>
						
						<label for="content" class="sr-only">Contennt</label>
						<input type="content" id="content" name="content" value="<?php if(!empty($user)){ echo $user->content;}  ?>" class="form-control" placeholder="content" required>
						
						<label for="menu_label" class="sr-only">Menu label</label>
                        <input type="menu_label" id="menu_label" name="menu_label" value="<?php if(!empty($user)){ echo $user->menu_label;}  ?>" class="form-control" placeholder="menu_label">
                        
                        <label for="menu_order" class="sr-only">Menu order</label>
						<input type="menu_order" id="menu_order" name="menu_order" value="<?php if(!empty($user)){ echo $user->menu_order;}  ?>" class="form-control" placeholder="menu_order">
		
						
						<button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
					</form>
					
					<?php 
					if(!empty($user)){
					?>
					<form class="form-signin" method="POST" action="pages.php">
						<input type="hidden" name="action" value="delete">
						<input type="hidden" name="id" value="<?php if(!empty($user)){ echo $user->ID;}  ?>">
						<button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
					</form>
					<?php 
					}
					?>
					
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
