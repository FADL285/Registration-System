<?php
include('inc/header.php');

if (isset($_SESSION['user_name'])) {
    header('location:index.php');
}
?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 my-5 p-2"> Register</h1>
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="border p-5 my-3">
                <form action="handler/register.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Your Mobile" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
