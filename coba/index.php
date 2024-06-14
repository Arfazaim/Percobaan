<!DOCTYPE html>
<html>
  <head>
    <title>Login Page Rimbazzz</title>
  </head>
  <link rel="stylesheet" href="style.css" />
  <body>
    <form action="proses_login.php" method="POST">
      <div class="kotak_login">
        <img src="logonaga.png" alt="Logo" width="180" />
        <h1>Login</h1>
        <form>
          <input
          name="username"
            type="text"
            class="form-control"
            placeholder="Username"
            required
          />
          <input
          name="password"
            type="password"
            class="form-control"
            placeholder="Password"
            required
          />
          <div class="checkbox">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
          </div>
          <button type="submit" class="btn">Login</button>
          <?php if(isset($_GET['pesan'])) { ?> 
            <div class="error"> 
               <label><?php echo $_GET['pesan']; ?></label> 
            </div> 
         <?php } ?> 
          <p class="forgot-password"><a href="#">Forgot password?</a></p>
        </form>

        <p class="register">
          Don't have an account? <a href="new_user.html">Register now</a>
        </p>
      </div>
      <footer>
        <div class="download-link">
          <a href="#"><img src="gplaylogo.png"></a>
          <a href="#"><img src="appstorelogo.png"width:"10px"></a>
        </div>
        <div class="footer-link">
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
          <a href="#">Help</a>
        </div>
        <div class="watermark">
          <p>Copyright Rimbaz Computing Labolatories.LTD</p>
        </div>
      </footer>

     
    </form>
  </body>
</html>
