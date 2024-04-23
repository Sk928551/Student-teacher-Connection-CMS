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
			<!--Welcome page for faculty-->
			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></h3>
			</a> 
			<a href="mydetailsfaculty.php?myfid=<?php echo $userid ?>"><button  href="mydetailsfaculty.php" type="submit" class="btn btn-primary">My Details</button></a>
			<a href="viewstudentdetails.php"><button  href="viewstudentdetails.php" type="submit" class="btn btn-primary">Student Details</button></a>
			<a href="assessment.php"><button  href="assessment.php" type="submit" class="btn btn-primary">Assessment</button></a>
			<a href="examDetails.php"><button  href="examDetails.php" type="submit" class="btn btn-primary">Make Result</button></a>
			<a href="resultdetails.php"><button  href="resultdetails.php" type="submit" class="btn btn-primary">Edit Result</button></a>
			<a href="qureydetails.php"> <button  href="qureydetails.php" type="submit" class="btn btn-primary">Query</button>
			<a href="videos.php"> <button  href="videos.php" type="submit" class="btn btn-primary">Videos/Pdf</button>
			
		
			<a href="logoutfaculty.php">
    <button type="submit" class="btn btn-danger" style="margin-top: 12px;">Logout</button>
</a>
		</div>

	</div>
	<?php include('allfoot.php');  ?>