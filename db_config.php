<?php
// Include Composer's autoload file to automatically load required classes and dependencies.
require_once 'vendor/autoload.php';

try {
// Create a new MongoDB client
// $client = new MongoDB\Client("mongodb://localhost:27010");
$client = new MongoDB\Client("mongodb+srv://anupmaharjan:winsurveyhub@winsurveycluster.xpynm.mongodb.net/?retryWrites=true&w=majority&appName=WINSurveyCluster");

// Access the 'db_WIN' database
$companydb = $client->db_win;
}
catch (Exception $e) {
    echo "Failed to connect to MongoDB: " . $e->getMessage();
}