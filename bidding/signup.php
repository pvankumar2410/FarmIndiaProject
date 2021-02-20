			<script>
function getAge() 
{
    var dateString = document.getElementById("txtDate").value;
    if(dateString !="")
    {
        var today = new Date();
        var birthDate = new Date(dateString); //format is mm.dd.yyyy
        var age = today.getFullYear() - birthDate.getFullYear();

        if(age < 18 || age > 100)
        {
            alert("Age "+age+" is restrict");
           
        } 
        else 
        {
            alert("Age "+age+" is allowed");
        }
    } 
    else 
    {
        alert("please provide your date of birth");
    }
}
</script>
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

		$("#aadhaar").keyup(function(){
			if(validateaadhaar()){
				// if the email is validated
				// set input email border green
				$("#aadhaar").css("border","2px solid green");
				// and set label 
				$("#aadhaarMsg").html("<p class='text-success'>Aadhaar Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#aadhaar").css("border","2px solid red");
				$("#aadhaarMsg").html("<p class='text-danger'>incorrect Aadhaar</p>");
			}
			buttonState();
		});

		$("#name").keyup(function(){
			if(validatename()){
				// if the email is validated
				// set input email border green
				$("#name").css("border","2px solid green");
				// and set label 
				$("#namemsg").html("<p class='text-success'>Name Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#name").css("border","2px solid red");
				$("#namemsg").html("<p class='text-danger'>incorrect Name</p>");
			}
			buttonState();
		});
		$("#phone").keyup(function(){
			if(validatephone()){
				// if the email is validated
				// set input email border green
				$("#phone").css("border","2px solid green");
				// and set label 
				$("#phonemsg").html("<p class='text-success'>phone Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#phone").css("border","2px solid red");
				$("#phonemsg").html("<p class='text-danger'>incorrect phone no</p>");
			}
			buttonState();
		});

		$("#address").keyup(function(){
			if(validateaddress()){
				// if the email is validated
				// set input email border green
				$("#address").css("border","2px solid green");
				// and set label 
				$("#addmsg").html("<p class='text-success'>address Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#address").css("border","2px solid red");
				$("#addmsg").html("<p class='text-danger'>incorrect address</p>");
			}
			buttonState();
		});
		
	});

	function buttonState(){
		if(validateEmail() && validatePassword() && validatename() && validatephone()&& validateaadhaar() && validateaddress()){
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
	function validatename(){
		// get value of input email
		var name=$("#name").val();
		// use reular expression
		 var reg3 = /(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
		 if(reg3.test(name)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
	function validatephone(){
		// get value of input email
		var phone=$("#phone").val();
		// use reular expression
		 var reg4 = /^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[6789]\d{9}|(\d[ -]?){10}\d$/;
		 if(reg4.test(phone)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
    function validateaadhaar(){
		// get value of input email
		var aadhaar=$("#aadhaar").val();
		// use reular expression
		 var reg5 = /^\d{4}\s\d{4}\s\d{4}$/;
		 if(reg5.test(aadhaar)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
	  function validateaddress(){
		// get value of input email
		var address=$("#address").val();
		// use reular expression
		 var reg6 = /^[A-Za-z0-9\s]{20,250}$/;
		 if(reg6.test(address)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
	
	
</script>


<div class="container-fluid">
	<form action="" id="signup-frm">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="name" required="" id="name" class="form-control">
			<span id="namemsg"></span>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact</label>
			<input type="text" name="contact" required="" id="phone" class="form-control">
			<span id="phonemsg"></span>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows="3" name="address" id="address" required="" class="form-control"></textarea>
			<span id="addmsg"></span>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" id="email" required="" class="form-control">
			<span id="emailMsg"></span>
		</div>
		
		<div class="form-group">
			<label for="" class="control-label">Aadhaar ID</label>
			<input type="text" name="aadhaar" id="aadhaar" required="" class="form-control">
			<span id="aadhaarMsg"></span>
		</div>
		<div class="form-group">
			<label for="" class="control-label">D.O.B</label>
			<input type="date" name="date" id="txtDate" required="" class="form-control">

			
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" id="pass" name="password" required="" class="form-control">
			<span id="passMsg"></span>
		</div>
		<button class="button btn btn-primary btn-sm" value="Get Age" onkeyup ="return getAge()" id="btn">Create</button>
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
			url:'admin/ajax.php?action=signup',
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