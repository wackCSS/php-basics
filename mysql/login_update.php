<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
    if ($_POST['submit']) {
        updateTable();
    }
?>

<?php include "../includes/header.php"; ?>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_update.php" method="post">
                <h1>Update</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                 <div class="form-group">

                    <select name="id" id="">
                        <?php
                            showAllData();                                
                        ?>                       
                    </select>

                 </div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </form>
        </div>        
    </div>
<?php include "../includes/footer.php"; ?>