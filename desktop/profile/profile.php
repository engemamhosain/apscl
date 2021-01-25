<?php
include '../includes/header-new.php';

?>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Profile</h2>

<div class="card profile">
 
</div>
	<?php include '../includes/footer-new.php';?>
	<?php include '../includes/include_js.php';?>

	 <script src="../asset/js/app/pages/add_user.js"></script>
	 <script type="text/javascript">
   $(".profile").html(`  
   <img src="employee.jpg" alt="John" style="width:100%">
  <h1>${localStorage.name}</h1>
  <p class="title">${localStorage.role}</p>
  <p>${localStorage.id}</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
             
       `);
	 </script>



