<?php

### 1. **for Loop**

/*

for (initialization; condition; increment/decrement) {
    // Code to be executed repeatedly
}

*/

// Example:
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}

### 2. **while Loop**

while (condition) {
    // Code to be executed repeatedly
}


// Example:
$count = 1;
while ($count <= 5) {
    echo "Iteration $count\n";
    $count++;
}


### 3. **do...while Loop**


do {
    // Code to be executed repeatedly
} while (condition);


// Example:
$count = 1;
do {
    echo "Iteration $count\n";
    $count++;
} while ($count <= 5);


### 4. **foreach Loop (for Arrays)**


foreach ($array as $value) {
    // Code to iterate through an array
}


// Example:
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

### 5. **foreach Loop (for Associative Arrays)**

/*
foreach ($associativeArray as $key => $value) {
    // Code to iterate through an associative array
}
*/

// Example:
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}

### 6. **break Statement**

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo "$i\n";
}


### 7. **continue Statement**

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Skip even numbers
    }
    echo "$i\n";
}


### 8. **Nested Loops**

// Loops can be nested inside each other to perform complex iterations.

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "($i, $j)\n";
    }
}

?>