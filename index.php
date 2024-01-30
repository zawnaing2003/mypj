<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 text-center" style="max-width: 600px;">
       
       <?php if(isset($_GET['register'])) : ?>
           <div class="alert alert-info my-2">
              Account Created.Please login!
           </div>
        <?php endif ?>
        <?php if(isset($_GET['suspended'])) : ?>
            <div class="alert alert-danger my-2">
                Your Account is suspended.
            </div>
        <?php endif ?>
       <?php if(isset($_GET['incorrect'])) : ?>
           <div class="alert alert-warning my-2">
               Incorrect Email or Password
           </div>
        <?php endif ?>
       <form action="_actions/login.php" method="post">
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
        <button class="btn btn-primary w-100 mb-2">Login</button>
       </form>
       <a href="register.php">Register</a>
    </div>
</body>
</html>