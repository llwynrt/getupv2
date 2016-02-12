<?php
require_once("assets/vendor/payplug-php/lib/init.php"); 

use Payplug;

// Loads your account's parameters that you've previously downloaded and saved
Payplug\Payplug::setSecretKey('sk_test_6Cq6F8QNXgWcgV5ettctAW');

// Create a payment request of €9.99. The payment confirmation (IPN) will be sent to "http://www.example.com/callbackURL"
$payment = Payplug\Payment::create(array(
        'amount'            => intval ($prix.'00'),
        'currency'          => 'EUR',
        'hosted_payment'    => array(
            'return_url'        => 'https://www.example.com/thank_you_for_your_payment.html',
            'cancel_url'        => 'https://www.example.com/so_bad_it_didnt_make_it.html'
        ),
        'notification_url'      => 'http://www.example.com/callbackURL'
));

// You will be able to find how the payment object is built in the documentation.
// For instance, if you want to get an URL to the payment page, you get do:
$paymentUrl = $payment->hosted_payment->payment_url;

// Then, you can redirect the user to the payment page
header("Location: $paymentUrl");
exit();