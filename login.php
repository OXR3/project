<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Drawing Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <!-- Login Section -->
    <section class="register-section"> <!-- استخدم نفس كلاس التسجيل -->
    <div class="register-box"> <!-- صندوق تسجيل الدخول بنفس شكل التسجيل -->
    <h2 class="title-one">Login to Your Account</h2>
    <form action="login_process.php" method="POST" class="register-form">
        <div class="form-group">
            <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-orange btn-block">
            <i class="fa-solid fa-sign-in-alt"></i> Login
        </button> <!-- نفس تنسيق زر التسجيل -->
    </form>
    <p class="text-center mt-3">Don't have an account? <a href="register.php">Register here</a></p>
</div>

<!-- Font Awesome Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

            <p class="text-center mt-3">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
