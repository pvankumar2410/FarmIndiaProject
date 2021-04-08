<?php session_start() ?>
<?php include('admin/db_connect.php'); ?>
<?php 
if(isset($_SESSION['login_id'])){
	$qry = $conn->query("SELECT * from orders where id = {$_SESSION['login_id']} ");
	foreach($qry->fetch_array() as $k => $v){
		$$k = $v;
	}
}
?>
<html>
    <head>
        
</head>
<body>
<div class="container-fluid">
	<form action="" id="signup-frm">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="form-group">
			<label for="" class="control-label">Reason</label>
			<input type="text" name="reason" id="reason"required="" class="form-control" value="<?php echo isset($reason) ? $reason : '' ?>">
			
		</div>
        <button class="button btn btn-primary btn-sm" id="btn"><?php echo !isset($id) ? "Create" : "Update" ?></button>
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>

	</form>
</div>
<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=cancelorder',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					end_load()
				}
			}
		})
	})
</script>
</body>
</html>