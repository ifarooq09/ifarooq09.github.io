<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']))
{ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title> Ministry of Agriculture, Irrigation and Livestock</title>
        <!-- Bootstrape CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript"></script>
</head>
<body style="background: url('img/background_img.jpg') no-repeat; background-size: 100%;">
    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="completeName" class="form-label">Name</label>
                <input type="text" class="form-control" id="completeName" required="required">
            </div>
            <div class="mb-3">
                <label for="completeNameDari" class="form-label">اسم</label>
                <input type="text" class="form-control" id="completeNameDari" required="required">
            </div>
            <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" required="required">
            </div>
            <div class="mb-3">
                <label for="jobTitleDari" class="form-label">وظیفه</label>
                <input type="text" class="form-control" id="jobTitleDari" required="required">
            </div>
            <div class="mb-3">
                <label for="officeName" class="form-label">Directorate / Deputy Ministry</label>
                <input type="text" class="form-control" id="officeName" required="required">
            </div>
            <div class="mb-3">
                <label for="officeNameDari" class="form-label">معینیت / ریاست</label>
                <input type="text" class="form-control" id="officeNameDari" required="required">
            </div>
            <div class="mb-3">
                <label for="ciscoNumber" class="form-label">Cisco Number</label>
                <input type="text" class="form-control" id="ciscoNumber" required="required">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btnsubmit" onclick="addcontact()">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="updateName" class="form-label">Name</label>
                <input type="text" class="form-control" id="updateName">
            </div>
            <div class="mb-3">
                <label for="updateNameDari" class="form-label">اسم</label>
                <input type="text" class="form-control" id="updateNameDari">
            </div>
            <div class="mb-3">
                <label for="updateJobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="updateJobTitle">
            </div>
            <div class="mb-3">
                <label for="updateJobTitleDari" class="form-label">وظیفه</label>
                <input type="text" class="form-control" id="updateJobTitleDari">
            </div>
            <div class="mb-3">
                <label for="updateOfficeName" class="form-label">Directorate / Deputy Ministry</label>
                <input type="text" class="form-control" id="updateOfficeName">
            </div>
            <div class="mb-3">
                <label for="updateOfficeNameDari" class="form-label">معینیت / ریاست</label>
                <input type="text" class="form-control" id="updateOfficeNameDari">
            </div>
            <div class="mb-3">
                <label for="updateCiscoNumber" class="form-label">Cisco Number</label>
                <input type="text" class="form-control" id="updateCiscoNumber">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="updateDetails()">Update</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input  type="hidden" id="hiddendata">
        </div>
    </div>
    </div>
    </div>
    <nav>
        <section class="nav-container">
            <aside class="logo"><img src="img/ministry_logo_2.png">Ministry of Agriculture, Irrigation and Livestock </br> </aside>
            <aside class="menu">
                <div class="menu-content">
                <a href="logout.php" class="btn btn-danger">LOGOUT</a>
        </section>
    </nav>
    <div class="container my-3">
        <div class="row">
            <div class="col-10">
                <!-- Search Bar -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success">
                        <i class="fa fa-search text-light" style="font-size:24px;"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="searchRecord" placeholder="Search Here .....">
                </div>
            </div>
            <div class="col-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#completeModal">
                Add New Contact</button>
            </div>
        </div>
        <div class="my-3" id="displayDataTable"></div>
    </div>
        <!-- BootStrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
           displayData();

           $(document).on('click','.page-item', function()
           {
            var page = $(this).attr("id");
            displayData(page);
           });

           searchRecord();
            
        });
        //Display Function
        function displayData(page)
        {
            //var displayData = "true";

            $.ajax({
                url: "display_admin.php",
                type: 'post',
                data: {
                    displaySend:page
                },
                success:function(data,status){
                    $('#displayDataTable').html(data);
                }
            });
        }
        
        function addcontact()
        {
            var nameAdd=$('#completeName').val();
            var nameAddDari=$('#completeNameDari').val();
            var jobTitleAdd=$('#jobTitle').val();
            var jobTitleAddDari=$('#jobTitleDari').val();
            var officeNameAdd=$('#officeName').val();
            var officeNameAddDari=$('#officeNameDari').val();
            var ciscoNumberAdd=$('#ciscoNumber').val();

            $.ajax({
                url: "add_contact.php",
                type: 'post',
                data:{
                    nameSend:nameAdd,
                    nameSendDari:nameAddDari,
                    jobTitleSend:jobTitleAdd,
                    jobTitleSendDari:jobTitleAddDari,
                    officeNameSend:officeNameAdd,
                    officeNameSendDari:officeNameAddDari,
                    ciscoNumberSend:ciscoNumberAdd
                },
                success:function(data,status){
                    //function to display data;
                    $('#completeModal').modal('hide');
                    $('#completeModal').on('hidden.bs.modal', function (e) {
                            $('#completeModal').find("input[type=text], textarea").val("");
                    });
                    displayData();
                                       
                }
            });
        }

        //Delete User Function
        function deleteUser(deleteid){
            $.ajax({
                url: "delete_contact.php",
                type: 'post',
                data:{
                    deleteSend:deleteid
               },
               success:function(data,status){
                displayData();
               }
            });
        }

        //Get User Details Function
        function getDetails(updateid){
            $('#hiddendata').val(updateid);

            $.post("update_contact.php", {updateid:updateid}, function (data, status){
                var userid=JSON.parse(data); 
                $('#updateName').val(userid.name_person_en);
                $('#updateNameDari').val(userid.name_person_dari);
                $('#updateJobTitle').val(userid.title_person_en);
                $('#updateJobTitleDari').val(userid.title_person_dari);
                $('#updateOfficeName').val(userid.office_person_en);
                $('#updateOfficeNameDari').val(userid.office_person_dari);
                $('#updateCiscoNumber').val(userid.cisco_number);
            });

            $('#updateModal').modal("show");
        }

        //Update Details Function
        function updateDetails(){
            var updateName=$('#updateName').val();
            var updateNameDari=$('#updateNameDari').val();
            var updateJobTitle=$('#updateJobTitle').val();
            var updateJobTitleDari=$('#updateJobTitleDari').val();
            var updateOfficeName=$('#updateOfficeName').val();
            var updateOfficeNameDari=$('#updateOfficeNameDari').val();
            var updateCiscoNumber=$('#updateCiscoNumber').val();
            var hiddendata=$('#hiddendata').val();

            $.post("update_contact.php", {
                updateName:updateName,
                updateNameDari:updateNameDari,
                updateJobTitle:updateJobTitle,
                updateJobTitleDari:updateJobTitleDari,
                updateOfficeName:updateOfficeName,
                updateOfficeNameDari:updateOfficeNameDari,
                updateCiscoNumber:updateCiscoNumber,
                hiddendata:hiddendata
            }, function (data,status){
                $('#updateModal').modal('hide');
                displayData();
                
            });
        }

        //Get Search Record Function
        function searchRecord()
        {

            $("#searchRecord").keyup(function()
			{
				var input = $(this).val();
				//alert(input);			
				
				if(input != "")
				{
					$.ajax(
					{
						url:"search_record.php",
						method:"POST",
						data:{input:input},
						
						success:function(data)
						{
							$("#displayDataTable").html(data);
                            $("#displayDataTable").css("display", "block");
						}
					});
				}else
				{
					//$("#displayDataTable").css("display", "none");
                    displayData();
					
				}
				
			});
        }
    </script>
</body>
</html>
<?php
} else {
    header("Location: login.php");
}
?>