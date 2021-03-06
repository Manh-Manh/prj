<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WWatch Shop</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	
</head>
<body>
<div class='container-fluid'>
	<div id="head" class="">
		<div class="row">
			<div class="col-sm-2"><a href="home1.php"><img src="asset/image/BLL1.png" alt=""  width= '50px'></a></div>
			<div class="col-sm-6" id ="logo"><a href="home1.php" > WWatch Shop</a></div>
			<div class="col-sm-2 headItem" id="search">
				<input type="text" name="txtSearch" id="">
				<a href="#"><span class="glyphicon glyphicon-search">Tìm</span></a>	
					
			</div>
			<div class="col-sm-2 headItem" style="padding-left: 60px">
			<a href="#"><span class="glyphicon glyphicon-shopping-cart" style="font-size: 12px">Cart<span class="badge">00</span></span></a>
				<span class="dropdown" style="padding-left: 10px">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
						Acc
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
						<li><a href="home1.php?id=login">Đăng Nhập</a></li>
						<li ><a href="home1.php?id=register">Đăng kí</a></li>
						<li ><a href="home1.php?id=profile">Thông tin</a></li>
						<li><a href="home1.php?id=admin">Admin</a></li>
						</ul>
					</button>
				</span>
				
			</div>
			
			
		</div>
	</div> 
	<!-- end head -->
    <nav class="navbar navbar-expand-sm bg-light navbar-full" >
         <!-- Links -->
         <ul class="navbar-nav">
		 <li class="nav-item">
			   <a class="nav-link"  href="#">Thương Hiệu</a>
				 
			   <div class="sub-menu">
				   <div class="container-fluid">
					   <div class="row">  
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
								<ul class="col-sm-4" > dialog3
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
						</div>
					</div>
				</div>
			  
            </li>
            <li class="nav-item">
			   <a class="nav-link"  href="#">Đồng hồ nam</a>
				 
			   <div class="sub-menu">
				   <div class="container-fluid">
					   <div class="row">  
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
								<ul class="col-sm-4" > dialog3
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
						</div>
					</div>
				</div>
			  
            </li>
            <li class="nav-item">
			   <a class="nav-link" href="#">Đồng hồ nữ</a>
			   <div class="sub-menu">
				   <div class="container-fluid">
					   <div class="row">  
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
								<ul class="col-sm-4" > dialog3
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
						</div>
					</div>
				</div>
            </li>
            <li class="nav-item">
			   <a class="nav-link" href="#">Phụ Kiện đồng hồ</a>
			   <div class="sub-menu">
				   <div class="container-fluid">
					   <div class="row">  
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul > dialog 2
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
								<ul class="col-sm-4" > dialog3
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
						</div>
					</div>
				</div>
            </li>
         </ul>
	</nav>
</div>











