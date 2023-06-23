<html>
<body>

    <?php
    require('session.php');
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
else{
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM auth WHERE uname='$uname' AND pass='$pass'";
$result = $db->query($sql);

    if ( $result->num_rows > 0){
        $_SESSION['name']  = $uname;
       
        echo"<script>alert('logged in')</script>";
    header("refresh:2;url=index.php");
}
else {
    echo"<script>alert('failed try again')</script>";
header("refresh:2;url=login.html");
}
}



?>



</body>
</html>