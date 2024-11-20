<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to Crolla!</title>
    <link rel="stylesheet" href="login-styles.css">
</head>
<body>
    <div class="overall-login">
            <img class="logo" src="{{ asset('Crolla/Logo/crolla-loginlogo.png') }}" alt="Crolla Logo">
        <div class="login-box">
            <form action="" method="POST">
                <div class="input-group">
                    <label for="email">EMAIL</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-button">LOG IN</button>
            </form>
            <p class="sign-up-text">Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a></p>
            </form>
        </div>
            <img class="bg-phone" src="{{ asset('Crolla/Assets/cellphone bg.png')}}" alt="Crolla Pencil">
            <img class="img-btmright" src="{{ asset('Crolla/Assets/crow mascot with pencil.png')}}" alt="Crolla Pencil">
    </div>
</body>
</html>