<?php
session_start();
?>
<?php
$_SESSION["fidx"]=="";
session_unset();
session_destroy();
header('Location:index.php');
?>