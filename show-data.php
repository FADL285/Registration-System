<?php
include('inc/header.php');

if (!isset($_SESSION['user_name'])) {
    header('location:index.php');
}
?>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center display-4 border-bottom my-5 ">Your Data</h1>
                <div>
                    <h2> Name : <?php echo $_SESSION['user_name'] ?></h2>
                    <h2> Email : <?php echo $_SESSION['user_email'] ?></h2>
                    <h2> Mobile : <?php echo $_SESSION['user_mobile'] ?></h2>
                </div>
            </div>
        </div>
    </div>

<?php include('inc/footer.php'); ?>