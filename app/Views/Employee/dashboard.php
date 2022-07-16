<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style3.css')?>">
</head>
<body>
<div class="sidebar">
	<div class="sidebar-brand">
		<h1>Grove</h1>
	</div>

	<div class="sidebar-menu collapsible">
		<ul>
			<li>
				<a href="" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
			</li>
			<li>
				<a href="<?= base_url('list-Users'); ?>"><span class="las la-users"></span>
					<span>Users</span></a>
			</li>
			<li>
				<a href="<?= base_url('list-category'); ?>"><span class="las la-shopping-bag"></span>
					<span>Categories</span></a>
			</li>
			<li>
				<a href="<?= base_url('list-subcategory'); ?>"><span class="las la-shopping-bag"></span>
					<span>Subcategories</span></a>
			</li>
			<li>
				<a href="<?= base_url('list-products'); ?>"><span class="las la-shopping-bag"></span>
					<span>Products</span></a>
			</li>
			
		</ul>
	</div>
</div>

<div class="main-content">
	<header>
		<h1>
			<label for="">
				<span class="las la-bars"></span>
			</label>
			Dashboard
		</h1>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" name=""/>
			</div>
		
		<div class="user-wrapper">
			<img src="" width="30px" height="30px" alt="">
		</div>
		<div>
			<h4><!--USERS NAME--></h4>
			<small><!--USERS role--></small>
		</div>
	</header>

	<main>
		
<div class="cards">
	
<div class="card-single">
<div>
	<h1><!--GET CUSTOMER DETAILS FROM THE TABLE--></h1>
	<span>Customers</span>
</div>
	<div>
		<span class="las la-users"></span>
	</div>
</div>

<div class="card-single">
<div>
	<h1><!--GET ORDER DETAILS FROM THE TABLE--></h1>
	<span>Orders</span>
</div>
	<div>
		<span class="las la-shopping-bag"></span>
	</div>
</div>
<div class="card-single">
<div>
	<h1><!--GET ORDER DETAILS FROM THE TABLE--></h1>
	<span>Income</span>
</div>
	<div>
		<span class="lab la-google-wallet"></span>
	</div>
</div>
</div>
<div class="recent-grid">
	<div class="Orders">
		<div class="card">
			<div class="card-header">
				<h2>Recent Orders</h2>

				<button>See all <span class="las la-arrow-right"></span></button>
			</div>

			<div class="card-body">
				<div class="table-responsive">
				<table width="100%">
					<thead>
						<tr>
							<td>Client ID</td>
							<td>Product ID</td>
							<td>Quantity</td>
						</tr>
					</thead>
					<tbody>
						<!--GET DATA FROM ORDER TABLE-->
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>

	<div class="customers">
		<div class="card">
			<div class="card-header">
			<h3>New Customer</h3>

			<button>See all <span class="las la-arrow-right"></span></button>	
			</div>
			<div class="card-body">
			<div class="customer">
				<div class="info">
				<div>
					<img src="" width="40px" height="40px" alt="">
					<h4>
						name from table
					</h4>
					<small>email from table</small>
				</div>
			</div>
			</div>	
			<div>
				<span class="las la-user-circle"></span>
				<span class="las la-comment"></span>
				<span class="las la-phone"></span>
			</div>

			</div>
		</div>
	</div>
</div>
	</main>
</div>
</body>
</html>