<?php if ($_SESSION['id']) { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hall Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Administrator <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="admin-profile.php">My Account</a></li>
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
