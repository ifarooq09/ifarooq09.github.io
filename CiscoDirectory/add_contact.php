<?php
include 'config.php';

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['nameSendDari']) 
&& isset($_POST['jobTitleSend']) && isset($_POST['jobTitleSendDari'])
&& isset($_POST['officeNameSend']) && isset($_POST['officeNameSendDari'])
&& isset($_POST['ciscoNumberSend'])) {
    
    $sql = "INSERT INTO searchperson (name_person_dari,name_person_en,office_person_dari,office_person_en,
            title_person_dari,title_person_en,cisco_number)
            VALUES ('$nameSendDari', '$nameSend', '$officeNameSendDari','$officeNameSend',
            '$jobTitleSendDari','$jobTitleSend','$ciscoNumberSend')";

    $result = mysqli_query($con,$sql);
}


?> 