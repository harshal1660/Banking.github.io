<?php
session_start();
$con=mysqli_connect('localhost','root','','bankingsys');
$name1=$_SESSION['name'];
$q="select sender,amount from transactions where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mi7ni Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		*{

    padding: 0;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("2.jpg");
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			 background: transparent;
			}
		th{
			color:white;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:0px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#542a0c;
			text-align:center;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn:hover {
			background-color:  DodgerBlue;
		}


		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;

			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
			display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		  position: top;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}

	</style>
	</head>
	<body>
    <ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><img src="3.png" height=80px width=70px ></li>
	</a>
	</ul><br><br><br>
		<h2><?php echo "Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
	</body>
</html>