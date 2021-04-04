<?php include('inc/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 p-3 my-5 "> Login & Register System Using PHP & MySql </h1>
            <?php
            if (isset($_SESSION['user_name'])) {
                echo "<p class='text-center'>You are logged in</p>";
            } else {
                echo "<p class='text-center'>Please login or register</p>";
            }
            ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
