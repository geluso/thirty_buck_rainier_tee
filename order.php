<?php
require_once('stripe-php-2.1.2/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_rJQw13EMX93Xx4ONXU9M82WB");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

$gender = $_POST['gender'];
$size = $_POST['size'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];


if ($token) {
  // Create the charge on Stripe's servers - this will charge the user's card
  try {
    $charge = \Stripe\Charge::create(array(
      "amount" => 3000, // amount in cents, again
      "currency" => "usd",
      "source" => $token,
      "description" => "Thirty Buck Rainier Tee")
    );
  } catch(\Stripe\Error\Card $e) {
      // The card has been declined
  } catch(Stripe\Error\InvalidRequest $e) {
      // Reused token.
  }
}

?>

<html ng-app="app">
  <head>
    <title></title>
    <link rel="icon" href="http://5tephen.com/img/cheeseplane.gif" type="image/gif"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="favicon-20.png" sizes="20x20">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/angular.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/canvas.js" type="text/javascript"></script>
    <script src="js/controller.js" type="text/javascript"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body ng-controller="Controller">
    <div class="stars top">
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
    </div>

    <div class="container">
      <h1 class="center">Thirty Buck Rainier Tee</h1>
      <div class="row">
        <div class="col-xs-12 col-md-6 text-center tee">
          <img src="img/tee_transparent.png">
        </div>

        <div class="col-xs-12 col-md-6 order">
          <p>
          This confirms the order of one <?= $size ?> <?= $gender ?> tee to be sent to the following address:
          </p>

<pre>
<?php
echo "$name\n";
echo "$address\n";
echo "$city, $state $zip";
?>
</pre>
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


    <div class="stars bottom">
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
      <i class="glyphicon glyphicon-star"></i>
    </div>
  </body>
</html>
