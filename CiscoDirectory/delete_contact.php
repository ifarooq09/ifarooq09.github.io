<?php
include 'config.php';

if(isset($_POST['deleteSend'])){
    $unique=$_POST['deleteSend'];

    $sql="DELETE FROM `searchperson` where contact_id=$unique";
    $result=mysqli_query($con,$sql);


}


?>