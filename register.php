<?php include('functions.php') ?>
<!--  -->
<?php include('includes/header.php') ?>
<div class="header">
        <h2 class="text-4xl fw-bold text-uppercase">Register</h2>
</div>
  <form method="post" action="register.php">
    <?php echo display_error(); ?>
          <div class="input-group mb-4">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $username; ?>">
          </div>
          <div class="input-group mb-4">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="input-group mb-4">
                  <label>Password</label>
                  <input type="password" name="password_1">
          </div>
          <div class="input-group mb-4">
                  <label>Confirm password</label>
                  <input type="password" name="password_2">
          </div>
          <div class="input-group">
                  <button type="submit" class="btn bg-cyan-800 hover:bg-blue-900 duration-500 text-light" name="register_btn">Register</button>
          </div>
          <p>
                  Already a member? <a class="text-cyan-500 hover:text-blue-700 text-decoration-underline duration-500" href="login.php">Sign in</a>
          </p>
  </form>
  <?php include('includes/footer.php')?>