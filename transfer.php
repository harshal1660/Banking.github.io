<?php
session_start();
$con=mysqli_connect('localhost','root','','bankingsys');
$q="select name from customers";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
		*{

    padding: 0;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
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



	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
	}
	.center{
		display:inline-block;
		background-color:transparent;
		padding:50px;
	}
	.ho{
		padding: top 50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: black;
		font-size:17px;
		font-weight:bold;
		background:transparent;
	}
	.button:hover{
		background-color:white;
	}
	</style>
	<body>
	
<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><img src="3.png" height=80px width=70px ></li>
	</a>
	</ul>

	</body>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Virat"){
				 var arr=["Rohit","Suresh","Sachin","Shardul","Deepak","Rahul","Rishab","Mahendra","Jasprit"];
				 }
				 else if(a==="Rohit"){
					var arr=["Virat","Suresh","Sachin","Shardul","Deepak","Rahul","Rishab","Mahendra","Jasprit"];
				}
				else if(a==="Suresh"){
					var arr=["Virat","Rohit","Sachin","Shardul","Deepak","Rahul","Rishab","Mahendra","Jasprit"];
				}
				else if(a==="Sachin"){
					var arr=["Virat","Rohit","Suresh","Shardul","Deepak","Rahul","Rishab","Mahendra","Jasprit"];
				 }
				 else if(a==="Shardul"){
					var arr=["Virat","Rohit","Suresh","Sachin","Deepak","Rahul","Rishab","Mahendra","Jasprit"];
				 }
				 else if(a==="Deepak"){
					var arr=["Virat","Rohit","Suresh","Sachin","Shardul","Rahul","Rishab","Mahendra","Jasprit"];
				 }
				 else if(a==="Rahul"){
					var arr=["Virat","Rohit","Suresh","Sachin","Shardul","Deepak","Rishab","Mahendra","Jasprit"];
				 }
				 else if(a==="Rishab"){
					 var arr=["Virat","Rohit","Suresh","Sachin","Shardul","Deepak","Rahul","Mahendra","Jasprit"];
				 }
				 else if(a==="Mahendra"){
					var arr=["Virat","Rohit","Suresh","Sachin","Shardul","Deepak","Rahul","Rishab","Jasprit"];
				 }
				 else if(a==="Jasprit"){
				 var arr=["Virat","Rohit","Suresh","Sachin","Shardul","Deepak","Rahul","Rishab","Mahendra"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>






	<h1 style=" font-size:45px;color:black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Virat">Virat</option>
			<option value="Rohit">Rohit</option>
			<option value="Suresh">Suresh</option>
			<option value="Sachin">Sachin</option>
			<option value="Shardul">Shardul</option>
			<option value="Deepak">Deepak</option>
			<option value="Rahul">Rahul</option>
			<option value="Rishab">Rishab</option>
			<option value="Mahendra">Mahendra</option>
			<option value="Jasprit">Jasprit</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'"type="submit" name="submit" value="Transfer" style="height:30px; width:80px;">
		</div>
	</form> 
	</div><br><br><br>

</div>
</body>
</html>