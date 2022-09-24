<?php
include 'config.php';

session_start();

error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form
            name="formSignIn"
            id="formSignIn"
            method="post"
            action="login.php"
            class="sign-in-form"
          >
            <h2 class="title">Sign in</h2>
            <!-- sign in username-->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="userName" value="<?php echo $userName; ?>" placeholder="Username" required />
            </div>
            <!-- sign in password-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="userPass" value="<?php echo $_POST['userPass']; ?>" placeholder="Password" />
            </div>
            <!-- sign in button-->
            <input type="submit" name="login" class="btn solid" value="Sign in" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form
            action="register.php"
            class="sign-up-form"
            id="registrationForm"
            method="post"
          >
            <h2 class="title">Sign up</h2>
            <!-- sign up username-->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                name="userName"
                class="userName"
                placeholder="Username"
              />
            </div>
            <!-- sign up email-->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="userEmail" placeholder="Email" />
            </div>
            <!-- sign up phone-->
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="number" name="userPhone" placeholder="Phone" />
            </div>
            <!-- sign up password-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="userPass" placeholder="Password" />
            </div>
            <!-- sign up address-->
            <div class="input-field">
              <i class="fas fa-house-user"></i>
              <input type="text" name="userAddress" placeholder="Address" />
            </div>
            <!-- sign up profile image-->
            <div class="upload-image">
              <input
                type="file"
                class="upload-box"
                accept="image"
                name="userPhoto"
                onchange="loadFile(event)"
                placeholder="insert your Profile Picture"
              />
            </div>
            <!-- sign up button-->
            <input type="submit" name="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Have you any account?</h3>
            <p>
              Please sign in the portal by the required username and password
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script  src="Validator/validation.js"></script>
  </body>
</html>
