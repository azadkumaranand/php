<?php

### 1. Required Fields

// - Check if required fields are not empty or filled out.

if (empty($_POST['field_name'])) {
    $errors[] = "Field is required.";
}


### 2. Text Validation

// - Validate text inputs for specific requirements.

#### a. Alphabetic Characters Only

if (!preg_match("/^[a-zA-Z]+$/", $_POST['text'])) {
    $errors[] = "Only alphabetic characters are allowed.";
}


// b. Numeric Characters Only

if (!is_numeric($_POST['number'])) {
    $errors[] = "Only numeric characters are allowed.";
}


// 3. Email Validation

// - Check if the input is a valid email address.

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}


// 4. Password Validation

// - Enforce password strength rules (e.g., minimum length, uppercase, lowercase, digit, special character).

$password = $_POST['password'];

if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/\d/", $password) || !preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password)) {
    $errors[] = "Password does not meet the criteria.";
}


### 5. Checkbox Validation

// - Check if at least one checkbox is selected.

if (!isset($_POST['checkbox_name'])) {
    $errors[] = "At least one option must be selected.";
}


// 6. Radio Button Validation

// - Ensure that one option is selected in a group of radio buttons.

if (!isset($_POST['radio_name'])) {
    $errors[] = "Please select an option.";
}


### 7. Select Box Validation

// - Ensure that a specific option is selected in a dropdown.

if ($_POST['select_name'] === 'default') {
    $errors[] = "Please select an option.";
}

// 8. File Upload Validation

// - Validate file uploads for type, size, and other requirements.


$allowedExtensions = ['jpg', 'jpeg', 'png'];
$maxFileSize = 2 * 1024 * 1024; // 2MB

$filename = $_FILES['file_upload']['name'];
$filesize = $_FILES['file_upload']['size'];
$fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($fileExtension, $allowedExtensions)) {
    $errors[] = "Invalid file type. Allowed types: " . implode(", ", $allowedExtensions);
}

if ($filesize > $maxFileSize) {
    $errors[] = "File size exceeds the maximum limit (2MB).";
}


### 9. Sanitization

// - Protect against SQL injection and other attacks by sanitizing user inputs.

$cleanedInput = filter_var($_POST['input'], FILTER_SANITIZE_STRING);


### 10. Displaying Errors

// - Display validation errors to the user.

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div>$error</div>";
    }
}


### 11. Server-Side Validation

// - Always validate input on the server-side, even if client-side validation is implemented.
// - Client-side validation can be bypassed.

