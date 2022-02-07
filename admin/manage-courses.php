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
	<title>Manage Department</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content div-space">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper" style="margin-top:50px;>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage Department</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Courses Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sl No.</th>
											<th>Department Code</th>
											<th>Department Name(Short)</th>
											<th>Department Name(Full)</th>
											<th>Posting Date </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sl No.</th>
											<th>Department Code</th>
											<th>Department Name(Short)</th>
											<th>Department Name(Full)</th>
											<th>Posting Date</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
<?php
$aid=$_SESSION['id'];
$tmp_mng_dept_query="SELECT * FROM courses";
$mng_dept_query= $mysqli->prepare($tmp_mng_dept_query) ;
//$stmt->bind_param('i',$aid);
$mng_dept_query->execute() ;//ok
$data=$mng_dept_query->get_result();
$cnt=1;
while($row=$data->fetch_object())
	  {
	  	?>
										<tr>
											<td><?php echo $cnt;;?></td>
											<td><?php echo $row->course_code;?></td>
											<td><?php echo $row->course_sn;?></td>
											<td><?php echo $row->course_fn;?></td>
											<td><?php echo $row->posting_date;?></td>
											<td><a href="edit-course.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
												<a href="delete-course.php?del=<?php echo $row->id;?>" onclick="return confirm(" Do you want to delete");"><i class="fa fa-close"></i></a>
											</td>
										</tr>
										<?php
$cnt=$cnt+1;
									 } ?>


									</tbody>
								</table>


							</div>
						</div>


					</div>
				</div>



			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

 <?php include("includes/footer.php");?>
</body>

</html>
