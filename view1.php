<?php  include('./config/operations.php');
$db = new operations();
$result =$db->view_record();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
    <body class="bg-success">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h1>Users Records</h1>
                        </div>

                        <div class="card-body">
                            <table class='table table-bordered table-hover'>
                                <tr class='bg-dark text-danger'>
                                    <td>ID</td>
                                    <td>SURNAME</td>
                                    <td>LASTNAME</td>
                                    <td>OTHERNAME</td>
                                    <td>EMAIL</td>
                                    <td>PASSWORD</td>
                                    <td>RIGESTER ON</td>
                                    <td colspan="2">ACTION</td>
                                </tr>

                                <tr>
                                    <?php while ($data =mysqli_fetch_assoc($result))
                                        {?>
                                        <td><?=$data['ID']?></td>
                                        <td><?=$data['first']?></td>
                                        <td><?=$data['Last']?></td>
                                        <td><?=$data['other']?></td>
                                        <td><?=$data['email']?></td>
                                        <td><?=$data['pass']?></td>
                                        <td><?=$data['created_at']?></td>
                                        <td><a href="#" class = "btn btn-success">Edid</a></td>
                                        <td><a href="#" class = "btn btn-danger">Delete</a></td> 
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>