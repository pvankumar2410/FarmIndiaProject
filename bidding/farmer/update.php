<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		     <div class="form-group">
		     <label for="name">position</label>
		     <input type="name" 
		           class="form-control" 
		           id="position" 
		           name="position" 
		           value="<?=$row['position'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Availabilty</label>
		     <input type="text" 
		           class="form-control" 
		           id="availabilty" 
		           name="availabilty" 
		           value="<?=$row['availability'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="email">Description</label>
		     <input type="text" 
		           class="form-control" 
		           id="description" 
		           name="description" 
		           value="<?=$row['description'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="email">Salary</label>
		     <input type="text" 
		           class="form-control" 
		           id="salary" 
		           name="salary" 
		           value="<?=$row['salary'] ?>" >
		   </div>
		   <div class="form-group">
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
</div>
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
	
</body>
</html>