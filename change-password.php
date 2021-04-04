<?php
include('inc/header.php');

if (!isset($_SESSION['user_name'])) {
    header('location:index.php');
    die();
}
?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 my-5 p-2">Change Password</h1>
        </div>

        <div class="col-sm-6 mx-auto">
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['error'] ?>
                </div>
                <?php unset($_SESSION['error']) ?>
            <?php endif; ?>
            <div class="border p-5 my-3">
                <form action="handler/change-password.php" method="post">
                    <div class="form-group">
                        <input type="password" class="form-control" name="old_password" placeholder="Your old Password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new_password" placeholder="Your new Password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password"
                               placeholder="Confirm new Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
