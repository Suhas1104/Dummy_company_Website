<html>
<body>

    <?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";
$uname=$_POST["username"];
$pass=$_POST["password"];
 if (empty($uname)&&empty($pass)){
    echo '<script>alert("password and username is required")</script>';
    header("refresh:2;url=signup.html");
}
else if (empty($uname)) {

    echo '<script>alert("username is required")</script>';
    header("refresh:2;url=signup.html");

}else if(empty($pass)){

    echo '<script>alert("password is required")</script>';
    header("refresh:2;url=signup.html");
}
else{
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT into auth VALUES('$uname','$pass')";
$result = $db->query($sql);
   if($result)
   {
    echo '<script>alert("account created!\nPlease login")</script>';
    header("refresh:2;url=login.html");
   }
   else{
    echo '<script>alert("error! please try again")</script>';
   }
}

?>



</body>
</html>