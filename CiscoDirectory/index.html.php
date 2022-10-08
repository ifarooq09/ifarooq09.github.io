<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <title> Ministry of Agriculture, Irrigation and Livestock</title>
        <!-- Bootstrape CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <script type="text/javascript"></script>
	<title> Live Search </title>
	<style>
	        input[type="text"]::placeholder 
			{
                 
                /* Firefox, Chrome, Opera */
                text-align: right;
            }
			
			input[type="text"]
			{
				text-align: right;
				border-radius: 25px 25px 25px 25px;
				height: 50px;
			}
			.logo2
			{
				background: url(img/mail_banner.png) no-repeat center;
				padding: 0px;
				margin: 0px;
				width: 100%;
				height: 250px;
			}
			a#login-button.button.logout.login.w-button 
			{
				background-color: #ffffff;
				background-image: none;
				border-radius: 25px;
				border-width: 0;
				bottom: auto;
				box-sizing: border-box;
				color: #86a34b;
				cursor: pointer;
				display: block;
				flex: 1;
				float: right;
				font-family: Poppins, sans-serif;
				font-size: 12px;
				font-weight: bold;
				left: auto;
				letter-spacing: 1px;
				line-height: 19px;
				margin-left: -15px;
				margin-right: 15px;
				margin-top: 15px;
				padding: 5px 15px;
				position: absolute;
				right: 0;
				text-align: center;
				text-decoration: none;
				top: 0;
				transition: background-color 150ms;
				z-index: 30;
			}
 
			a#login-button.button.logout.login.w-button:active 
			{
				outline: 0;
			}
 
			a#login-button.button.logout.login.w-button:hover 
			{
				background-color: #86a34b;
				font-weight: 400;
				outline: 0;
				color: #ffffff;
				font-weight: bold;
			}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background: url('img/background_img.jpg') no-repeat; background-size: 100%;">
   	<div class="container" style="max-width: 50%;">
			<div class="logo2">
			<a id="login-button" ms-hide-element="true" href="login.php" class="button logout login w-button">Admin Login</a>

			</div> 
			
			<div class="input-group">
				<input type="text" class="form-control" id="live_search" autocomplete="off"
			placeholder="..... جستجو" >
			
				<span class="input-group-append">
					<div class="input-group-text bg-transparent"><i class="fa fa-search" style="font-size:24px;color:white"></i></div>
				</span>
			</div>
	</div>
	
	<div id="searchresult">
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#live_search").keyup(function()
			{
				var input = $(this).val();
				//alert(input);			
				
				if(input != "")
				{
					$.ajax(
					{
						url:"livesearch.php",
						method:"POST",
						data:{input:input},
						
						success:function(data)
						{
							$("#searchresult").html(data);
							$("#searchresult").css("display", "block");
						}
					});
				}else
				{
					$("#searchresult").css("display", "none");
					
				}
				
			});
		});
	</script>


</body>
</html>
