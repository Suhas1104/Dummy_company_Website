<?php
require('session.php');
unset($_SESSION['name']);
echo"<script>alert('logged out')</script>";
header("refresh:2;url=index.php");

?>
