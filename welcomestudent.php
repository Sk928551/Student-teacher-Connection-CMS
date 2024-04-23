	<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin.php' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$sEno = $_SESSION[ "seno" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for student-->
			<h3> Welcome <?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>";?></h3>

			<a href="mydetailsstudent.php?myds=<?php echo $userid;  ?>"> <button type="submit" class="btn btn-secondary" title="My Details">My Details</button></a>
			
			<a href="takeassessment.php?seno=<?php echo $sEno; ?>"> <button href="takeassessment.php" type="submit" class="btn btn-primary" >Take Assessment</button></a>

			<a href="viewresult.php?seno=<?php echo $sEno;  ?>"> <button  href="viewresult.php" type="submit" class="btn btn-info">Result</button> </a>
			<a href="viewquery.php?eid=<?php echo $userid;  ?>"> <button  href="viewquery.php" type="submit" class="btn btn-primary">My Query</button> </a>

			<a href="askquery.php?eid=<?php echo $userid;  ?>"> <button  href="askquery.php" type="submit" class="btn btn-primary">Ask Query</button></a>
			
			<a href="viewvideos.php?eid=<?php echo $userid;  ?>"> <button  href="viewvideos.php" type="submit" class="btn btn-primary">Videos (E-Learn)</button></a>
			
			

			<a href="logoutstudent.php"><button  href="logoutstudent.php" type="submit" class="btn btn-danger">Logout</button></a>

		</div>

	</div>
	<?php include('allfoot.php'); ?>