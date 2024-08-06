<?php
// Custom error handling function
function customError($errno, $errstr, $errfile, $errline, $errcontext) {
    echo "<b>Error:</b> [$errno] $errstr - $errfile:$errline";
    echo "<br>";
    echo "Context: " . print_r($errcontext, true);
    echo "<br>";
    // You could add additional logic here, like logging the error to a file
}

// Set custom error handler
set_error_handler("customError");

// Error reporting level - report all errors
error_reporting(E_ALL);

// Trigger an E_NOTICE level error (undefined variable)
echo $undefinedVariable; 

// Trigger an E_WARNING level error (including a nonexistent file)
include("nonexistentfile.php");

// Using die() function to handle a fatal error
if (!file_exists("importantfile.txt")) {
    die("File not found. Terminating script.");
}

// Custom function to demonstrate E_PARSE level error
function testFunction() {
    // Uncomment the next line to trigger a parse error
    // echo "Parse error
}

// Trigger an E_ERROR level error (undefined function)
nonExistentFunction();
?>
