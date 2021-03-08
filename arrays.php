<?php
//   // create array
//     $fruits = ["banana", "apple","orange"];
//     echo '<pre>';
//     var_dump($fruits);
//     echo '</ pre>';
//   // Print the whole array

//   // get the element by array

//   $fruits[0] = 'peach';
//   echo '<pre>';
//   var_dump($fruits);
//   echo '</pre>';

//   isset($fruits[2]);// true
//   isset($fruits[3]);// false

//   // prints the length of array
//   echo count($fruits).'<br>';
//  $fruits[3]="banana";
//  echo count($fruits).'<br>';
//  echo '<pre>';
//  var_dump($fruits);
//  echo '</pre>';

// // add element at the end of an array

// array_push($fruits,'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // remove an element at the end of an array

// array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // insert element at the begining of the array

// echo array_unshift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// $string = "Samsung , Apple , Tesla";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

 

// // combnine array element into string
// echo implode("&",$fruits);

// // Merge two arrays

// $vegetables = ["Potato", "cuccumber"];
// echo '<pre>';
// var_dump(array_merge($fruits,$vegetables));
// echo '</pre>';



// // sorting of two array
// echo "<h1>Before Sorting</h1>";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// sort($fruits);
// echo "<h1>After sorting!</h1>";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // reverse sort
// echo "<h1>Before Reverse Sorting</h1>";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// rsort($fruits);
// echo "<h1>After Reverse sorting!</h1>";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Associative array
// echo "<h1>Associative array</h1>";
// $person = [
//     'name' => 'Brad',
//     'surname' => 'Traversy',
//     'age' => 21,
//     'hobbies' => ['Football','Video Games']
// ];
// // the basic differance between the var_dump and print_r is vardump gives the type and lenght of the variable

// echo '<pre>';
// print_r($person);
// var_dump($person);
// echo '</pre>';

// //get element by key 

// echo $person['name'].'<br>';

// // set element by key
// $person['channel']='TraversyMedia';
// echo '<pre>';
// var_dump($person);
// echo '</pre>';


// // Null coalescing assignment operator

// if(!isset($person['address'])){
//     $person['address'] = 'unknown';
// }

// echo '<pre>';
// var_dump($person);
// echo '</pre>';



// $person['movie'] = $person['movie'] ?? 'unkonwn';
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// // Two dimensional arrays

// echo "<h1>Two Dimensional arrays</h1>";
// $todos = [
//     ['title' => 'Todo title 1','completed' => 'true'],
//     ['title' => 'Todo title 2','completed' => 'false']
// ];

// echo '<pre>';
// var_dump($todos);
// echo '</pre>';



// // iterate over associative array
// echo "<h1>Associative Array</h1>";
//     $person = [
//         'name' => 'amin',
//         'surName' => 'tai',
//         'age' => 21,
//         'hobbies' => ['Cricket','Games'],
//     ];

//     foreach($person as $key => $value){
//         if(is_array($value)) {
//             echo $key . ' ' .implode(",",$value).'<br>';
//         } else {
//             echo $key. ' ' .$value.'<br>'; 
//         }
//     }



// // functions in php
// function sum(...$nums){
//     $sum=0;
//     foreach($nums as $n) {
//      $sum=$n + $sum;
//     }
//     return $sum;
// }  
// echo sum(1,2,3,4,5,6,10,11,100);


// print current date
echo date('Y-m-d H:i:s').'<br>';

// print yesterday 
echo date('Y-m-d H:i:s' , time() - 60*60*24).'<br>';

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>