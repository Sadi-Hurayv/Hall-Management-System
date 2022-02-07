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
	<title>Manage Notice</title>
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
						<h2 class="page-title">Manage Notices</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Notice Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sl No.</th>
											<th>Title</th>
											<th>Details</th>
											<th>Posting Date </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sl No.</th>
											<th>Title</th>
											<th>Details</th>
											<th>Posting Date</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
<?php
$aid=$_SESSION['id'];
$tmp_mng_notice_query="SELECT * FROM notices";
$mng_notice_query= $mysqli->prepare($tmp_mng_notice_query) ;
//$stmt->bind_param('i',$aid);
$mng_notice_query->execute() ;//ok
$data=$mng_notice_query->get_result();
$cnt=1;
while($row=$data->fetch_object())
	  {
	  	?>
										<tr>
											<td><?php echo $cnt;;?></td>
											<td><?php echo $row->title;?></td>
											<td><?php echo $row->details;?></td>
											<td><?php echo $row->postingDate;?></td>
											<td><a href="edit-notice.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
												<a href="delete-notice.php?del=<?php echo $row->id;?>" onclick="return confirm(" Do you want to delete");"><i class="fa fa-close"></i></a>
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
