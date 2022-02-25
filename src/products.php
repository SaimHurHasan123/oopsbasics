<?php
include('header.php');
include('classes/Product.php');
use App\Product;


$arr=array(
	array("id"=>101,"image"=>"football.png","price"=>150),
	array("id"=>102,"image"=>"tennis.png","price"=>120),
	array("id"=>103,"image"=>"basketball.png","price"=>90),
	array("id"=>104,"image"=>"table-tennis.png","price"=>110),
	array("id"=>105,"image"=>"soccer.png","price"=>180)
	);
	?>
<html> 
	<body>
		
	
    <div id="main">

	<div id="products">
            
<?php
	$Obj = new Product();
	$Obj -> displayProducts();
	
?>
</div>
</div>
    

<!--	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div> -->
	


<?php

	include('foooter.php');
	?>
	</body>
	
</html>