
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<!--<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
			
				<a href="index.php?page=applications" class="nav-item nav-applications"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Applications</a>	
				<a href="index.php?page=vacancy" class="nav-item nav-vacancy"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Vacancy</a>	
				
				<a href="index.php?page=recruitment_status" class="nav-item nav-recruitment_status"><span class='icon-field'><i class="fa fa-th-list"></i></span> Status Category</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Settings</a>
				<a href="index.php?page=sendmail" class="nav-item nav-site_settings"><span class='icon-field'><i class="bi bi-envelope-fill"></i></span> Send Mail</a>-->

				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a href="index.php?page=home" class="nav-link active" data-toggle="" aria-selected="true"><span class='icon-field'><i class="fa fa-home"></i></span>  Home</a>
    <a href="index.php?page=applications" class="nav-link" data-toggle=""  aria-selected="false"><span class='icon-field'><i class="fa fa-list"></i></span>  Applications</a>
    <a href="index.php?page=vacancy" class="nav-link" data-toggle="" aria-selected="false"><span class='icon-field'><i class="fa fa-th-list"></i></span>  Vacancy</a>
    <a href="index.php?page=recruitment_status" class="nav-link" data-toggle="" aria-selected="false"><span class='icon-field'><i class="bi bi-hourglass-split"></i></span>  Status Category</a>
	<a href="index.php?page=sendmail" class="nav-link" data-toggle="" aria-selected="false"><span class='icon-field'><i class="bi bi-envelope-fill"></i></i></span>  Send Mail</a>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div>
			<!--	<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Settings</a>-->
				--><a href="index.php?page=sendmail" class="nav-item nav-site_settings"><span class='icon-field'><i class="bi bi-envelope-fill"></i></span> Send Mail</a>-->
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
