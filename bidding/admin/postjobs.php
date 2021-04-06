<?php 
   include_once("db_conn.php"); // Added the missing semi-colon
   session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}
 ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM products where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
  $$k=$val;
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>manage products </title>

<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  
</head>
<body>
  <div>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home1.php">FarmIndia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home1.php">Home</a></li>
      <li><a href="read1.php">MY JOBS</a></li>
      <li><a href="postjobs.php">NEW JOB</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout1.php"><span class="glyphicon glyphicon-log-in"></span> Hello , <?php echo $_SESSION['user_name']; ?></a></li>
    </ul>
  </div>
</nav> 
<div>
<form >

  <div align="center">
     <h1>POST CROPS</h1>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo isset($name) ? $name :'' ?>" required>
  </div>

            <div class="form-group row">
              <label for="" class="control-label">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCategory</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select class="custom-select select2" name="category_id">
                <option value=""></option>
                <?php
                $qry = $conn->query("SELECT * FROM categories order by name asc");
                while($row=$qry->fetch_assoc()):
                ?>
                <option value="<?php echo $row['id'] ?>" <?php echo isset($category_id) && $category_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
                <?php endwhile; ?>
              </select>
            </div>

          
  <div class="form-group">
    <label for="Description">Description</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="5" required><?php echo isset($description) ? html_entity_decode($description) : '' ?></textarea>
  </div>
  <div class=" row form-group">
            <div class="col-md-5">
              <label for="" class="control-label">Product Image</label>
              <input type="file" class="form-control" name="img" onchange="displayImg2(this,$(this))">
            </div>

            <div class="col-md-5">
              <img src="<?php echo isset($img_fname) ? 'assets/uploads/'.$img_fname :'' ?>" alt="" id="img_path-field">
            </div>
          </div>
  <div id="datetimepicker" class="form-group">
      <label for="bidtime">Bid Time End</label>
      <input type="text" name="bid_end_datetime" value="<?php echo isset($bid_end_datetime) && strtotime($bid_end_datetime) > 0 ? date("Y-m-d H:i",strtotime($bid_end_datetime)) : '' ?>"></input>
      <span class="add-on">
        <i  data-time-icon="icon-time" data-date-icon="icon-calendar" ></i>
      </span>
    </div>
    <div>
      <label for="Regular" class="form-group">Regular Price </label>
      <input type="number" class="form-control text-right" min="1" name="regular_price" value="<?php echo isset($regular_price) ? $regular_price : 0 ?>"/>
    </div>
    <div class="form-group">
        <label for="starting">Strating Bid Price</label>
 <input type="number" class="form-control text-right" min="1" name="start_bid" value="<?php echo isset($start_bid) ? $start_bid : 0 ?>"/>
    </div>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
    </script>
    <button class="btn btn-sm btn-block btn-primary col-sm-2">save</button>
  </div>

</form>
<div class="imgF" style="display: none " id="img-clone">
      <span class="rem badge badge-primary" onclick="rem_func($(this))"><i class="fa fa-times"></i></span>
  </div>
  <script>
  $('#payment_status').on('change keypress keyup',function(){
    if($(this).prop('checked') == true){
      $('#amount').closest('.form-group').hide()
    }else{
      $('#amount').closest('.form-group').show()
    }
  })
  $('.jqte').jqte();

  $('#manage-product').submit(function(e){
    e.preventDefault()
    start_load()
    $('#msg').html('')
    $.ajax({
      url:'ajax.php?action=save_product',
      data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
      success:function(resp){
        if(resp==1){
          alert_toast("Data successfully saved",'success')
          setTimeout(function(){
            location.href = "index.php?page=products"
          },1500)
        }
      }
    })
  })
  if (window.FileReader) {
  var drop;
  addproductHandler(window, 'load', function() {
    var status = document.getElementById('status');
    drop = document.getElementById('drop');
    var dname = document.getElementById('dname');
    var list = document.getElementById('list');

    function cancel(e) {
      if (e.preventDefault) {
        e.preventDefault();
      }
      return false;
    }
    // Tells the browser that we *can* drop on this target
    addproductHandler(drop, 'dragover', cancel);
    addproductHandler(drop, 'dragenter', cancel);
    addproductHandler(drop, 'drop', function(e) {
      e = e || window.product; // get window.product if e argument missing (in IE)   
      if (e.preventDefault) {
        e.preventDefault();
      } // stops the browser from redirecting off to the image.
      $('#dname').remove();
      var dt = e.dataTransfer;
      var files = dt.files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();
        //attach product handlers here...
        reader.readAsDataURL(file);
        addproductHandler(reader, 'loadend', function(e, file) {
          var bin = this.result;
          var imgF = document.getElementById('img-clone');
            imgF = imgF.cloneNode(true);
          imgF.removeAttribute('id')
          imgF.removeAttribute('style')
          var img = document.createElement("img");
          var fileinput = document.createElement("input");
          var fileinputName = document.createElement("input");
          fileinput.setAttribute('type','hidden')
          fileinputName.setAttribute('type','hidden')
          fileinput.setAttribute('name','img[]')
          fileinputName.setAttribute('name','imgName[]')
          fileinput.value = bin
          fileinputName.value = file.name
          img.classList.add("imgDropped")
          img.file = file;
          img.src = bin;
          imgF.appendChild(fileinput);
          imgF.appendChild(fileinputName);
          imgF.appendChild(img);
          drop.appendChild(imgF)
        }.bindToproductHandler(file));
      }
      return false;
    });
    Function.prototype.bindToproductHandler = function bindToproductHandler() {
      var handler = this;
      var boundParameters = Array.prototype.slice.call(arguments);
      return function(e) {
        e = e || window.product; // get window.product if e argument missing (in IE)   
        boundParameters.unshift(e);
        handler.apply(this, boundParameters);
      }
    };
  });
} else {
  document.getElementById('status').innerHTML = 'Your browser does not support the HTML5 FileReader.';
}
function addproductHandler(obj, evt, handler) {
  if (obj.addproductListener) {
    // W3C method
    obj.addproductListener(evt, handler, false);
  } else if (obj.attachproduct) {
    // IE method.
    obj.attachproduct('on' + evt, handler);
  } else {
    // Old school method.
    obj['on' + evt] = handler;
  }
}
function displayIMG(input){
      if (input.files) {
  if($('#dname').length > 0)
    $('#dname').remove();
          Object.keys(input.files).map(function(k){
            var reader = new FileReader();
                reader.onload = function (e) {
                  // $('#cimg').attr('src', e.target.result);
                  var bin = e.target.result;
                  var fname = input.files[k].name;
                  var imgF = document.getElementById('img-clone');
                imgF = imgF.cloneNode(true);
              imgF.removeAttribute('id')
              imgF.removeAttribute('style')
                  var img = document.createElement("img");
                    var fileinput = document.createElement("input");
                    var fileinputName = document.createElement("input");
                    fileinput.setAttribute('type','hidden')
                    fileinputName.setAttribute('type','hidden')
                    fileinput.setAttribute('name','img[]')
                    fileinputName.setAttribute('name','imgName[]')
                    fileinput.value = bin
                    fileinputName.value = fname
                    img.classList.add("imgDropped")
                    img.src = bin;
                    imgF.appendChild(fileinput);
                    imgF.appendChild(fileinputName);
                    imgF.appendChild(img);
                    drop.appendChild(imgF)
                }
            reader.readAsDataURL(input.files[k]);
          })
rem_func()
    }
    }
function displayImg2(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#img_path-field').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function rem_func(_this){
    _this.closest('.imgF').remove()
    if($('#drop .imgF').length <= 0){
      $('#drop').append('<span id="dname" class="text-center">Drop Files Here</label></span>')
    }
}
</script>
/*
<?php $id=$_SESSION['id'];
   $Position = $_POST[''];
   $Salary = $_POST['Salary'];
   $Availability = $_POST['Availability'];
   $Description = $_POST['Description'];
   $sql = "INSERT INTO vacancy (position,salary,availability,user_id,description)
   VALUES ('$Position','$Salary','$Availability','$id','$Description')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
    header("Location: postjobs.php");
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>*/
</body>
</html>