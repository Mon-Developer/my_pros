<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" erl="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="login_page.css">

    <title>Log in page</title>
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1>Log in</h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class="bi bi-person"></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="password" required>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password</a>
            </div>

            <button type="submit" class="btn">Log in</button>
            <div class="register-link">
                <p>Don't have an account <span></span><a href="signup_Page.php"><span> Register</span></a></p>
            </div>




        </form>
    </div>

</body>

</html>