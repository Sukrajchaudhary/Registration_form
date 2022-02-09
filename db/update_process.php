<?php
include('Html_data.php');
$Name=$_POST['name'];
$Email=$_POST['email'];
$Contact=$_POST['contact'];
$id=$_POST['id'];
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
      $query="UPDATE contact SET name='$Name',Email='$Email',contact='$Contact' WHERE id='$id'";
      if(mysqli_query($conn,$query)){
      $msg="Updated";
}
else{
     $msg="Error occred".mysqli_error($conn);
}
}
header('Location:Html_form.php?msg='.$msg);

?>