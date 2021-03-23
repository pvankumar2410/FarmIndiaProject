<?php
  include 'FarmJobs/admin/db_connect.php';
					
				function sendmail(string $ma,string $cmr,string $mtp)
					{
						require_once('PHPMailer/PHPMailerAutoload.php');
						$mail = new PHPMailer();		
						$mail->Host ='smtp.gmail.com';
						$mail->Port= '587';
						$mail->isSMTP();
						$mail->SMTPAuth = true;	
						$mail->SMTPSecure = 'tls';
						$mail->IsHTML();
						$mail->Username ='farmindia58@gmail.com'; //Merry Weather offical gmail account
						$mail->Password ='farmindia123';
						$mail->SetFrom('farmindia58@gmail.com');
						$mail->Subject= 'Merryweather Law Authenicator';
						$mail->Body =' <h1>Congrats Law enforcers have approved your request for this weapon </h1><br>Please wait for further proceedings<br><br>	Response from Authenicators :';
						$mail->Body .=$cmr;
						$mail->Body .='<h1>Merryweather KAST : Your MTP is :- </h1>';

						$mail->Body .='<br><br>- Team Merryweather';
						$mail->AddAddress($ma);
						$mail->Send();
					
											if(!$mail->send()) {
											  echo ' Message was not sent.';
											  echo 'Mailer error: ' . $mail->ErrorInfo;
											} else {
											  echo ' Message has been sent.';
											}
					}	
					function sendmail2(string $ma2,string $cmr2)
					{
						require_once('PHPMailer/PHPMailerAutoload.php');
						$mail = new PHPMailer();		
						$mail->Host ='smtp.gmail.com';
						$mail->Port= '587';
						$mail->isSMTP();
						$mail->SMTPAuth = true;	
						$mail->SMTPSecure = 'tls';
						$mail->IsHTML();
						$mail->Username ='farmindia58@gmail.com'; //Merry Weather offical gmail account
						$mail->Password ='farmindia123';
						$mail->SetFrom('farmindia58@gmail.com');
						$mail->Subject= 'Merryweather Law Authenicator';
						$mail->Body =' <h1>Sorry Law Authenicators have rejected you request for puchase of weapon </h1><br>Please wait for further proceedings and please rectify this problem with Merryweather or your local police<br><br>	Response from Authenicators :';
						$mail->Body .=$cmr2;
						$mail->Body .='<br><br>- Team Merryweather';
						$mail->AddAddress($ma2);
						$mail->Send();
					
											if(!$mail->send()) {
											  echo ' Message was not sent.';
											  echo 'Mailer error: ' . $mail->ErrorInfo;
											} else {
											  echo ' Message has been sent.';
											}
					}						

		
				
				

          

           
                                              $i = 1;
                                              $stats = $conn->query("SELECT * FROM recruitment_status order by id asc");
                                              $stat_arr[0] = "New";
                                              while ($row = $stats->fetch_assoc()) {
                                                  $stat_arr[$row['id']] = $row['status_label'];
                                              }
                                              $awhere = '';
                                              if(isset($_GET['pid']) && $_GET['pid'] >= 0){
                                                  $awhere = " where a.process_id = '".$_GET['pid']."' ";
                                              }
                                              if(isset($_GET['position_id']) && $_GET['position_id'] > 0){
                                                  if(empty($awhere))
                                                  $awhere = " where a.position_id = '".$_GET['position_id']."' ";
                                                  else
                                                  $awhere .= " and a.position_id = '".$_GET['position_id']."' ";
              
                                              }
                                              $application = $conn->query("SELECT a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id $awhere order by a.id asc");
                                              while($row=$application->fetch_assoc()):
                                              
				
				
				//$stat=$_POST['Status'];
			//	$id=$_POST['id'];
			//	$df=$_POST['Status'];
			//	$cm=$_POST['comments'];
			//	$r=$_POST['id'];
				$x=$_POST['email'];
                $r=$_POST['process_id'];
			//	$mp=$_POST['mtp'];
				$r4=isset($_POST['checkbox']);
              
                 endwhile; 
				//$xr='shashankchandra97@gmail.com';
				// $emai=$_POST['email'];

				// echo $r;

			
					  // 
						try{
							    if($r4 == 'yes')
							    {
							        sendmail($x);
							    }
							}
						catch(Exception $e) {
								 
								}
		
					
					// $cm=$_POST['comments2'];
					 // $sql = "UPDATE orderslaw SET comments=$cm WHERE id=$r";
					//echo "<a href="mwla.php">Go Back</a>";
				// Perform query
				if ($result = $con -> query($sql)) {
				  
				}

				// mysqli_query($sql, $con);
				mysqli_close($con);
				include("FarmJobs/admin/sendmail.php");

			
			// echo "<a href="mwla.php">Go Back</a>";

				

?>