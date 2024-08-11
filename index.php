<?php
// Display PHP version
echo "<h1>PHP Test Page</h1>";
echo "<p>This is a simple PHP test page.</p>";
echo "<p>Current PHP version: " . phpversion() . "</p>";

// Display server information
echo "<h2>Server Information:</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// Display date and time
echo "<h2>Current Date and Time:</h2>";
echo "<p>" . date("Y-m-d H:i:s") . "</p>";
?>
