<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Floating labels example · Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
</head>



<body>
    <form method="POST" class="form-signin">
        <div class="text-center mb-4">
            <h4 class="mb-3 font-weight-normal">Login to Voxel Hub</h4>
        </div>
        <div class="form-label-group">
            <input style ="font-size: 22px;" type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input style ="font-size: 22px;" type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
            <label for="inputPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember-me" value="remember-me"> Remember me
            </label>
        </div>

        <?php
        /* Your password */
        $email = getenv('PELIN_EMAIL') ?: die('"PELIN_EMAIL" config var in found in env!');
        $password = getenv('PELIN_PASSWORD') ?: die('"PELIN_PASSWORD" config var in found in env!');
        
        /* Redirects here after login */
        $redirect_after_login = 'secret_page';

        /* Will not ask password again for */
        $remember_password = strtotime('+30 days'); // 30 days

        if (isset($_POST['password']) && isset($_POST['email'])) {
            if ($_POST['password'] == $password && $_POST['email'] == $email) {
                setcookie("password", $password, $remember_password);
                header('Location: ' . $redirect_after_login);
                exit;
            } else {
                echo("<h4 style='color:darkred;'>" . 'Invalid Login Credentials' . "</h4><br>");
            }
        }

        ?>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</body>

</html>