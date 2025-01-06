
<?php
include 'config.php';

extract($_POST);



if (isset($_POST['submit'])) {


$email = $_POST['email'];
$password = $_POST['psw'];

$checkqry = "SELECT * FROM clientsignup WHERE Email = '".$email."'";
$checkresult = mysqli_query($link , $checkqry);


if (mysqli_num_rows($checkresult)){
header('location:../signup.html');
}
else

$InsertQ = "INSERT INTO clientsignup( Email ,  Password , Date) values (  '$email' , '$password' , Now())";
$InsertResult = mysqli_query($link , $InsertQ);


session_start();
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

	
header('location:../page1.php');

}


if (isset($_POST['submit-login'])) {


$checkEmail = $_POST['email'];
$checkPassword = $_POST['psw'];



$check1 = "SELECT * FROM clientsignup WHERE Email = '".$checkEmail."' AND Password = '".$checkPassword."'";
$checkResult1 = mysqli_query($link , $check1);

if (!mysqli_num_rows($checkResult1)) {
header('location:../index.html');

}

else {
	while ($row = mysqli_fetch_assoc($checkResult1)) {
$Email = $row['Email'];
$Password = $row['Password'];
$Date = $row['Date'];
$ID = $row['ID'];

echo "$Email<br>";
echo "$Password";
echo "<br>$Date";
echo "<br>$ID";
}
}



}

 ?>

