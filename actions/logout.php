<?php
// logout basico dms

session_start();
session_unset();
session_destroy();

header("Location: ../index.html");
exit();

?>