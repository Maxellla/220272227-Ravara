<?php
//Activity 1: Number Counter
//Counting from 1 to 10:
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>

<?php
//Printing even numbers from 1 to 20:
$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}
?>

<?php
//Activity 2: Password Validator
do {
    echo "Please enter the password: ";
    $input = trim(fgets(STDIN));
    if ($input !== "password123") {
        echo "Incorrect password.\n";
    }
} while ($input !== "password123");
echo "Access Granted.\n";
?>

<?php
//Activity 3: Multiplication Table

for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "\n";
}
?>

<?php
//Activity 4: Loop Control with break and continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 8) {
        break;
    }
    echo $i . " ";
}
?>

<?php
//Activity 5: Sum of Numbers
$sum = 0;
$i = 1;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of numbers from 1 to 100 is: $sum";
?>

<?php
//Activity 6: Array Iteration with foreach
$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". " . $movie . "\n";
}
?>

<?php
//Activity 7: Key-Value Pairs with foreach
$student = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];
foreach ($student as $key => $value) {
    echo "$key: $value\n";
}
?>

<?php
//Activity 8: Factorial Calculator
$number = 5;
$factorial = 1;
for ($i = $number; $i > 0; $i--) {
    $factorial *= $i;
}
echo "Factorial of $number is: $factorial";
?>

<?php
//Activity 9: FizzBuzz Challenge
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
?>

<?php
//Activity 10: Prime Number Checker
$number = (int)readline("Enter a number: ");
$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

<?php
//Activity 11: Fibonacci Sequence
$a = 0;
$b = 1;
echo "$a $b ";

$count = 2;
while ($count < 10) {
    $next = $a + $b;
    echo "$next ";
    $a = $b;
    $b = $next;
    $count++;
}
?>

<?php
//Activity 12: Reverse a String
$string = "Hello World";
$reversed = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

echo "Reversed string: $reversed";
?>
