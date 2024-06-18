<?php
$error = isset($data['error']) ? $data['error'] : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../public/css/login.css" rel="stylesheet">
    <title> 程式自學系統 | 登入 </title>
</head>
<body>

<div class="auth-container">
    <?php if ($error): ?>
        <div class="error-container">
            <span class="error-message"><?php echo $error; ?></span>
            <button class="close-button">X</button>
        </div>
    <?php endif; ?>

    <div class="form-container">
        <h2 class="login-title"> Sign in </h2>
        <form method="post" action="login">
            <div class="form-group">
                <label for="username"> Username </label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password"> Password </label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <input type="submit" class="login-button" value="Login">
        </form>
    </div>
</div>

<script src="../public/js/login.js"></script>

</body>
</html>