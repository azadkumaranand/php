<?php

### Array Basics

// 1. **Creating an Array**:
   $array = array(); // or $array = []


// 2. **Initializing an Array**:
   $fruits = ["apple", "banana", "cherry"];


// 3. **Accessing Array Elements**:
   $firstFruit = $fruits[0]; // $firstFruit = "apple"


// 4. **Adding Elements to an Array**:
   $fruits[] = "date"; // Adds "date" to the end of the array


### Array Functions

// 5. **count()**: Count the number of elements in an array.
   $count = count($fruits); // $count = 4


// 6. **array_push()**: Add one or more elements to the end of an array.
   array_push($fruits, "elderberry", "fig");

// 7. **array_pop()**: Remove and return the last element from an array.
   $lastFruit = array_pop($fruits);


// 8. **array_shift()**: Remove and return the first element from an array.
   $firstFruit = array_shift($fruits);


// 9. **array_unshift()**: Add one or more elements to the beginning of an array.
   array_unshift($fruits, "apricot", "blueberry");


// 10. **array_merge()**: Merge two or more arrays.
    $moreFruits = ["grape", "kiwi"];
    $mergedArray = array_merge($fruits, $moreFruits);


// 11. **array_slice()**: Extract a portion of an array.
    $subset = array_slice($fruits, 1, 2); // Returns ["banana", "cherry"]


// 12. **array_key_exists()**: Check if a key exists in an array.
    $keyExists = array_key_exists(1, $fruits); // $keyExists = true


### Associative Arrays

// 13. **Associative Arrays**:
    $person = [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
    ];


// 14. **Accessing Associative Array Values**:
    $firstName = $person["first_name"]; // $firstName = "John"


### Multidimensional Arrays

// 15. **Multidimensional Arrays**:
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];


// 16. **Accessing Multidimensional Array Values**:
    $value = $matrix[1][2]; // $value = 6


// 17. **Iterating Through an Array**:
    foreach ($fruits as $fruit) {
        // Do something with $fruit
    }


// 18. **Sorting an Array**:
    sort($fruits); // Sorts the array in ascending order


// 19. **Reversing an Array**:
    $reversed = array_reverse($fruits);

