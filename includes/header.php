
<?php if ($_SESSION['id']) {
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$gender=$_SESSION['gender'];
	?>
	<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hall Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<?php if ($gender=='male'){ ?>
					<a href="#"><img src="img/male-profile.png" class="ts-avatar hidden-side" alt=""> <?php echo $fname. " ".$lname; ?> <i class="fa fa-angle-down hidden-side"></i></a>
				<?php }else{ ?>
					<a href="#"><img src="img/female-profile.png" class="ts-avatar hidden-side" alt=""> <?php echo $fname. " ".$lname; ?> <i class="fa fa-angle-down hidden-side"></i></a>
				<?php } ?>

				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hall Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>

	</div>
	<?php } ?>
