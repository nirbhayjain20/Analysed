<?php
 session_start(); 

 if (isset($_SESSION['info'])){

 extract($_SESSION['info']); // Function to extract array.
 $db = mysqli_connect('localhost', 'root', '', 'virtualanalyse');
 
 $query = mysqli_query($db,"insert into recruiters (firstname,lastname,email,number,password,password1,address,companyname,designation,offemail,industry,offaddress) values('$firstname','$lastname','$email','$number','$password','$password1','$address','$companyname','$designation','$offemail','$industry','$offaddress')");
if ($query)
{
	unset($_SESSION['info']);
	echo'data has been saved successfully';
	header('location:Recruiter login.php');
}
else
{
	echo mysqli_error($query);
}
	}
 
 ?>