<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="overlay"></div>
    <form action="/register" method="post" class="box">
        @csrf

        <div class="login-area">
            <h1>Register</h1>
            <br>
            <br>
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="username" class="username" id="username" placeholder="Username">
            </div>
            <div class="field">
                <span class="fa fa-envelope"></span>
                <input type="email" name="email" class="email" id="email" placeholder="E-mail">
            </div>
            <div class="field">
                <span class="fa fa-pen"></span>
                <input type="text" name="nim" class="nim" id="nim" placeholder="NIM">
            </div>
            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" class="password" id="password" required placeholder="Password">
                <span class="show">show</span>
            </div>
            <br>
            <input type="submit" name="register" class="submit" value="Register">
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