<?php 

$conn = mysqli_connect('localhost','root','','cued');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

?>

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
                	<a href="insert.php"><button class="btn btn-primary btn-block">Add Student</button></a>
                </div>

                <div class="card-body">
                    <div>

                        <table class="table">

                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="show.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="#"><button class="btn btn-danger">Delete</button></a></td>
                            </tr>
                        <?php } ?>

                            </tbody>

                        </table>

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