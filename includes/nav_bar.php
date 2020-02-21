
<style type="text/css">

	.header_wrapper {
	margin:auto;
	width: 800px;
	position: relative;	
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}

	nav {
	margin:auto;

	position: relative;
	width: 800px;
	height: 50px;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 200px;
}
a:nth-child(3) {
	width: 200px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-maintenance, a:nth-child(2):hover~.animation {
	width: 200px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-tr, a:nth-child(3):hover~.animation {
	width: 200px;
	left: 300px;
	background-color: #3498db;
}
nav .start-manual, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 500px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 660px;
	background-color: #e67e22;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: #2c3e50;
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}

span {
    color: #2BD6B4;
}
</style> 
<div class="header_wrapper"><img src="asset/img/logo.gif"><h1 style="display: contents;"> APSCL O&M Knowledge Base </h1></div><br>


<nav>
	<a href="dashboard.php">Home</a>
	<a href="report_list.php">Maintenance Reports</a>
	<a href="tr_list.php">Trouble Report</a>
	<a href="device_manual.php">All Manuals</a>
	<a href="contact_form.php">Contact</a>
	

