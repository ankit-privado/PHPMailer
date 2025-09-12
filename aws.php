<?php

require_once 'vendor/autoload.php'; // Composer autoload

use Segment\Analytics;

// Initialize the Analytics client
Analytics::init("YOUR_WRITE_KEY", [
    "debug" => true, // Optional: logs for debugging
]);

// Example PII object
$pii = [
    'adId' => 'user-1234'
];

// Example parameters (traits)
$parameters = [
    'email' => 'user@example.com',
    'name'  => 'John Doe'
];

// Send the identify call
Analytics::identify([
    "userId" => $pii['adId'],
    "traits" => $parameters
]);

// Optionally flush the queue
Analytics::flush();
