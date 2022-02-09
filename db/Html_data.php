<?php
// Name of data defined
// $Name=$_POST['name'];
// $Email=$_POST['email'];
// $Contact=$_POST['contact'];

//Database connection
//#conn= new mysqli_connect('localhost'.'root','','asmt2nd');
 $conn= mysqli_connect('localhost','root','','asmt2nd');
 if($conn->connect_error){
     die('connection Failed :' .$conn->connect_error);
 }
 else{
    //  $stmt=$conn->prepare("insert into contact(name,email,contact) value(?,?,?)");
    //  $stmt->bind_param("sss",$Name,$Email,$Contact);
    //  $stmt->execute();
     //echo"Registration Successfully...";
    //  $stmt->close();
    //  $conn->close();
 }

?>