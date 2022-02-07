<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add Courses</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content div-space">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Add Department</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Department</div>
									<div class="panel-body">
										<form method="post" action="add-course-bg-functionality.php" class="form-horizontal">

											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Department Code </label>
												<div class="col-sm-8">
													<input type="text" value="" name="dc" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Department Name (Short)</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="dns" id="cns" value="" required="required">
												</div>

											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Department Name(Full)</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="dnf" value="">
												</div>
											</div>

											<div class="col-sm-8 col-sm-offset-2">
												<input class="btn btn-primary" type="submit" name="submit" value="Add Department">
											</div>

										</form>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
	 </div>

 </div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	</script>
	<?php include("includes/footer.php");?>
</body>

</html>
