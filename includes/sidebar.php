<nav class="ts-sidebar ts-primary">
	<ul class="ts-sidebar-menu">

		<li class="ts-label">Main</li>
		<?PHP if(isset($_SESSION['id']))
		{ ?>
			<li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
			<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
			<li><a href="personal-details.php"><i class="fa fa-file-o"></i>Personal Details</a></li>
			<li><a href="show-notice.php"><i class="fa fa-newspaper-o"></i>Notices</a></li>
			<li><a href="accusation.php"><i class="fa fa-warning"></i>Accusation Box</a></li>

			<?php } else { ?>

	<!--		<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li> -->
			<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
			<li><a href="admin"><i class="fa fa-user"></i> Administrator Login</a></li>
		<?php } ?>

	</ul>
</nav>
