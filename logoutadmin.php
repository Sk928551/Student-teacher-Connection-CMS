<?php
session_start();
?>
<?php
$_SESSION["umail"]=="";
session_unset();
session_destroy();
header('Location:index.php');
?>