<?php

### 1. **if Statement**

if (condition) {
    // Code to execute if the condition is true
}


// Example:
$age = 25;
if ($age >= 18) {
    echo "You are an adult.";
}


### 2. **if...else Statement**
if (condition) {
    // Code to execute if the condition is true
} else {
    // Code to execute if the condition is false
}


// Example:
$grade = 75;
if ($grade >= 70) {
    echo "Pass";
} else {
    echo "Fail";
}


### 3. **if...elseif...else Statement**
if (condition1) {
    // Code to execute if condition1 is true
} elseif (condition2) {
    // Code to execute if condition2 is true
} else {
    // Code to execute if no condition is true
}


// Example:
$score = 85;
if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} else {
    echo "C";
}


### 4. **switch Statement**
switch (expression) {
    case value1:
        // Code to execute if expression matches value1
        break;
    case value2:
        // Code to execute if expression matches value2
        break;
    // ...
    default:
        // Code to execute if expression doesn't match any case
}


// Example:
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's the start of the week.";
        break;
    case "Friday":
        echo "It's almost the weekend.";
        break;
    default:
        echo "It's an ordinary day.";
}


### 5. **Ternary Operator (?:)**
$variable = (condition) ? value_if_true : value_if_false;


// Example:
$age = 20;
$message = ($age >= 18) ? "You are an adult." : "You are not an adult.";
echo $message;

### 6. **Null Coalescing Operator (??)**
$variable = $value ?? $default_value;


// Example:
$username = $_POST['username'] ?? 'Guest';
echo "Hello, $username";


### 7. **isset() and empty() Functions**
// `isset()` //checks if a variable is set and not null.
// `empty()` //checks if a variable is empty (equal to `false`, `0`, an empty string, or `null`).

// Example:
if (isset($name)) {
    echo "Name is set and not null.";
}

if (empty($email)) {
    echo "Email is empty or not set.";
}

?>