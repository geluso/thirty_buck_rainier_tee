<?php
include('secret.php');
require_once('stripe-php-2.1.2/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("$secret_key");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

$gender = htmlspecialchars($_POST['gender']);
$size = htmlspecialchars($_POST['size']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);

$fullAddress = "$name\r\n" .
  "$address\r\n" .
  "$city, $state $zip\r\n";

$subject = "Thirty Buck Rainier Tee Order Confirmation";
$message = "This confirms the order of one $size $gender tee to be sent to the following address:\r\n" .
  "\r\n" .
  "$fullAddress" .
  "\r\n" .
  "Thank you.";
$headers = 'From: orders@thirtybuckrainiertee.com' . "\r\n" .
    'Reply-To: orders@thirtybuckraniertee.com' . "\r\n" .
    'Bcc: stevegeluso+thirtybuckrainiertee@gmail.com' . "\r\n" .
    'Content-type: text/plain; charset=iso-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if ($token) {
  // Create the charge on Stripe's servers - this will charge the user's card
  try {
    $charge = \Stripe\Charge::create(array(
      "amount" => 3000, // amount in cents, again
      "currency" => "usd",
      "source" => $token,
      "description" => "Thirty Buck Rainier Tee",
      "receipt_email" => $email,
      "metadata" => array(
        "gender" => $gender,
        "size" => $size,
        "name" => $name,
        "email" => $email,
        "address" => $address,
        "city" => $city,
        "state" => $state,
        "zip" => $zip
      )
    ));

    // Send the confirmation email
    mail($email, $subject, $message, $headers);
  } catch(\Stripe\Error\Card $e) {
      // The card has been declined
  } catch(Stripe\Error\InvalidRequest $e) {
      // Reused token.
  }
}

?>

<html ng-app="app">
  <head>
    <title>Thirty Buck Rainier Tee</title>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Thirty Buck Rainier Tee" />
    <meta property="og:url" content="http://thirtybuckrainiertee.com" />
    <meta property="og:image" content="http://thirtybuckrainiertee.com/img/preview.png" />
    <meta property="og:description" content="Pay $30 to receive your own hand-stitched tee. No shipping. No taxes. Just tee. It's all stitched on basic Hanes tees. Just tell me what gender and size you prefer." />

    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="favicon-20.png" sizes="20x20">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="stars top"></div>

    <div class="container">
      <h1 class="center">Thirty Buck Rainier Tee</h1>
      <div class="row">
        <div class="col-xs-12 col-md-6 text-center tee">
          <img src="img/logo_on_tee_big_smaller_logo.png">
        </div>

        <div class="col-xs-12 col-md-6 order">
          <p>
          This confirms the order of one <?= $size ?> <?= $gender ?> tee to be sent to the following address:
          </p>

          <pre><?= $fullAddress ?></pre>

          <p>
          You'll receive an email confirming this order, and another email confirming when it is sent out.
          </p>

          <p>
          Contact <a href="mailto:support@thirtybuckrainiertee.com">support@thirtybuckrainiertee.com</a>
          if you have any questions.
          </p>

          <p>
          Thank you!
          </p>
        </div>
      </div>
    </div>

    <div class="stars bottom"></div>
  </body>
</html>
