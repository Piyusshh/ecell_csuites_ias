<?php

session_start();


if(isset($_POST['submit_row']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "iasdb";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
 $name=$_POST['name'];
 $age=$_POST['age'];
 $job=$_POST['job'];
 $startidea = $_POST['startidea'];
 $startdesc = $_POST['startdesc'];
 $leaderid = $_POST['leaderid'];
 $leaderrollno = $_POST['leaderrollno'];
 for($i=0;$i<count($name);$i++)
 {
  if($name[$i]!="" && $age[$i]!="" && $job[$i]!="")
  {
    echo $name[$i];
    echo $age[$i];
    echo $job[$i];
    $_SESSION['leader_email'] = $job[0];
   $sql = "INSERT INTO employee_table (name, age, job, startidea, startdesc, leaderid, leaderrollno) VALUES ('$name[$i]', '$age[$i]', '$job[$i]','$startidea', '$startdesc', '$leaderid', '$leaderrollno' )";   
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php?name='.$name[0]);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  }
 }
 
}
?>