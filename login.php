<?php include('functions.php') ?>
<?php include('includes/header.php') ?>
        <div class="header">
                <h2 class="text-4xl fw-bold text-uppercase">Login</h2>
        </div>
        <form method="post" action="login.php">

                <?php echo display_error(); ?>

                <div class="input-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" >
                </div>
                <div class="input-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn bg-cyan-800 hover:bg-blue-800 hover:duration-500 text-light" name="login_btn">Login</button>
                </div>
                <p>
                        Not yet a member? <a class="text-cyan-800 hover:text-blue-700 text-decoration-underline hover:duration-500" href="register.php">Sign up</a>
                </p>
        </form>
<?php include('includes/footer.php')?>