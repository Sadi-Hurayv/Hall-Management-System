<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
 ?>

 <?php

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
 	<title>Student Hall Registration</title>
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
 <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
 <!--<script>
    $('#submitAccusition').click(function(){
      $.ajax({
        type: "POST",
        url: "post_accusation.php",
        data: {
          description: $("#accu_des").val()
        },
        success: function(msg){
          alert(msg);
        }
      });
    });
 </script>-->

</head>

<body>
  <?php include('includes/header.php');?>
  <div class="ts-main-content div-space">
  	<?php include('includes/sidebar.php');?>
  	<div class="content-wrapper">
  		<div class="container-fluid">
        <div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Accusation Box</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-danger">
									<div class="panel-heading">Fill all the accusation you have!!!</div>
									<div class="panel-body">
                    <form method="post" action="accusation-bg-functionality.php" class="form-horizontal">

											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Title </label>
												<div class="col-sm-8">
													<input type="text" value="" name="title" class="form-control" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Details</label>
												<div class="col-sm-8">
                          <textarea class="form-control" name="details" id="details" value="" required="required" rows="6"></textarea>
                        </div>
											</div>

                      <div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-8">
                          <input type="hidden" name="annonymous" value="0">
													<input type="checkbox" name="annonymous" value="1"> <label class="control-label">Annonymous</label>

												</div>
											</div>

											<div class="col-sm-8 col-sm-offset-2">
												<input class="btn btn-danger" type="submit" name="submit" value="Submit">
											</div>

										</form>

                <!--    <form class="" action="#" method="post">
                      <textarea class="" name="accu_des" id="accu_des" rows="8" cols="160" required="required"></textarea>
                      <br>
                      <button class="btn btn-primary" type="submit" name="submitAccusition" id="submitAccusition">Submit</button>
                    </form> -->

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
</html>
