<!DOCTYPE html>
<html lang="en">
<!--list developers’ details, information, copyright 
statement and include a clickable URL of the application
 website too – you may use Github page as 
website URL.-->
	<head>
		<meta charset = "UTF-8">
		<title> Details </title>
		<style>
		body {
			text-align: center;
			font-size: 19px;
			background-color: #FEC8D8;
			
		}
			

		
		h3 {
			text-align: center;
			color: white;
			font-size: 25px;

		}
		

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #DDD;
		}

		ul {
			list-style-type:none;
			margin:0;
			padding:0;
			overflow:hidden;
   			background-color:#957DAD;
		}

		li{
			float:left;
		}
		
		li a {
			display:block;
			color:black;
			text-align:center;
			padding:12px 14px;
			text-decoration:none;
		}
		
		li a:hover{
			background-color:dimgrey;
			color:white;
		}	
	
   		.navbar-nav>.active>a {
    			background-color: #D291BC;
    			color: white;
    		}			


		</style>
	</head>
	
	<body>
	
		<div>
	<ul class="navbar-nav">
		<li class="nav-item "><a  href="bmi.html" >BMI Calculator</a></li>
		<li class="nav-item active"><a class="active" href="aboutusbmi.php" >Details</a></li>
	</ul>
	</div>
	
	
	<center>
	<br><br>
	<table border=5 width=50%>
	<h3 style="border:white; border-width:2px; border-style:solid;"><b><i>List of Developers</i></b></h3>
	<tr><th bgcolor="#D291BC"><b>Project Manager</b></th><th bgcolor="#D291BC"><b>Development Leader</b></th ><th bgcolor="#D291BC"><b>Test Leader</b></th></tr>
	<tr background="gambar.jpg" ><td>Nur Atiqah Wahidah Bt Sulaiman</td><td>Syafiqah Syazwani Bt Peer Mohamed & Nurul Nazeerah Bt Zulkornain</td><td>Nur Dania Bt Hashim</td></tr>
	</table>
	
	<br><br>
	<h3 style="border:white; border-width:2px; border-style:solid;"<b><i>Developers' Details</i></b></h3>
	<table border=5 width=50%>
	<tr background="gambar.jpg" ><th>Project Manager</th><th>In charge of the completion of the project and ensures it is done on time and within scope.</th></tr>
	<tr background="gambar.jpg" ><th>Development Leader</th><th>In charge of developing the source code of the project.</th></tr>
	<tr background="gambar.jpg" ><th>Test Leader</th><th>In charge of testing the project and informs the development leader whether or not the project has errors to be fixed.</th></tr>
	</table>
	
		<br><br>
	<h3 style="border:white; border-width:2px; border-style:solid;"<b><i>GitHub Repository</i></b></h3>
	<a href="https://github.com/nunaazkrn/BMI" target="_blank">Visit our GitHub!<a>
		
		<br><br>
	<h3 style="border:white; border-width:2px; border-style:solid;"<b><i>Copyright Statement</i></b></h3>
	<p>Healthopolis respects the rights of all users and copyright holders. Consequently all works
	   that appear on this website do so with the consent of the copyright holder.</p>
	<p>No information or data displayed on this site may be reproduced, transmitted or copied
	   without the express written permission of Healthopolis. Contravention is an infringement
	   of the Copyright Act and its amendments and may be subject to legal action.</p><br>
	<p><b>Copyright © 2022 Healthopolis | All rights reserved</b></p>
 
	
	</center>
	</body>	
	
	<script>
	        $(document).ready(function () {
 
            $('ul.navbar-nav > li')
                    .click(function (e) {
                $('ul.navbar-nav > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
        });
	</script>
</html>
