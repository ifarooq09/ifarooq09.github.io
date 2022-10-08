<?php
	
	$con = mysqli_connect("localhost","root","CiscoMail@123","mail_cisco");
	
	if(!$con)
	{
		echo "connection Failed".mysqli_connect_error();		
	}


?>