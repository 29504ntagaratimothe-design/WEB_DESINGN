<?php 
$Con=mysqli_connect("localhost","root","","studydb");
if(isset($_POST['save'])){

$firstName=mysqli_real_escape_string($Con,$_POST['fname']);
$lastName=mysqli_real_escape_string($Con,$_POST['sname']);
$address=mysqli_real_escape_string($Con,$_POST['adr']); 
$telephone=mysqli_real_escape_string($Con,$_POST['tel']);
$username=mysqli_real_escape_string($Con,$_POST['uname']);
$password=mysqli_real_escape_string($Con,$_POST['pword']);

$sql="INSERT INTO registration(first_name,last_name,address,telephone,username,password)
VALUES ('$firstName','$lastName','$address','$telephone','$username','$password')";


   
mysqli_query($Con,$sql);
echo $message="Saved to database successfully";
}


if(isset($_POST['login']))
    {
$usern=mysqli_real_escape_string($Con,$_POST['username']);
$pwrd=mysqli_real_escape_string($Con,$_POST['password']);
$sql="SELECT * FROM registration WHERE username='$usern' AND password='$pwrd' ";
$result=mysqli_query($Con,$sql);
if(mysqli_num_rows($result)==1)
    {
       
        header("Location: secondInterface.html");
     
    }
}
    













?>