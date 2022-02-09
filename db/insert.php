<?php
include('Html_data.php');
$Name=$_POST['name'];
$Email=$_POST['email'];
$Contact=$_POST['contact'];
// message check
$msg="";
if($Name==''){
    $msg= "Name is required";
}
else if($Email==''){
    $msg="Email is required";
}
else if($Contact==''){
    $msg="Contact is required";
}
else {
      $query="INSERT INTO contact(name,email,contact)VALUES('$Name','$Email','$Contact')";

      if(mysqli_query($conn,$query)){
      $msg="Inserted";
}
else{
     $msg="Error occred".mysqli_error($conn);
}
}
header('Location:Html_form.php?msg='.$msg);

?>