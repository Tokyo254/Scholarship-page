<?php
//First Conncect to the database
$host = "localhost";
$dbname = "test1";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname) or die('Connection Failed'.mysqli_error($conn));


$firstName = $_POST['firstName'];
$secondName = $_POST['secondName'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$guardian = $_POST['guardian'];
$guardianEmail = $_POST['guardianEmail'];
$guardianPhoneNo = $_POST['guardianPhoneNo'];
$gender = $_POST['gender'];
$OtherGender= $_POST['OtherGender'];
$DOB = $_POST['DOB'];
$country = $_POST['country'];
$county = $_POST['county'];
$Sub_county = $_POST['Sub_county'];
$ward = $_POST['ward'];
$postalCode = $_POST['postalCode'];
$postalAdd = $_POST['postalAdd'];
$lvl_education = $_POST['lvl_education'];
$institution = $_POST['institution'];
$program = $_POST['program'];
$location = $_POST['location'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$file = $_POST['file'];
$file_essay = $_POST['file_essay'];
$Scholarship_type = $_POST['Scholarship_type'];
$sustainability = $_POST['sustainability'];
$sustainability2 = $_POST['sustainability2'];
$sustainability3 = $_POST['sustainability3'];
$sustainability4 = $_POST['sustainability4'];
$sustainability5 = $_POST['sustainability5'];
$sustainability6 = $_POST['sustainability6'];
$terms = $_POST['terms'];



$qry = "INSERT INTO `info`(`firstName`, `secondName`, `email`, `phoneNo`, `guardian`, `guardianEmail`,
 `guardianPhoneNo`, `gender`, `OtherGender`, `DOB`, `country`, `county`, `Sub-county`, `ward`, `postalCode`,
  `postalAdd`, `lvl_education`, `institution`, `program`, `location`, `startDate`, `endDate`, `file`,`file_essay`,
   `Scholarship_type`, `sustainability`, `sustainability2`, `sustainability3`, `sustainability4`, 
   `sustainability5`, `sustainability6`, `terms`)
 VALUES ('$firstName','$secondName','$email',' $phoneNo','$guardian','$guardianEmail','$guardianPhoneNo',
 '$gender','$OtherGender','$DOB','$country','$county','$Sub_county','$ward','$postalCode','$postalAdd',
 '$lvl_education','$institution','$program','$location','$startDate','$endDate','$file','$file_essay','$Scholarship_type',
 '$sustainability','$sustainability2','$sustainability3','$sustainability4','$sustainability5',
 '$sustainability6','$terms')";

 $insert = mysqli_query($conn,$qry);

 if( ! $insert){
    echo" Please fill the form  again , an error occurred";
 }
 else{
   header("Location: scholarship_success.html");
 };
