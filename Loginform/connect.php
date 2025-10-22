<?php 
$servername="localhost";
$username="root";
$password="";
$database="loginform";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die(mysqli_connect_error($con));
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="INSERT INTO `login` (`name`, `email`) VALUES ('$name','$email')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "success";
    }
}

?>