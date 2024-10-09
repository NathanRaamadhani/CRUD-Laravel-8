<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="overlay"></div>
    <form action="/login" method="post" class="box">
        @csrf
        <div class="header">
            <h4>
                JURASSIC WORLD
            </h4>
            <p>Jurassic World: Fallen Kingdom tells the story of the aftermath of the tragedy that occurred on Isla
                Nublar, when the fate of the herd of Dinosaurs that inhabited the island was in danger.</p>
        </div>
        <div class="login-area">
            <h1>Sign In</h1>
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="username" class="username" id="username" placeholder="Username">
            </div>
            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" class="password" id="password" required placeholder="Password">
                <span class="show">show</span>
            </div>
            <input type="submit" name="submit" class="submit" value="Sign In">
            <a href=""> Forgot Password?</a>
            <a href="/register"> No have account? Register Now</a>
        </div>

        <!-- script show and hide password -->
        <script>
            const pass_filed = document.querySelector('.password');
            const show_btn = document.querySelector('.show');
            show_btn.addEventListener("click", function() {
                if (pass_filed.type === "password") {
                    pass_filed.type = "text";
                    show_btn.textContent = "hide";
                } else {
                    pass_filed.type = "password";
                    show_btn.textContent = "show";
                }
            })
        </script>

    </form>
</body>

</html>
