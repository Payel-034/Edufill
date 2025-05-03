<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to LOGIN_REGISTER</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg login-card">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login to EDUFILL</h3>
                <form action="login_action.php" method="post">
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i> Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login" name="login_btn">
                    <!-- <button type="submit" class="btn btn-primary btn-block">Login</button> -->
                </form>

                <div class="text-center mt-3">
                    <a href="register.php">Don't have an account? Register</a><br>
                    <a href="forgot.php">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous"></script>
</body>
</html>
