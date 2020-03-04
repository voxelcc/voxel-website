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
        <h2><a href="shop.php">Shop</a></h2>
        <h2><a href="hub.html">Hub</a></h2>
        <h2><a href="hub.html">Projects</a></h2>
        <h4><a href="product.html">Welcome&nbsp;Home&nbsp;Pack</a></h4>
        <h4><a href="product.html#upcoming">Upcoming&nbsp;Releases</a></h4>
        <h4><a href="about.html">About&nbsp;us</a></h4>
        <h4><a href="about.html">Get&nbsp;in&nbsp;touch</a></h4>
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
                <li class="nav-item"><a class="navbar-brand" href="index.php">voxel.cc</a></li>

            </ul>
            <ul class="nav navbar-nav flex-fill w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link d-none d-md-block" href="login.html">Login</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary" href="shop.php">Sign up</a>
                </li>
            </ul>

        </div>

    </nav>


    <main role="main">




        <div class="container flex-shrink-0 pt-5">

            <header class="mb-5">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/video.mp4" type="video/mp4">
                </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                            <h1>Own your<br> smart home</h1>
                            <a class="btn btn-lg btn-primary" href="shop.php">Video coming soon</a>

                        </div>
                    </div>
                </div>
            </header>


            <div class="row pt-5 pb-5">
                <div class="col-lg-7">
                    <h2 class="text-break pb-3">The smart home for <span class="replace-me1">freedom.<span style="display:none">,community.,privacy.</span></span>
                    </h2>



                    <!--                    <div class="row">-->
                    <!--                        <div class="col">-->

                    <h5>Not <span class="replace-me2">closed doors.<span style="display:none">,big tech.,big data.</span></span>
                    </h5>
                    <p>
                        From beginner to expert, our magnetic modules and intuitive software give you the tools and flexibility to create whatever you want. Compatible with all your favourite devices.
                    </p>
                    <!--                        </div>-->
                    <!--                        <div class="col">-->
                    <p>We’re designing our latest products around you; the crazy inventors, smart home wizards and new makers. We’re on a mission to bring open source smart homes to the world, powered by our amazing community. Join the movement.
                    </p>
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP2.gif" class="d-block d-lg-none h-100 w-100" style="object-fit: cover; max-height: 500px">

                    <div class="kickstarter-box mt-5">
                        <h4>Sign up for for <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/kickstarter.png" style="height: 25px"> updates: </h4>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-group pt-3">
                                <div class="form-label-group w-75">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="kickstarteremail">
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="input-group-append w-25">
                                    <button class="btn btn-primary" type="submit" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; height: 50px;">Go</button>
                                </div>
                            </div>
                            <?php
                            if ($kickstarteremail <> "") {
                                $kickstarteremail = '<h2>Kickstarter Email:</h2><p>' . $kickstarteremail . '</p>';
                                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                                $mail->isSMTP();
                                //$mail->SMTPDebug = 1;
                                $mail->CharSet = 'UTF-8';
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'tls';
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = '587';
                                $mail->Username = "isstracker2019@gmail.com";
                                $mail->Password = $bucket = getenv('GMAIL_PASSWORD') ?: die('No "GMAIL_PASSWORD" config var in found in env!');
                                $mail->SetFrom('isstracker2019@gmail.com');
                                $mail->addAddress('olithompson@rocketmail.com');
                                $mail->addAddress('team@voxel.cc');
                                $mail->Subject = 'New Kickstarter Email Submission';
                                $mail->Body = $kickstarteremail;
                                $mail->IsHTML(true);
                                $mail->send();
                                echo ('<h4 style ="padding: 10px;">Thanks!</h4>');
                            }
                            ?>
                            <small id="emailHelp" class="form-text text-muted mt-0">We'll never share your email with anyone else. Unsubscribe at any time.</small>
                        </form>
                    </div>

                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP2.gif" class="d-block h-100 w-100" style="object-fit: cover; max-height: 500px">
                </div>
            </div>



            <div class="row mt-5" style="background-color: aqua">
                <div class="col-lg-6 p-0">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP5.png" class="d-block h-100 w-100" style="object-fit: cover">
                </div>
                <div class="col-lg-6 mb-3 p-5">
                    <h2 class="pt-4 pb-4">Welcome home pack</h2>
                    <h6>Voxel’s first module pack: a powerful smart home controller, open-sourced. </h6>
                    <p>Augment your smart home with handy environment sensors, brilliant dot matrix displays and tactile inputs; modularised. Compatible with all your favourite devices. </p>
                    <a class="btn btn-primary" href="product.html">Explore</a>

                </div>
            </div>
        </div>



        <div style="background-color: aqua">

            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-5 mb-3">
                        <div class="pt-5 pb-5">
                            <h2>Why Voxel</h2>
                            <h6 class="pt-3">Complete freedom to create</h6>
                            <p>Build whatever you can dream up. Completely open source and customisable.</p>
                            <a class="btn btn-primary" href="product.html">Explore</a>
                            <a class="btn btn-primary" href="product.html">Tutorials</a>

                            <h6 class="pt-5">Built with privacy first</h6>
                            <p>Our business model is about selling great hardware, not your data. Find out more about us:</p>
                            <a class="btn btn-primary" href="about.html">About us</a>

                            <h6 class="pt-5">Join a growing movement</h6>
                            <p>Get ideas and support from the wonderful Voxel community. Share your creations with 1 click.
                            </p>
                            <a class="btn btn-primary" href="hub.html">Learn more</a>
                        </div>
                    </div>

                    <div class="col-lg-7">

                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/BA/BA1.jpg" class="d-block h-100 w-100" style="object-fit: cover">




                    </div>


                </div>



            </div>

        </div>





    </main>

    <div class="container-fluid">

        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body p-0">
                        <!-- BS4 Responsive Embed (https://parrot-tutorial.com/bootstrap4/util_embed.html) -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <footer class="footer mt-5 py-4">
        <div class="container">

            <div class="row">
                <div class="col-lg">
                    <h2><a href="shop.php">Shop</a></h2>
                    <h2><a href="hub.html">Hub</a></h2>
                    <h2><a href="hub.html">Projects</a></h2>
                </div>
                <div class="col-lg-5">
                    <h4><a href="product.html">Welcome Home Pack</a></h4>
                    <h4><a href="product.html#upcoming">Upcoming Releases</a></h4>
                    <h4><a href="about.html">About us</a></h4>
                    <h4><a href="about.html">Get in touch</a></h4>
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
    <script>
        var replace = new ReplaceMe(document.querySelector('.replace-me1'), {
            animation: 'animated faster flipInX', // Animation class or classes
            speed: 2000, // Delay between each phrase in miliseconds
            separator: ',', // Phrases separator
            hoverStop: false, // Stop rotator on phrase hover
            clickChange: false, // Change phrase on click
            loopCount: 'infinite', // Loop Count - 'infinite' or number
            autoRun: true, // Run rotator automatically
            onInit: false, // Function
            onChange: false, // Function
            onComplete: false // Function
        });
    </script>
    <script>
        var replace = new ReplaceMe(document.querySelector('.replace-me2'), {
            animation: 'animated faster flipInX', // Animation class or classes
            speed: 2000, // Delay between each phrase in miliseconds
            separator: ',', // Phrases separator
            hoverStop: false, // Stop rotator on phrase hover
            clickChange: false, // Change phrase on click
            loopCount: 'infinite', // Loop Count - 'infinite' or number
            autoRun: true, // Run rotator automatically
            onInit: false, // Function
            onChange: false, // Function
            onComplete: false // Function
        });
    </script>


</body>

</html>