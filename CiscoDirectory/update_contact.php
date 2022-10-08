<?php
include 'config.php';

if(isset($_POST['updateid'])){
    $user_id = $_POST['updateid'];

    $sql = "SELECT * FROM `searchperson` WHERE contact_id=$user_id";
    $result = mysqli_query($con,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }

    echo json_encode($response);
} else 
{
    $response['status'] = 200;
    $response['message'] = "Invalid or Data not found";
}


//update query

if(isset($_POST['hiddendata'])){
    $uniqueid = $_POST['hiddendata'];
    $updateName = $_POST['updateName'];
    $updateNameDari = $_POST['updateNameDari'];
    $updateJobTitle = $_POST['updateJobTitle'];
    $updateJobTitleDari = $_POST['updateJobTitleDari'];
    $updateOfficeName = $_POST['updateOfficeName'];
    $updateOfficeNameDari = $_POST['updateOfficeNameDari'];
    $updateCiscoNumber = $_POST['updateCiscoNumber'];

    $sql="UPDATE `searchperson` SET  name_person_en='$updateName', name_person_dari='$updateNameDari', title_person_en='$updateJobTitle', 
                title_person_dari='$updateJobTitleDari', office_person_en='$updateOfficeName', office_person_dari='$updateOfficeNameDari',
                cisco_number='$updateCiscoNumber' WHERE contact_id=$uniqueid";

                $result=mysqli_query($con, $sql);
                

}
?>