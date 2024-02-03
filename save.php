<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname="sign1";

$con = mysqli_connect($server,$username,$password,$dbname);
/*if(!$con)
{
    echo"not connected";
}
else
{
    echo"connected";
}*/

// start


$email=$_POST['email'];
$password=$_POST['password'];

$sql  = "INSERT INTO `test1`(`email`, `password`) VALUES ('$email','$password')";

$result = mysqli_query($con,$sql);
if($result)
{
    echo"Your Form Is Successfully Submited";
}
else{
    echo"data not store";
}
?>