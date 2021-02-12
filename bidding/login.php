<script type="text/javascript">
	$(document).ready(function(){
		// set initially button state hidden
		$("#btn").hide();
		// use keyup event on email field
		//^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$

		$("#email").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#email").css("border","2px solid green");
				// and set label 
				$("#emailMsg").html("<p class='text-success'>E-mail Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#email").css("border","2px solid red");
				$("#emailMsg").html("<p class='text-danger'>incorrect email</p>");
			}
			buttonState();
		});
		// use keyup event on password
		$("#pass").keyup(function(){
			// check
			if(validatePassword()){
				// set input password border green
				$("#pass").css("border","2px solid green");
				//set passMsg 
				$("#passMsg").html("<p class='text-success'>password validated</p>");
			}else{
					// set input password border red
				$("#pass").css("border","2px solid red");
				//set passMsg 
				$("#passMsg").html("<p class='text-danger'>Enter password with 6 unique characters</p>");
			}
			buttonState();
		});

		
	});

	function buttonState(){
		if(validateEmail() && validatePassword()){
			// if the both email and password are validate
			// then button should show visible
			$("#btn").show();
		}else{
			// if both email and pasword are not validated
			// button state should hidden
			$("#btn").hide();
		}
	}
	function validateEmail(){
		// get value of input email
		var email=$("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
	function validatePassword(){
		//get input password value
		var pass=$("#pass").val();
		// use reular expression
		 var reg2 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
		// check it s length
		if(reg2.test(pass)){
			return true;
		}else{
			return false;
		}

	}

</script>


<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="login-frm">
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email"id="email"name="email" required="" class="form-control">
			<span id="emailMsg"></span>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<span id="passMsg"></span>
			<input type="password" id="pass" name="password" required="" class="form-control">
			<small><a href="javascript:void(0)" id="new_account">Create New Account</a></small>
		</div>
		<button class="button btn btn-primary btn-sm" id="btn">Login</button>
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>

<script>
	$('#new_account').click(function(){
		uni_modal("Create an Account",'signup.php?redirect=index.php?page=checkout')
	})
	$('#login-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		end_load()

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else{
					$('#login-frm').prepend('<div class="alert alert-danger">Email or password is incorrect.</div>')
		end_load()
				}
			}
		})
	})
</script>