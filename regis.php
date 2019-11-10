<?php
$conn = mysqli_connect("localhost","root","asdfGhjkl@1419","credentials");
$username = $_POST['name'];
$Aadhar_No = $_POST['Aadhar_No'];
$Work =$_POST['Work'];
$Employee-id = $_POST['Employee-id'];
$District = $_POST['Dristrict'];
$State = $_POST['Password'];
$city=$_POST['city'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
if ($conn==false) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql =" INSERT INTO admin(Username,Aadhar_no,Passsword,Work,Employee_ID,State,District,City,Mobile_number) VALUES('$username',''$Aadhar_No','$password','$Work','$Employee-id','$State','$District','$city','$mobile_no')";
if(mysqli_query($conn,$sql))
{
echo "successfull"
}
else
{
	echo ("error: could not execute ". mysqli_error($conn);
};
?>
