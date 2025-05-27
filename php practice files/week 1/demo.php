<?php
echo "Asking if Number is Odd or Even\n";
$num = readline("Enter a number: ");

$num = err_handling($num); 
function err_handling($arg_num) : int { // Error handling function
    if ($arg_num === false) {
        echo "Error reading input.\n";
        exit(1);
    }
    if (!is_numeric($arg_num)) {
        echo "Please enter a valid number.\n";
        exit(1);
    }
    if ($arg_num < 0) {
        echo "Please enter a non-negative number.\n";
        exit(1);
    }
    $arg_num = (int)$arg_num; // Convert to integer

    return $arg_num;
}

function isEven($arg_num) : bool {
    return $arg_num % 2 == 0;
}

//Output
if (isEven($num)) {
    echo "The number is: Even\n";
}
else {
    echo "The number is: Odd\n";
}

?>


<?php
// TODO: You will ask the user to input a number then it will display starting from the number inputted down to 0 if it’s prime or not

echo "Asking if Number is a Prime Number or Not\n";

function isNumberAPrime($number) : bool {
    if ($number < 2) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $sqrtNumber = sqrt($number);
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = readline("Enter a number: ");
$number = err_handling($number);

for ($ctr = 2; $ctr <= $number; $ctr++) {
    if (isNumberAPrime($ctr)) {
        echo "{$ctr} is a prime\n";
    }
    else {
        echo "{$ctr} is not a prime\n";
    }
}

?>

<?php
// # Using composer to install dependencies.
// The following dependencies will be use for this activity:
// - [X] cocur/slugify - https://packagist.org/packages/cocur/slugify
// - [X] ramsey/uuid - https://packagist.org/packages/ramsey/uuid
// - [X] fakerphp/faker - https://packagist.org/packages/fakerphp/faker -->

// Type command composer require <dependency_name> to your terminal.

// Once installed, copy the code below to import and use the dependencies. Fix issues if necessary.
// 
// require __DIR__ . '/vendor/autoload.php';
// use Cocur\Slugify\Slugify;
// use Ramsey\Uuid\Uuid;
// use demi\timelog\TimeLog;
// $slugify = new Slugify();
// echo $slugify.slugify("This is the new sample text.");
// $uuid = Uuid::uuid4();
// echo $uuid->toString();
// $faker = Faker\Factory::create();
// echo $faker->name();
// echo $faker->email();
// echo $faker->text();
// 
// Test your code if it's working by typing “php demo.php” in the terminal. Make sure that it points to your working
// directory.

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use demi\timelog\TimeLog; // What is this for?

$slugify = new Slugify();
echo $slugify->slugify("This is the new sample text.\n");

$uuid = Uuid::uuid4();
echo $uuid->toString();
echo "\n";

$faker = Faker\Factory::create();
echo $faker->name();
echo "\n";
echo $faker->email();
echo "\n";
echo $faker->text();
echo "\n";
?>