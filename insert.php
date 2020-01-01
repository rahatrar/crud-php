<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    

</head>
<body>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<br>
        	<br>
            <div class="card">
                <div class="card-header">
                	<a href="index.php"><button class="btn btn-primary btn-block">Show</button></a>
                </div>

                <div class="card-body">
                    <div>

                        <form action="store.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
  </div>
   <div class="form-group">
    <label for="email">Email </label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>






	<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>