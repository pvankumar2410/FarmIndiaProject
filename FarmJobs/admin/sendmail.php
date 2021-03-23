<?php include '../../mailers.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="../../emailcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>


  <?php include 'db_connect.php' ?>

  <?php 
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
								?>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
     <input type="hidden" name="email" , value=" $row['email']"></input>
     <?php endwhile; ?>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>
      