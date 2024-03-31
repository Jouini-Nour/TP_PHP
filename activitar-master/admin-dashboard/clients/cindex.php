
<?php
session_start();
include_once '../autoload.php';
$usersrepository=new UsersRepository();
$clients=$usersrepository->getAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar Begins -->
        <?php
        $firstlink = "../contactform/findex.php";
        $secondlink= "cindex.php";
        $thirdtlink= "../stock/sindex.php";
        $lasttlink= "../logout.php";
        include '../sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
        <div class="container"></div>
    <h2>List of clients</h2>
    <a href="create.php" class="btn btn-danger" role="button">New Client</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach($clients as $client){
            ?>
            <tr>
            <tr>
                <td><?= $client->id ?></td>
                <td><?= $client->full_name ?></td>
                <td><?= $client->username ?></td>
                <td><?= $client->email ?></td>
                <td><?= $client->phone ?></td>
                <td><?= $client->password ?></td>
                <td><?= $client->created_at ?></td>
                <td>
                    <a href="delete.php?id=<?= $client->id; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</body>

</html>