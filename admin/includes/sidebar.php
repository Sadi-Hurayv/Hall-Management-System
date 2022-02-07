<nav class="ts-sidebar">
	<ul class="ts-sidebar-menu">

		<li class="ts-label">Main</li>
		<?PHP if(isset($_SESSION['id']))
		{ ?>

		<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="#"><i class="fa fa-files-o"></i> Department</a>
			<ul>
				<li><a href="add-courses.php">Add Department</a></li>
				<li><a href="manage-courses.php">Manage Department</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-home"></i> Rooms</a>
			<ul>
				<li><a href="create-room.php">Add a Room</a></li>
				<li><a href="manage-rooms.php">Manage Rooms</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-newspaper-o"></i> Notice</a>
			<ul>
				<li><a href="add-notice.php">Add a Notice</a></li>
				<li><a href="manage-notices.php">Manage Notice</a></li>
			</ul>
		</li>

		<li><a href="registration.php"><i class="fa fa-user"></i>Student Registration</a></li>
		<li><a href="manage-students.php"><i class="fa fa-users"></i>Manage Students</a></li>
		<li><a href="show-accusition.php"><i class="fa fa-warning"></i>Accusation Box</a></li>

		<?php } else { ?>

			<li><a href="../index.php"><i class="fa fa-users"></i> User Login</a></li>
			<li><a href="index.php"><i class="fa fa-user"></i> Administrator Login</a></li>
		<?php } ?>

</nav>
