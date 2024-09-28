<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Capture-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title> Login Page </title>
</head>

<body>

    <div class="container" id="container">
        
        <div class="form-container sign-up">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
      
                <span> use your email for registeration</span>
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password" minlength="8">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="loginn.php" method="post">
                <h1>Sign In</h1>
                <span>or use your email password</span>
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>