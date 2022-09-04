
<?php
$uname=$_POST['uname'];
$number= $_POST['number'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$dob2 = date_parse($dob);
$year = $dob2["year"];
$age = (date('Y') - $year);
$con =new  mysqli('localhost','root','','phoecare');
if($con->connect_error){
  die('connection failed:'.$con->connect_error);
}else{
  echo "connected";
   $sql =$con->prepare("INSERT into patient(Name,Age,Contact_Number,Email_ID) 
      VALUES (?,?,?,?)");
      $sql->bind_param("siss",$uname,$age,$number,$email);
      $sql->execute();
      echo "insered";
}



?>