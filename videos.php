<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin.php' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];
?>
<?php include('fhead.php');  ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">

			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></a> </h3>
			<a href="addvideos.php"><button  href="" type="submit" class="btn btn-primary">Add Videos/pdf</button></a>
			<a href="managevideos.php"><button  href="" type="submit" class="btn btn-primary">Manage Videos/pdf</button></a>
			

			</div>
	</div>
	<?php include('allfoot.php');  ?>