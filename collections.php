<?php
// Connect and Choose Database
require_once 'db_config.php';

// Define an array of collections
$collections = ['users', 'surveys', 'questions', 'resonpnses'];

// Loop through the array and create each collection.
foreach ($collections as $collectionName) {
    try {
        // Create a new collection using the current collection name from the array.
        $companydb->createCollection($collectionName);
    } catch (MongoDB\Driver\Exception\Exception $e) {
        // Handle any exceptions that occur during collection creation.
        echo "Failed to create collection '{$collectionName}': " . $e->getMessage() . "\n";
    }
}