<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Google Analytics -->
    <?php require_once('head.php'); ?>
    <title>vShop</title>
</head>

<?php
require('vendor/autoload.php');

$host = "ec2-54-246-89-234.eu-west-1.compute.amazonaws.com";
$user = "vulobmbnkqnevx";
$password = "4418595e233c039564958927a230ebcad953f1b9aa9748a5919c9ac17a5cb530";
$dbname = "ddi961ov6qbkvb";
$port = "5432";

try {
    //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


    //create a pdo instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


// define variables and set to empty values
$message  = "";
$email = "";
$kickstarteremail = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kickstarteremail"])) {
        $kickstarteremail = "";
    } else {
        $kickstarteremail = test_input($_POST["kickstarteremail"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $email = "";
    } else {
        $email = test_input($_POST["email"]);
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
    <!-- Navbar -->
    <?php require_once('nav_bar.php'); ?>

    <main role="main" class="container flex-shrink-0">

        <div class="pt-5 mx-auto">

            <div class="row">
                <div class="col text-center">
                    <h2 class="text-break">Coming soon</h2>
                </div>

            </div>

            <div class="row mt-3 mb-3">
                <div class="col-md">
                    <p>Augment your smart home with handy environment sensors, brilliant dot matrix displays, and tactile inputs, modularised. Compatible with all your favourite devices.
                    </p>


                </div>
                <div class="col-md">
                    <p>Augment your smart home with handy environment sensors, brilliant dot matrix displays, and tactile inputs, modularised. Compatible with all your favourite devices.
                    </p>

                </div>
            </div>


            <div class="mb-4">
                <div class="kickstarter-box">
                    <h4>Sign up for <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/kickstarter.png" style="height: 25px"> updates</h4>
                    <p>Be the first to know:</p>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" name="kickstarteremail">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Sign up</button>
                            </div>
                        </div>
                        <?php
                        if ($kickstarteremail <> "") {
                            $query = "INSERT INTO kickstarterEmails(email) VALUES('$kickstarteremail')";
                            $pdo->query($query);
                            echo "Thanks!";
                        }
                        ?>
                        <small id="emailHelp" class="form-text text-muted mt-0">We'll never share your email with anyone else. Unsubscribe at any time.</small>
                    </form>

                </div>

            </div>



            <div class="mb-4">
                <div class="kickstarter-box mx-auto">
                    <h4>Thoughts, ideas and feedback</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <!--Insert this line into action ="" when ready for deploy: -->
                        <div class="form-group">
                            <label for="inputFeedback">For makers, by makers</label>
                            <textarea class="form-control" id="inputFeedback" rows="5" placeholder="What do you want to see from this project?" name="message"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary pull-right"></input>
                        <?php
                        if ($message <> "") {
                            $message = '<h2>Message:</h2><p>'  . $message . '</p>';
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
                            $mail->Subject = 'New Message Submission';
                            $mail->Body = $message;
                            $mail->IsHTML(true);
                            $mail->send();
                            echo ('<h4 style =" padding: 10px;">Thanks for your message! </h4>');
                        }
                        ?>
                        <small id="emailHelp" class="form-text text-muted">If you'd like a reply from us, include your details! </small>
                    </form>
                </div>
            </div>


            <div class="mb-4">
                <div class="kickstarter-box" style="margin-left: auto">
                    <h4>We need you!</h4>
                    <p>Calling all developers, smart home wizards and open source enthusiasts. Join our contributers Google Group:</p>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <p for="feedbackTextArea"></p>
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" value="Join"></input>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($email <> "") {
                                $query = "INSERT INTO googlegroupEmails(email) VALUES('$email')";
                                $pdo->query($query);
                                echo "Thanks!";
                            }
                            ?>
                            <small id="emailHelp" class="form-text text-muted">You will recieve an email soon inviting you to our Google group. You can leave at any time.</small>
                    </form>
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
                        <!-- BS4 Responsive Embed (https://parrot-tutorial.com/bootstrap4/util_embed ) -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/main.js"></script>


</body>

</html>