<?php include('../functions.php') ?>

<?php include('includes/admheader.php')?>
        <div class="header">
                <h2 class="text-4xl fw-lighter text-uppercase">Admin - create user</h2>
        </div>
        
        <form method="post" action="create_user.php">

                <?php echo display_error(); ?>

                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">
                        <label>User type</label>
                        <select name="user_type" id="user_type"  placeholder="select user type">
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                        </select>
                </div>
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                </div>
                <div class="input-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn btn-success" name="register_btn"> + Create user</button>
                </div>

                <a href="home.php" class="text-red-800 hover:text-red-500 text-decoration-underline hover:duration-500">&lt;&lt; back to home </a>
        
        </form>

        
        <?php include('includes/admfooter.php');?>