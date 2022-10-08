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
		{?>
			<table class="table table-bordered table-striped mt-4">
				<thead>
					<tr style="background-color:#86a34b; color:#FFFFFF;">
						<th style="text-align:center;"><?php echo "شماره سیسکو"; ?></th>
						<th style="text-align:center;"><?php echo "بست"; ?></th>
						<th style="text-align:center;"><?php echo "معینیت / ریاست"; ?></th>
						<th style="text-align:center;"><?php echo "اسم"; ?></th>
						<th style="text-align:center;"><?php echo "شماره"; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					    $number=1;
						while ($row = mysqli_fetch_assoc($result))
						{
							$cisco_num = $row['cisco_number'];
							$title = $row['title_person_dari'];
							$directorate = $row['office_person_dari'];
							$name = $row['name_person_dari'];
							$id = $row['contact_id'];
							?>
							<tr>
								<td style="text-align:center; background-color: white; color: #86a34b;"><?php echo $cisco_num; ?></td>
								<td style="text-align:center; background-color: white; color: #86a34b;"><?php echo $title; ?></td>
								<td style="text-align:center; background-color: white; color: #86a34b;"><?php echo $directorate; ?></td>
								<td style="text-align:center; background-color: white; color: #86a34b;"><?php echo $name; ?></td>
								<td style="text-align:center; background-color: white; color: #86a34b;"><?php echo $number; ?></td>
							</tr>
							<?php $number++;
						}
					
					?>
				</tbody>
			</table>
			<?php
		}
		else
		{
			echo "<h6 class='text-danger text-center mt-3'> No Data Found</h6>";
		}
	}	
?>