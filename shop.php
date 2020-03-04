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

    <title>voxel.cc</title>
</head>

<?php
require('vendor/autoload.php');

// define variables and set to empty values
$message  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
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
<?php

if (php_sapi_name() != 'cli') {
    throw new Exception('This application must be run on the command line.');
}

/**
 * Returns an authorized API client.
 * return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig('googleaccountapikey.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}


// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Sheets($client);
echo("connected");

// Prints the names and majors of students in a sample spreadsheet:
// https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
$spreadsheetId = '1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms';
$range = 'Class Data!A2:E';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

if (empty($values)) {
    print "No data found.\n";
} else {
    print "Name, Major:\n";
    foreach ($values as $row) {
        // Print columns A and E, which correspond to indices 0 and 4.
        printf("%s, %s\n", $row[0], $row[4]);
    }
} ?>


<body class="d-flex flex-column h-100">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
        <h3><a href="shop.php">Shop</a></h3>
        <h3><a href="hub.html">Hub</a></h3>
        <h3><a href="hub.html">Projects</a></h3>
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
                <li class="nav-item"><a class="navbar-brand" href="index.html">voxel.cc</a></li>

            </ul>
            <ul class="nav navbar-nav flex-fill w-100 justify-content-end">
                <li class="nav-item">
                    <!--                    <a class="nav-link d-none d-md-block" href="login.html">Login</a>-->
                </li>

                <li class="nav-item">
                    <!--                    <a class="btn btn-primary" href="shop.php">Sign up</a>-->
                </li>
            </ul>

        </div>

    </nav>


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

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Sign up</button>
                        </div>

                    </div>

                    <small id="emailHelp" class="form-text text-muted mt-0">We'll never share your email with anyone else. Unsubscribe at any time.</small>
                </div>

            </div>



            <div class="mb-4">
                <div class="kickstarter-box mx-auto">
                    <h4>Thoughts, ideas and feedback</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>">
                        <!--Insert this line into action ="" when ready for deploy: -->
                        <div class="form-group">
                            <label for="inputFeedback">For makers, by makers</label>
                            <textarea class="form-control" id="inputFeedback" rows="5" placeholder="What do you want to see from this project?" name="message"></textarea>

                            <small id="emailHelp" class="form-text text-muted">If you'd like a reply from us, include your details! </small>
                            <?php
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
                                    echo ('<br><h3 style ="font-size: 20px;"> Thanks for your message </h3><br>');
                                ?>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" value="Clear">Submit</button>
                </div>
            </div>


            <div class="mb-4">
                <div class="kickstarter-box" style="margin-left: auto">
                    <h4>We need you!</h4>
                    <p>Calling all developers, smart home wizards and open source enthusiasts. Join our contributers Google Group:</p>



                    <div class="form-group">
                        <p for="feedbackTextArea"></p>

                        <div class="input-group">


                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Join</button>
                                </div>

                            </div>




                        </div>
                        <small id="emailHelp" class="form-text text-muted">You will recieve an email soon inviting you to our Google group. You can leave at any time.</small>



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
                    <h3><a href="shop.php">Shop</a></h3>
                    <h3><a href="hub.html">Hub</a></h3>
                    <h3><a href="hub.html">Projects</a></h3>
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


</body>

</html>