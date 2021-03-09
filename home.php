<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
	<style>
		body{
			background-image: url("bg2.jpg");
			/*overflow: hidden;*/
		}
		h1{
			margin-top: 10px;
			text-align:center;
			font-size: 350%;
			text-shadow: 5px 5px 6px red;
			color: white;
		}
		#id1{
			width: 150px;
			height: 150px;
			border-radius: 20px;
			}	
		table{
			margin-top:-25px;
			margin-left: 100px;
		}
		div.polaroid{
			width: 80%;
			background-color: white;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);	
			text-align: center;
			padding: 10px 20px;
		}
		div.container{
			text-align: center;
			padding: 10px 20px;

		}
		#cl{
			width: 200px;
			height: 30px;
			font-size: 20px;
			background-color: green;
			border-radius: 20px;
		}
		#cl3{
			width: 380px;
			height: 50px;
			font-size: 20px;
			background-color: green;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<h1>CLUBS</h1>
	<form action="home2.php" method="post">
	<table>
		<tr>
			<td>
				<div class="polaroid">
				<img id="id1" src="leo.jpeg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="submit" onclick="location.href='leo.html';" name="cn" id="cn" value="Leo club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="e_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='elevate.html';" name="cn" id="cn" value="Elevate club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="eco_logo.jpeg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='eco.html';" name="cn" value="Eco club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="t_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='tedx.html';" name="cn"  value="TedX club" />
				</div>
			</div>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				<div class="polaroid">
				<img id="id1" src="sam_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='samskruthi.html';" value="Samskruthi club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="dance_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='dance.html';" value="Dance club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="edc_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='iedc.html';" value="IEDC club" />
				</div>
			</div>
			</td>
			<td>
				<div class="polaroid">
				<img id="id1" src="rotract_logo.jpg" alt="img" class="image">
				<div class="container">
					<input id="cl" type="button" onclick="location.href='rotract.html';" value="Rotract club" />
				</div>
			</div>
			</td>
		</tr>
	</table>
	<input id="cl3" type="button" onclick="location.href='active.php';" value="Click here to know the active clubs" />
</form>

</body>
</html>
