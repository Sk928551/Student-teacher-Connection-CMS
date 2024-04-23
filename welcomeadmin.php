<?php
session_start();

if ( $_SESSION[ "umail" ] == "" || $_SESSION[ "umail" ] == NULL ) {
	header( 'Location:adminLogin.php' );
}
$userid = $_SESSION[ "umail" ];
?>
<!DOCTYPE  HTML>
<?php include('adminhead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome <a href="welcomeadmin.php">Admin</a></h3>
			
			<a href="studentdetails.php"><button  href="studentdetails.php" type="submit" class="btn btn-primary">Student Details</button></a>

			<a href="facultydetails.php"><button  href="facultydetails.php" type="submit" class="btn btn-primary">Faculty Details</button></a>

			<a href="guestdetails.php"><button  href="guestdetails.php" type="submit" class="btn btn-primary">Guest Details</button></a>

			<a href="logoutadmin.php"><button  href="logoutadmin.php" type="submit" class="btn btn-danger">Logout</button></a>

		</div>
	</div>
	<?php include('allfoot.php'); ?>