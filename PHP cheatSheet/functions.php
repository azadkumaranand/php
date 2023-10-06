<?php

### Defining Functions

// 1. **Function Declaration**:
/*
   function functionName($param1, $param2, ...) {
       // Function code here
   }
*/

//Example:
   function greet($name) {
       echo "Hello, $name!";
   }


// 2. **Function Parameters**:

//Parameters are variables that receive values when the function is called.
   function add($a, $b) {
       return $a + $b;
   }


### Calling Functions

// 3. **Calling a Function**:

//    Call a function by its name and provide the required arguments.
   greet("Alice"); // Calling the greet function


// 4. **Returning Values**:

//    Use `return` to send a value back from the function.
   $result = add(3, 5); // $result contains 8


### Function Scope

// 5. **Global Variables**:

//    Variables declared outside of functions are global and can be accessed from within functions.
   $globalVar = 42;

   function printGlobalVar() {
       global $globalVar;
       echo $globalVar;
   }


// 6. **Local Variables**:

//    Variables declared within a function are local to that function.
   function localScope() {
       $localVar = "Inside the function";
       echo $localVar;
   }


### Default Values

// 7. **Default Parameter Values**:

//    You can provide default values for function parameters.

   function sayHello($name = "Guest") {
       echo "Hello, $name!";
   }

   sayHello(); // "Hello, Guest!"
   sayHello("Alice"); // "Hello, Alice!"


### Variable Functions

// 8. **Variable Functions**:

//    You can call functions whose names are stored in variables.
   $funcName = "sayHello";
   $funcName("Bob"); // Calls the sayHello function


### Function Documentation

// 11. **Comments and Documentation**:

    // Use comments and docblocks to document your functions.

    /**
     * Adds two numbers.
     *
     * @param int $a The first number.
     * @param int $b The second number.
     * @return int The sum of $a and $b.
     */
    function adda($a, $b) {
        return $a + $b;
    }
?>