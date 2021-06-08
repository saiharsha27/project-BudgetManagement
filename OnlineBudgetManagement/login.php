<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Budget Calculator</title>
</head>
<body>


    <section class="text-center" id="loginpage">
        <div class="container login-container">
          <div class="row">
            <div class="col-md-6 login-form-1">
              <h3>Sign Up</h3>
              <form action="registration.php" method="post">
                <div class="form-group">
                    <input  type="text" name="user" class="form-control" placeholder="Username *" value="" required/>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group">
                    <input  type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
                </div>
                <div class="form-group">
                    <!-- <input type="submit" class="btnSubmit" value="Sign Up" /> -->
                    <button class="btnSubmit" onclick="alert('Sign Up Successful!');">Sign Up</button>
                </div>
              </form>

            </div>
            <div class="col-md-6 login-form-2">
              <h3>Login</h3>
              <form action="validation.php" method="post">
                <div class="form-group">
                    <input  type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group">
                    <input  type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
                </div>
                <div class="form-group">
                    <button class="btnSubmit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
