```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    //Check if it's an integer before summing
    if (is_int($number)) {
      $sum += $number; 
    } else {
        //Handle the error appropriately.  Here, we just skip non-integers.
        //You could throw an exception or use a different error-handling mechanism.
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Correct Sum

//Alternative: Using array_sum and filtering for integers
$intNumbers = array_filter($numbers, 'is_int');
$sum2 = array_sum($intNumbers);
echo "Sum (using array_sum): " . $sum2; //Correct Sum using array_sum
```