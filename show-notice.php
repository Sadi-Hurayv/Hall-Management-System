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
	<title>Notice</title>
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

						<h2 class="page-title">Notices</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Here are all the notices that had been published!!!</div>
									<div class="panel-body">

                    <?php

                      $notice_query="SELECT * FROM notices ORDER BY id DESC";
                      $data=mysqli_query($mysqli, $notice_query);
                      while ($row = $data->fetch_object())
                      {
                    ?>
                        <div class="panel panel-primary">
                          <div class="panel-heading text-light"><?php echo $row->title; ?></div>
                          <div class="panel-body">
                            <div class="stat-panel">
                              <?php echo $row->details; ?>
                            </div>
                          </div>
                          <div class="panel-footer">
                            <?php echo "Published: " .$row->postingDate; ?>
                          </div>
                        </div>
                    <?php
                      }

                    ?>

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

		<?php include("includes/footer.php");?>
  </body>
</html>s
