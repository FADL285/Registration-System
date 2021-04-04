<?php
include 'inc/header.php';
require_once 'classes/users.php';

$users = User::getAllUsers();
$i = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-4 my-5 p-2">All Users</h1>
        </div>
        <div class="col-sm-10 col-12 mx-auto">
            <div class="border my-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td><?php echo $user->name ?></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo @$user->mobile ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>
