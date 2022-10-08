<?php
	include("config.php");

	if(isset($_POST['input']))
	{
		$input = $_POST['input'];
		
		$query = "SELECT * FROM searchperson WHERE name_person_dari LIKE '{$input}%' OR name_person_en LIKE '{$input}%' OR office_person_dari LIKE '{$input}%'
				OR office_person_en LIKE '{$input}%' OR title_person_dari LIKE '{$input}%' OR title_person_en LIKE '{$input}%'
                OR cisco_number LIKE '{$input}%'";
		
		$result = mysqli_query($con, $query);
		
		if(mysqli_num_rows($result) > 0) 
		{
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
                $result=mysqli_query($con,$query);
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
                                    <button class="btn btn-danger btn-sm my-1" onclick="deleteUser('.$id.')">Delete</buttion>
                                </div>
                                </td>
                            </tr>';
                            $number++;
                } 
                $table.='</table>';
                echo $table;
		}
		else
		{
			echo "<h6 class='text-danger text-center mt-3'> No Data Found</h6>";
		}
	}	
?>