<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
    if ($_POST['submit']) {
        deleteRows();
    }
?>

<?php include "../includes/header.php"; ?>
    <div class="container">
        <div class="col-sm-6">
            <h1>Delete</h1>
            <form action="login_delete.php" method="post">
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
                <input type="submit" name="submit" value="Delete" class="btn btn-primary">
            </form>
        </div>        
    </div>
<?php include "../includes/footer.php"; ?>