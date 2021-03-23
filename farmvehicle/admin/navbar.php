
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
</style>


<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<!--<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span> Dashboard</a>
				<a href="index.php?page=orders" class="nav-item nav-orders"><span class='icon-field'><i class="fa fa-clipboard-list"></i></span> Orders</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<div class="mx-2 text-white">Master List</div>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Categories</a>
				<a href="index.php?page=books" class="nav-item nav-books"><span class='icon-field'><i class="fa fa-book "></i></span> Equipments</a>
				<?php endif; ?>
				<div class="mx-2 text-white">Report</div>
				<a href="index.php?page=sales_report" class="nav-item nav-sales_report"><span class='icon-field'><i class="fa fa-th-list"></i></span> Sales Report</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<div class="mx-2 text-white">Systems</div>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users "></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>-->

				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<<<<<<< HEAD
    <a href="index.php?page=home" class="nav-link active" data-toggle="" aria-selected="true"><span class='icon-field'><i class="fa fa-home"></i></span>  Home</a><a href="index.php?page=orders" class="nav-item nav-orders"><span class='icon-field'><i class="fa fa-clipboard-list"></i></span> Orders</a>
=======
    <a href="index.php?page=home" class="nav-link active" data-toggle="" aria-selected="true"><span class='icon-field'><i class="fa fa-home"></i></span>  Home</a>
	<a href="index.php?page=orders" class="nav-link active" data-toggle="" aria-selected="true"><span class='icon-field'><i class="fa fa-clipboard-list"></i></span>  Orders</a>
>>>>>>> 27f5dea29389d878d5be8c78e0c85bf43dae7366
    <a href="index.php?page=categories" class="nav-link" data-toggle=""  aria-selected="false"><span class='icon-field'><i class="fa fa-list"></i></span>  Categories</a>
    <a href="index.php?page=books" class="nav-link" data-toggle="" aria-selected="false"><span class='icon-field'><i class="fa fa-th-list"></i></span>  Equipments</a>
    <a href="index.php?page=sales_report" class="nav-link" data-toggle="" aria-selected="false"><span class='icon-field'><i class="bi bi-bar-chart-line-fill"></i></span>  Sales Reports</a>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div>



			<?php endif; ?>
		</div>

</nav>
</body>
<script>

	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
 
