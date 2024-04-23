<?php
// Task 1: Get PHP version and configuration information
function task1() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    phpinfo();
}

// Task 2: Display specific strings
function task2() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    echo "Tomorrow I'll learn PHP global variables.\n";
    echo "This is a bad command: del c:\\*.*\n";
}

// Task 3: Swap two variables
function task3() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $a = 15;
    $b = 27;
    echo "Before swapping:\n";
    echo "a = $a and b = $b\n";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swapping:\n";
    echo "a = $a and b = $b\n";
}

// Task 4: Remove duplicates from a sorted list
function task4() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $nums = array(1, 1, 2, 2, 3, 4, 5, 5);
    $nums_unique = array_values(array_unique($nums));
    print_r($nums_unique);
}

// Task 5: Print "Hello PHP" using a PHP variable
function task5() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $message = "Hello PHP";
    echo $message."\n";
}

// Task 6: Print "Welcome to the PHP World" using variables and direct echo
function task6() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $message = "Welcome to the ";
    echo $message . "PHP World\n";
}

// Task 7: Reverse a string
function task7() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $str = "Tutorials Class";
    echo strrev($str)."\n";
}

// Task 8: Find the length of a string
function task8() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $str = "Tutorials Class";
    echo strlen($str)."\n";
}

// Task 9: Count words in a string
function task9() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $sample_words = "This is Tutorials Class, learn programming here.";
    echo str_word_count($sample_words)."\n";
}

// Task 10: Convert all characters in a string to uppercase
function task10() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $str = "Tutorials Class";
    echo strtoupper($str)."\n";
}

// Task 11: Print two PHP variables using a single echo statement
function task11() {
    echo '<a href="index.php">Back to Main</a><br><br>';

    $message_1 = "Good Morning.";
    $message_2 = "Have a nice day!";
    echo $message_1 . " " . $message_2."\n";
}
?>
