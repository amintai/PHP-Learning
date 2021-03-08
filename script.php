<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hello My Name is Amin</h1>";

    $x = 10;
    $y = 15;

    $z = $x+$y;
    echo "<h1>Sum:</h1>".$z;

    function printSomething(){
        echo "<h1>Hello From The Function</h1>";
    }
    printSomething();

    $x = 10;
    if($x < 11) {
        echo "<h1>Too low!</h1>";
    } else {
        echo "<h1>High</h1>";
    }

    $color = "green";
    switch($color) {
        case "red":
            echo "<h1>Your Color is red!</h1>";
            break;

        case "blue":
            echo "<h1>Your Color is blue!</h1>";
            break;
     
        case "black":
            echo "<h1>Your Color is Black!</h1>";
            break;
        default :
            echo "<h1>Hello!</h1>";
    } 


    $colors = array("red", "green" , "blue" , "yellow");

    foreach($colors as $i){
        echo "<h1>Value : $i</h1>";
    }


    function addNumbers($a , $b){
        return $a+$b;
    }

   echo addNumbers(5,10);

   $cars = ["Tesla","Ferarri", "audi"];
   foreach($cars as $i){
       echo "<h1>car:$i</h1>";
   }

   echo "<h1>Associative array</h1>";
    $person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 21,
    'hobbies' => ['Football','Video Games']
];

    echo '<h1><pre>';
    var_dump($person);
    echo '</pre></h1>';
    ?>
</body>
</html>