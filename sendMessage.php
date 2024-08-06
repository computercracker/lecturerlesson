<?php
require 'vendor/autoload.php'; // Load the Twilio PHP SDK

use Twilio\Rest\Client;

// Twilio API credentials
$accountSid = 'YOUR_ACCOUNT_SID'; // Replace with your Account SID
$authToken = 'YOUR_AUTH_TOKEN'; // Replace with your Auth Token
$fromNumber = 'whatsapp:+14155238886'; // Twilio WhatsApp-enabled number
$toNumber = 'whatsapp:+0785354935'; // Recipient WhatsApp number

// Get the message from the request
$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'];

// Initialize the Twilio client
$client = new Client($accountSid, $authToken);

try {
    // Send the message
    $message = $client->messages->create(
        $toNumber,
        [
            'from' => $fromNumber,
            'body' => $message
        ]
    );

    // Return a success response
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    // Return an error response
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
