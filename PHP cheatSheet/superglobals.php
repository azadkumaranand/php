<?php

### 1. $_GET

// Contains data sent to the script via HTTP GET method.
// Parameters are included in the URL.
// Accessed using keys in the associative array.
// Example:
$id = $_GET['id'];


### 2. $_POST

//Contains data sent to the script via HTTP POST method.
//Typically used for form submissions.
//Accessed using keys in the associative array.

// Example:
$username = $_POST['username'];


### 3. $_REQUEST

// Contains data from both `$_GET` and `$_POST`, as well as `$_COOKIE`.
// Should be used with caution due to security concerns.

$name = $_REQUEST['name'];


### 4. $_SESSION

//Stores session variables that can be accessed across different pages.
//Requires `session_start()` before use.
//Used for maintaining user-specific data.

// Example:
session_start();
$_SESSION['user_id'] = 123;

### 5. $_COOKIE

// - Contains cookies sent to the script.
// - Accessed using keys in the associative array.
// - Used for storing small amounts of data on the client-side.

// Example:
$cookieValue = $_COOKIE['user_cookie'];


### 6. $_SERVER

// - Contains information about the server and current request.
// - Accessed using keys in the associative array.
// - Provides details like request method, user agent, server information, etc.

// Example:
$serverName = $_SERVER['SERVER_NAME'];


### 7. $_ENV

// - Contains environment variables.
// - Typically used for system-level configuration.


$databaseUser = $_ENV['DB_USER'];


### 8. **`$GLOBALS`**

// - A superglobal that is not an array.
// - Contains all global variables.
// - Accessed by referring to variable names directly.

// Example:
$globalVar = 42;

function accessGlobal() {
    global $globalVar;
    echo $globalVar; // Access the global variable
}


### 9. $_FILES

// - Contains information about uploaded files in a form.
// - Accessed using keys in the associative array.
// - Used when handling file uploads.

// Example:
$uploadedFile = $_FILES['file_upload']['name'];

?>