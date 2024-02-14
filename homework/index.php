<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Add a New User</h5>
                </div>
                <div class="card-body">
                    <form action="add_new.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>

                        <button name="submit" value="submit" class="btn btn-primary" type="submit">Add New user</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>User Lists</h5>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Created At</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                           $results= $db->conn->query("SELECT * FROM users");

                           $data=[];
                           while($row=$results->fetch_assoc())
                           {
                            $data[]=$row;
                           }
                           //echo '<pre>';
                          // print_r($data);
                            ?>
                            <?php
                            foreach($data as $row){
                                 ?>
                            
                            
                            <tr>                   
                                <td><?php echo $row['Id']      ?></td>
                                <td><?php echo $row['name']      ?></td>
                                <td><?php echo $row['password']      ?></td>
                                <td><?php echo $row['username']      ?></td>
                                <td><?php echo $row['created_at']      ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>