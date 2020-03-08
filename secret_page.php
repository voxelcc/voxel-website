<?php require_once('protect_this.php'); ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.typekit.net/zlz7bjm.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="css/text/css" href="css/animate.css">

    <title>voxel.cc</title>
</head>

<?php
require('vendor/autoload.php');
$host = "ec2-54-246-89-234.eu-west-1.compute.amazonaws.com";
$user = "vulobmbnkqnevx";
$password = "4418595e233c039564958927a230ebcad953f1b9aa9748a5919c9ac17a5cb530";
$dbname = "ddi961ov6qbkvb";
$port = "5432";

try{
//Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


//create a pdo instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$kickstarteremail ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kickstarteremail"])) {
        $kickstarteremail = "";
    } else {
        $kickstarteremail = test_input($_POST["kickstarteremail"]);
        }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body class="d-flex flex-column h-100">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
        <h3><a href="shop">Shop</a></h3>
        <h3><a href="hub">Hub</a></h3>
        <h3><a href="hub">Projects</a></h3>
        <h4><a href="product">Starter&nbsp;Pack</a></h4>
        <h4><a href="product#upcoming">Upcoming&nbsp;Releases</a></h4>
        <h4><a href="about">About&nbsp;us</a></h4>
    </div>



    <nav class="navbar navbar-expand sticky-top">
        <div class="container justify-content-center">
            <ul class="nav navbar-nav flex-fill w-100 flex-nowrap">
                <li>
                    <div class="button-container d-inline-block" id="ben" onclick="openSideNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-fill justify-content-center d-none d-md-block">
                <li class="nav-item"><a class="navbar-brand" href="index ">voxel.cc</a></li>

            </ul>
            <ul class="nav navbar-nav flex-fill w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link d-none d-md-block" href="login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary" href="shop">Sign up</a>
                </li>
            </ul>

        </div>

    </nav>

    <footer class="footer mt-5 py-4">
        <div class="container">

            <div class="row">
                <div class="col-lg">
                    <h2><a href="shop">Shop</a></h2>
                    <h2><a href="hub">Hub</a></h2>
                    <h2><a href="hub">Projects</a></h2>
                </div>
                <div class="col-lg-5">
                    <h4><a href="product">Starter Pack</a></h4>
                    <h4><a href="product#upcoming">Upcoming Releases</a></h4>
                    <h4><a href="about">About us</a></h4>
                    <h4><a href="about">Get in touch</a></h4>
                </div>
                <div class="col-sm">
                </div>
            </div>
            <div class="row">
                <div class="col pt-5">
                    <p class="px-3" style="position:absolute; bottom:0; right:0;">&copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Voxel</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/main.js"></script>

    <script src="replaceme.min.js"></script>
 


</body>

</html>