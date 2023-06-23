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
    header("refresh:2;url=login.html");
}
else if (empty($uname)) {

    echo '<script>alert("username is required")</script>';
    header("refresh:2;url=login.html");

}else if(empty($pass)){

    echo '<script>alert("password is required")</script>';
    header("refresh:2;url=login.html");
}



$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM cred WHERE email='$uname' AND pass='$pass'";
$result = $db->query($sql);
if ($result){
    if ( $result->num_rows > 0){
    echo"success";
}
else 
echo"failed";
}
else
echo"failed";

header("refresh:2;url=login.html");
?>



</body>
</html>