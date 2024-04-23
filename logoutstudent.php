<?php
session_start();
?>

<?php
$_SESSION["sidx"] = ""; // corrected assignment
session_unset(); // unset all session variables
session_destroy(); // destroy the session
header('Location: index.php');
exit; // exit to prevent further execution
?>
