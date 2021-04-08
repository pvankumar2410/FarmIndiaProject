<?php include 'admin/db_connect.php' ?>
<?php
session_start();
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM books where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
if(!empty($category_ids))
$cat_qry = $conn->query("SELECT * FROM categories where id in ($category_ids)");
$cname = array();
while($row=$cat_qry->fetch_array()){
    $cname[$row['id']] = ucwords($row['name']);
}
}
?>
<style type="text/css">
	
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    #qty{
        width: 50px;
        text-align: center
    }
</style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="script/script.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<div class="container-fluid">
	<img src="admin/assets/uploads/<?php echo $image_path ?>" class="d-flex w-100" alt="">
	<p>Type :<large><b><?php echo $title ?></b></large></p>
    <p>Equipment type: <b><?php echo $author ?></b></p>
	<p>Category: <b>
    <?php 
      $cats = '';
      $cat = explode(',', $category_ids);
      foreach ($cat as $key => $value) {
        if(!empty($cats)){
          $cats .=", ";
        }
        if(isset($cname[$value])){
          $cats .= $cname[$value];
        }
      }
      echo $cats;
      ?>
    </b></p>
    <p>Price: <b><?php echo number_format($price,2) ?></b></p>
	<p>Description:</p>
	<p class=""><small><i><?php echo $description ?></i></small></p>
	<div class="d-flex jusctify-content-center col-md-12">
  <script type="text/javascript">
    <script type="text/javascript">
 
</script>
  </script>

<script language="javascript" type="text/javascript">
function p (i)
{
  return Math.floor(i / 10) + "" + i % 10;
}

function init ()
{
  var form = document.getElementById('form');
  var date = new Date();
  var s = p(date.getMonth() + 1) + "/" + p(date.getDate()) + "/" + date.getFullYear() + " " + p(date.getHours()) + ":" + p(date.getMinutes()) + ":" + p(date.getSeconds());
  if (form.date1.value == "")
    form.date1.value = s;
  if (form.date2.value == "")
    form.date2.value = s;
}

function trunc (i)
{
  var j = Math.round(i * 100);
  return Math.floor(j / 100) + (j % 100 > 0 ? "." + p(j % 100) : "");
}

function calculate (form)
{
  var date1 = new Date(form.date1.value);
  var date2 = new Date(form.date2.value);
  
  var sec = date2.getTime() - date1.getTime();
  if (isNaN(sec))
  {
    alert("Input data is incorrect!");
    return;
  }
  if (sec <= 0  )
  {
    alert("Wrong date");
    return;
  }
 
 

  var second = 1000, minute = 60 * second, hour = 60 * minute, day = 24 * hour;

  form.result_h.value = trunc(sec / hour);
  form.result_m.value = trunc(sec / minute);
  form.result_s.value = trunc(sec / second);

  var days = Math.floor(sec / day);
  sec -= days * day;
  var hours = Math.floor(sec / hour);
  sec -= hours * hour;
  var minutes = Math.floor(sec / minute);
  sec -= minutes * minute;
  var seconds = Math.floor(sec / second);
  form.result.value = days ;
   var x = document.getElementById("add_to_cart");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
</head>

<body>
<center>
  <div class="container">
  
  <form id="form">
  <table cellpadding="3" class="table table-striped">
    <tr>
      <td colspan="2" align="center">Enter values in <font color="#800000">mm/dd/yy hh:mm:ss</font> format</td>
    </tr>
    <tr style="display: none">
      <td>First date and time</td>
      <td><input type="text" name="date1" /></td>
    </tr>
    <tr>
      <td >No Of days u want TO Rent</td>
      <td><input type="text" name="date2" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="button" class="btn btn-success " name="submit"   value="Calculate" onclick="calculate(this.form)" />
        
      </td>
    </tr>
    <tr>
      <td>No of Days</td>
      <td colspan="2"><input type="text" name="result" id=qty readonly="readonly" size="40" value="1" /></td>
    </tr>
    <tr>
      <td>Total hours</td>
      <td colspan="2"><input type="text" name="result_h" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Total minutes</td>
      <td colspan="2"><input type="text" name="result_m" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Total seconds</td>
      <td colspan="2"><input type="text" name="result_s" readonly="readonly" /></td>
    </tr>
  </table>
  </form> 
</div>
<script language="JavaScript" type="text/javascript">
<!--
init();
//-->
</script>

<!-- Center Bottom -->
</td></tr></table>
<table border="0" cellpadding="0" cellspacing="0" width="500">
<tr><td width="500" valign="top" class="content">
 
       

		<button class="btn btn-primary btn-block btn-sm col-sm-4" type="button" id="add_to_cart" style="display: none;">Add to Cart</button>
	</div>
</div>
<script>
    $('.btn-minus').click(function(){
            var qty = $(this).siblings('input').val()
                qty = qty > 1 ? parseInt(qty) - 1 : 1;
                $(this).siblings('input').val(qty).trigger('change')
         })
     $('.btn-plus').click(function(){
        var qty = $(this).siblings('input').val()
            qty = parseInt(qty) + 1;
            $(this).siblings('input').val(qty).trigger('change')
     })
// $('#manage_bid')
$('#add_to_cart').click(function(){
    if('<?php echo !isset($_SESSION['login_id']) ?>' == 1){
            uni_modal("Please Login First",'login.php')
            return false
    }
    start_load()

    $.ajax({
        url:'admin/ajax.php?action=add_to_cart',
        method:'POST',
        data:{book_id: '<?php echo $id ?>',price: '<?php echo $price ?>', qty:$('#qty').val()},
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
