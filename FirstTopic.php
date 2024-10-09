<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstTopic</title>
</head>
<body>
    
    <?php
// Function to add two numbers and return the result
function addNumbers($num1, $num2) 

{
    $sum = $num1 + $num2;
    return $sum;
}

// Calling the function and storing the return value
$result = addNumbers(10, 20);

// Displaying the result
echo "The sum of 10 and 20 is: " . $result. "<br><br>";



// Function to multiply three numbers, with validation
function multiplyNumbers($a, $b, $c) {
    // Check if all inputs are numbers
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        $product = $a * $b * $c;
        return $product;
    } else {
        return "Error: All inputs must be numbers!";
    }
}

// Calling the function with valid numbers
$result1 = multiplyNumbers(2, 5, 10);
echo "The product of 2 * 5 * 10 is: " . $result1 . "<br><br>";


// Calling the function with an invalid input
$result2 = multiplyNumbers(2, "abc", 10);
echo $result2. "<br><br>";  // This will return an error message


// Function to sum all values in an array
function sumArray($numbers) {
    $sum = 0; // Initialize sum
    foreach ($numbers as $number) {
        $sum += $number; // Add each element to the sum
    }
    return $sum; // Return the total sum
}

// Example array
$myNumbers = [10, 20, 30, 40];

// Calling the function and storing the result
$result = sumArray($myNumbers);

// Display the result
echo "The sum of the array is: " . $result;

?>


</body> 
</html>

