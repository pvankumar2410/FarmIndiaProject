<?php include('admin/db_connect.php');?>
<?php session_start(); ?>
<html>
	<head>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h2><b>My Orders</b></h2>
					</div>
					<div class="card-body">
						<table class="table table-hover">
						
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Date</th>
									<th scope="col">Ordered Customer Name</th>
									<th scope="col">Product Name</th>
									<th scope="col">Quantity</th>
									<th scope="col">Total Amount</th>
									<th scope="col">Status</th>
									<th scope="col">Cancellation Status</th>
                                    <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
                                $customer_id = $_SESSION['login_id'];

                                //$orders = $conn->query("SELECT o.*,c.name, FROM orders o inner join customers c on c.id where o.customer_id = '$customer_id'");
								//$orders = $conn->query("SELECT o.*,c.name FROM orders o inner join customers c on c.id = o.customer_id order by unix_timestamp(o.date_created) asc ");
                                $orders = $conn->query("SELECT o.*,c.name, b.title FROM orders o, books b inner join customers c on c.id = '$customer_id' order by unix_timestamp(o.date_created) asc ");
								while($row=$orders->fetch_array()):
									$tamount = $conn->query("SELECT sum(price * qty) as amount from order_list where order_id = ".$row['id'])->fetch_array()['amount'];
									$items = $conn->query("SELECT sum(qty) as items from order_list where order_id = ".$row['id'])->fetch_array()['items'];
								?>
								<tr>
									<td ><?php echo $i++ ?></td>
									<td class="">
										<p><b><?php echo date("M d,Y",strtotime($row['date_created'])) ?></b></p>
									</td>
									<td class="">
										<p><b><?php echo ucwords($row['name']) ?></b></p>
									</td>
									<td class=""> 
										<p><b><?php echo ucwords($row['title']) ?></b></p>
									</td>
									
									<td >

										<p><b><?php echo $items ?></b></p>
									</td>
									<td class="">
										<p class="text-right"><b><?php echo number_format($tamount,2) ?></b></p>
									</td>
									<td >
										<?php if($row['status'] == 0): ?>
											<span>Pending</span>
										<?php elseif($row['status'] == 1): ?>
											<span>Confirmed</span>

										<?php endif; ?>
									</td>
									<td >
										<?php
										$a = NULL;
										?>
										<?php if($row['cancel'] == 0): ?>
											<span>Rejected</span>
										<?php elseif($row['cancel'] == 1): ?>
											<span>Approved</span>
											<?php else: ($row['cancel'] == $a) ?>
												<span>N/P</span>
											

										<?php endif; ?>
									</td>
									<td class="">
									<button	class="btn btn-outline-primary" type="button" id="cal">Cancel</button>
									</td>
                                    
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p {
		margin:unset;
	}
	.custom-switch{
		cursor: pointer;
	}
	.custom-switch *{
		cursor: pointer;
	}
	.img{
		max-height: 15vh;
	}
	/*.img img{
		max
	}*/
</style>
<script>
	$('#cal').click(function(){
   
    start_load()

    $.ajax({
        url:'admin/ajax.php?action=cancelorder',
        method:'POST',
        data:{order_id: '<?php echo $id ?>',reason: '<?php echo $reason ?>'},
        success:function(resp){
            if(resp == 1){
                alert_toast("Equipment successfully added to cart.","success")
                end_load()
                load_cart()
            }
        }
    })
})	
</script>
</body>
</html>