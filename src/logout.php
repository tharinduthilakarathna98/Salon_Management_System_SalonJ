
<?php
session_start();
session_destroy();
header("Location: userlog.php");
?>