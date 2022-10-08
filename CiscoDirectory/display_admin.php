<?php
include 'login_db.php';
include 'config.php';

$record_per_page = 5;
$page = '';
$output = '';

if(isset($_POST['displaySend'])){

    $page = $_POST["displaySend"];
} else {
    $page = 1;
}
    $start_from = ($page -1)*$record_per_page;
    $sql="SELECT * FROM `searchperson` ORDER BY contact_id DESC LIMIT $start_from, $record_per_page";
    $result=mysqli_query($con,$sql);

    $table = '<table class="table" id="mytable">
    <thead class="thead-dark">
        <tr style="background-color:#86a34b; color:#FFFFFF;">
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">اسم</th>
            <th scope="col">Job Title</th>
            <th scope="col">وظیفه</th>
            <th scope="col">Directorate</th>
            <th scope="col">ریاست / معینیت</th>
            <th scope="col">Cisco</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>';
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['contact_id'];
        $nameEn=$row['name_person_en'];
        $nameDari=$row['name_person_dari'];
        $officeNameEn=$row['office_person_en'];
        $officeNameDari=$row['office_person_dari'];
        $titleNameEn=$row['title_person_en'];
        $titleNameDari=$row['title_person_dari'];
        $ciscoNumber=$row['cisco_number'];
        $table.='<tr style="text-align:rightr; background-color: white; color: #86a34b;">
                    <td>'.$number.'</td>
                    <td>'.$nameEn.'</td>
                    <td>'.$nameDari.'</td>
                    <td>'.$titleNameEn.'</td>
                    <td>'.$titleNameDari.'</td>
                    <td>'.$officeNameEn.'</td>
                    <td>'.$officeNameDari.'</td>
                    <td>'.$ciscoNumber.'</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-success btn-sm my-1" onclick="getDetails('.$id.')">Update</button>
                            <button class="btn btn-danger btn-sm my-1" onclick="deleteUser('.$id.')">Delete </buttion>
                        </div>
                    </td>
                </tr>';
                $number++;
    } 
    $table.='</table>';

    $page_query = "SELECT * FROM `searchperson` ORDER BY contact_id DESC";
    $page_result = mysqli_query($con, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);

    $table .= "<ul class='pagination'>";

    if($page > 1)
    {
        $previous = $page - 1;
        $table .= "<li class='page-item' id='1'> <span class='page-link'> First Page </span></li>";
        $table .= "<li class='page-item' id='".$previous."'> <span class='page-link'> 
                   <i class='fa fa-arrow-left'></i></span></li>";
    }

    for ($i=1; $i<=$total_pages; $i++)
    {
        $active_class = "";
        if($i == $page){
            $active_class = "active";
        }
        $table .= "<li class='page-item'".$active_class."' id='".$i."'><span class='page-link'>".$i."</span></li>";
    }

    if ($page < $total_pages)
    {
        $page++;
        $table .= "<li class='page-item' id='".$page."'><span class='page-link'><i class='fa fa-arrow-right'>
                    </i></span></li>";
        $table .= "<li class='page-item' id='".$total_pages."'><span class='page-link'>Last Page</span></li>";
    }
    $output .= "</ul>";
    echo $table;

?>