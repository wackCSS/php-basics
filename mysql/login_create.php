<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    if ($_POST['submit']) {
        createRows();
    }
?>

<?php include "../includes/header.php"; ?>

    <div class="container">
        <div class="col-sm-6">
            <h1>Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="Create" class="btn btn-primary">
            </form>
        </div>        
    </div>


<?php include "../includes/footer.php"; ?>