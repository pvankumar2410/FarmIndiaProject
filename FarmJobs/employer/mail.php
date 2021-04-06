
<?php include('php/upmail.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>mail</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="jquery-3.5.1.min.js"></script>

</head>
<body>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
 
<script>  

     function sendmail(){
    
			var name = $('#Name').val();
			var email = $('#Sender').val();
			var subject = $('#Subject').val();
      var message = $('#Message').val();

			// var body = $('#body').val();

			var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Message: '+message;
			//console.log(name, phone, email, message);

			Email.send({
        SecureToken:"fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
				To: 'optimalweb09@gmail.com',
				From: "demooptimalweb@gmail.com",
				Subject: "New message on contact from "+name,
				Body: Body
			}).then(
				message =>{
					//console.log (message);
					if(message=='OK'){
					alert('Your mail has been send. Thank you for connecting.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')
						
					}

				}
			);



		}


    </script>
 </script>
</body>
</html>