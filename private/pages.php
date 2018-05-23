<!DOCTYPE html>
<?php require_once dirname(__FILE__).'/../framework/helpers.php'; 
$pages = db_select("SELECT * FROM Pages");
?>
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
        <?php require_once dirname(__FILE__).'/parts/header.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 main">
					<h1 class="page-header">Users</h1>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Title</th>
									<th>Content</th>
                                    <th>Menu label</th>
                                    <th>Menu order</th>
                                    <th>Autor</th>
								</tr>
							</thead>
							<tbody>
                                <!-- add PHP here -->
                                <?php
								foreach($pages as $page){
                                    echo "<tr>";
                                    echo "<td>".$page->title."</td>";
                                    echo "<td>".$page->content."</td>";
                                    echo "<td>".$page->menu_label."</td>";
                                    echo "<td>".$page->menu_order."</td>";
                                    echo "<td>".db_single("SELECT * FROM Users WHERE ID=".$page->user_id)->email."</td>";
                                    echo "</tr>";
                                }
                                ?>
								<!-- add PHP here -->
							</tbody>
						</table>
					</div>
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