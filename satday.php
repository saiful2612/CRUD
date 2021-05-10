<?php

echo strip_tags("Hello World");


// $name= 'Riyaz';
// $money= 100000;

// echo "This is $name , his monthly income is $money USD in a year.  <br>";

// echo" var_dump($money)";

// echo "<br>";

// if ($money>= 15000){
//     echo "Brian Lara";
// }
// else{
//     echo " Virat Kohli";
// }


// echo "While Loop";

// $i=0;
// while($i<10){
//     echo $i;
//     echo "<br>";
//     $i= $i+1;
//     }

echo "<br>";

// $i=2;
// do{
//     echo "$i <br>";
//     $i = $i +1;
// }while($i<5);

// $arr=array('alu','lalu','kalu','shalu');
// $brr= "This is Riyaz";

// var_dump ($arr);
// echo "<br>";
// print_r ($arr);
// echo "<br>";
// print_r ($brr);

// echo "<br>";

// foreach($arr as $val){
//     echo "$val <br>";
// }

// echo "<br>";


// sum of array element by for each function


// $marks = [13,15,20,18,14];

// $sum = 0;
// foreach($marks as $val){
//     $sum = $sum+ $val;
// }
// echo $sum;


// sum of array element by a function 


// function Avrg($values){
//     $sum = 0;
//     foreach($values as $val){
//     $sum = $sum+ $val;
//     }
//     return $sum;
// }

// $marks = [13,17,20,18,14];
// $total = Avrg($marks);
// echo $total;

//  Associative array declaration

// $Obj =array(
//     'Mamun'=> 16,
//     'Maruf'=>25
// );
// // echo $Obj['val1'];

// foreach ($Obj as $key => $value) {
//      echo "The age of $key is $value <br>";
// }



//Multi Dimensional Array

// $val_arr = array(array(2,3,5),
//                 array(-1,4,6),
//                 array(0,4,6));

// for ($i=0; $i < count($val_arr) ; $i++) { 
//     for ($j=0; $j < count($val_arr[$i]) ; $j++) { 
//         echo $val_arr[$i][$j];
//         echo " ";
//     };
//     echo "<br>";
// }


$x=100;
$y=200;
$p=1000;

function check(){
    $a=38;
    $b=34;
    Global $x,$y;
    echo $a+$b;
    echo "<br>";
    echo $a+$x;
};

echo $x+$y;
echo "<br>";
echo $p+$y;
echo "<br>";

check()

// echo $p+$x;                // It is unexpected after function calling   

?>