<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/logo.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form>
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <input name="email" type="text" placeholder="email@mail.com">
                <input name="password" type="password" placeholder="password">
                <div class="login-buttons">
                    <button class="login-button">Login</button>
                    <button>Sing up</button>
                </div>
                <div class=""
            </form>
        </div>
    </div>
</body>
