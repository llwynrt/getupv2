<?php

require_once('assets/vendor/payplug-php/lib/init.php');
\Payplug\Payplug::setSecretKey('sk_test_6Cq6F8QNXgWcgV5ettctAW');

$input = file_get_contents('php://input');
try {
    $resource = \Payplug\Notification::treat($input);

    if ($resource instanceof \Payplug\Resource\Payment
        && $resource->is_paid 
        // Ensure that the payment was paid
        ) {
        // Process a paid payment.
    } else if ($resource instanceof \Payplug\Resource\Refund) {
        // Process the refund.
    }
}
catch (\Payplug\Exception\PayplugException $exception) {
    // Handle errors
}

/*
require_once('assets/vendor/payplug-php/lib/init.php');
use Payplug;

Payplug\Payplug::setSecretKey('sk_test_6Cq6F8QNXgWcgV5ettctAW');

$payment = Payplug\Payment::retrieve('pay_2zcjv1RwXL5K8PSEsfMvtt');

// Display informations about the payment:
echo "Amount: " . $payment->amount / 100 . " €";
echo "<br>Payment Id: " . $payment->id;
echo "<br>Is paid: " . var_export($payment->is_paid, true);
echo "<br>Creation date: " . date('d/m/Y H:i:s', $payment->created_at);
echo "<br>Paid at: " . date('d/m/Y H:i:s', $payment->hosted_payment->paid_at);

echo "<br>First name: " . $payment->customer->first_name;
echo "<br>Last Name: " . $payment->customer->last_name; 
echo "<br>E-mail: " . $payment->customer->email;

echo "<br>Customer Id: " . $payment->metadata['customer_id'];
echo "<br>Product Id: " . $payment->metadata['product_id'];*/

