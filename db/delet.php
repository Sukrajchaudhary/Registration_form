<?php
 include('Html_data.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM contact where id='$id'";
    if(mysqli_query($conn,$query)){
        $msg="deleted";
    }else{
     $msg ="error:".mysqli_error($conn);   
    }
}else{
  $msg= "no action";
}
header('Location:view.php?msg='.$msg);
?>