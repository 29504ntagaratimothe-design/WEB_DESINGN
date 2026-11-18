<?php 
$Con=mysqli_connect("localhost","root","","studydb");
if(isset($_POST['save'])){

$firstName=mysqli_real_escape_string($Con,$_POST['sname']);
$lastName=mysqli_real_escape_string($Con,$_POST['rnumber']);
$address=mysqli_real_escape_string($Con,$_POST['department']); 
$telephone=mysqli_real_escape_string($Con,$_POST['catOne']);
$username=mysqli_real_escape_string($Con,$_POST['catTwo']);
$password=mysqli_real_escape_string($Con,$_POST['fmarks']);

$sql="INSERT INTO smarks(sname,rnumber,department,catOne,catTwo,fmarks)
VALUES ('$firstName','$lastName','$address','$telephone','$username','$password')";


   
if(mysqli_query($Con,$sql)){
echo $message="Saved to database successfully";
}else{
    echo $message="Not Saved ";

}
}

if(isset($_POST['retrieve']))
{
    $sql="SELECT * FROM smarks";
    $result=mysqli_query($Con,$sql);
    $records="<table border='1'>";
    $records.="<tr><th>STUDENT_NAMES</th><th>ROLL_NUMBER</th><th>DEPARTMENT</th><th>CAT_ONE</th><th>CAT_TWO</th><th>FINALMARKS</th></tr>";
    while($row=mysqli_fetch_array($result)){
    $records.="<tr>";
    $records.="<td>".$row['sname']."</td>";
    $records.="<td>".$row['rnumber']."</td>";
    $records.="<td>".$row['department']."</td>";
    $records.="<td>".$row['catOne']."</td>";
    $records.="<td>".$row['catTwo']."</td>";
    $records.="<td>".$row['fmarks']."</td>";
    $records.="</tr>";
    


    }


    $records.="</table>";

    echo $records;
}
?>
 
