<?php

### Numeric Data Types

//1. **Integer (int)**: Whole numbers without decimal points.
   $integer = 42;

// 2. **Floating-Point (float)**: Numbers with decimal points.
   $float = 3.14159;


### Basic Arithmetic Operations

//3. **Addition (+)**:
   $sum = 5 + 3; // $sum = 8


// 4. **Subtraction (-)**:
   $difference = 10 - 4; // $difference = 6

// 5. **Multiplication (*)**:
   $product = 6 * 7; // $product = 42


// 6. **Division (/)**:
   $quotient = 12 / 4; // $quotient = 3

// 7. **Modulus (%)** (Remainder after division):
   $remainder = 10 % 3; // $remainder = 1


### Increment and Decrement

// 8. **Increment (++)**:
   $number = 5;
   $number++; // $number is now 6

// 9. **Decrement (--)**:
   $number = 8;
   $number--; // $number is now 7

### Math Functions

// 10. **abs()**: Get the absolute value of a number.
    $absolute = abs(-5); // $absolute = 5

// 11. **ceil()**: Round up to the nearest integer.
    $ceiled = ceil(3.4); // $ceiled = 4

// 12. **floor()**: Round down to the nearest integer.
    $floored = floor(3.9); // $floored = 3


// 13. **round()**: Round to the nearest integer.
    $rounded = round(3.5); // $rounded = 4


// 14. **sqrt()**: Calculate the square root.
    $squareRoot = sqrt(16); // $squareRoot = 4


### Generating Random Numbers

// 15. **rand()**: Generate a random integer between two numbers (inclusive).
    $random = rand(1, 10); // Random number between 1 and 10


### Number Formatting

// 17. **number_format()**: Format a number with thousands separators and decimal precision.
    $formatted = number_format(1234567.89, 2); // $formatted = "1,234,567.89"

### Constants

// 18. **PHP Constants**: PHP provides predefined constants like `PHP_INT_MAX`, `PHP_INT_MIN`, `M_PI`, and others for numeric operations.
$maxInt = PHP_INT_MAX; // Maximum integer value
$pi = M_PI; // Value of π (pi)

?>