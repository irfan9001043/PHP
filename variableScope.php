<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable scope</title>
</head>
<body>
    <?php


    // indexed array
    // $colors = ["red", "green", "blue", "yellow"]; 
    // foreach($colors as $key => $val){
    //     // print_r($myArray[$key]."<br>");
    //     print_r($key."======".$val."<br>");
    // };
    // // associative array 
    // $myArray = [
    //     'name'=>'shakir',
    //     'class'=>'12',
    //     'subject'=>'hindi',
    //     'action'=>'edit',
    // ];

    // foreach($myArray as $key => $val){
    //     // print_r($myArray[$key]."<br>");
    //     print_r($key."======".$val."<br>");
    // };



    // $x = 5; // global scope
 
    // function myTest() {
    //   // using x inside this function will generate an error
    //   echo "<p>Variable x inside function is: $x</p>";
    // } 
    // myTest();
    
    // echo "<p>Variable x outside function is: $x</p>";


    // function myTest() {
    //   $x = 5; // local scope
    //   echo "<p>Variable x inside function is: $x</p>";
    // } 
    // myTest();
    
    // // using x outside the function will generate an error
    // echo "<p>Variable x outside function is: $x</p>";


    // $x = 5;
    // $y = 10;
    
    // function myTest() {
    //   global $x, $y;
    //   $y = $x + $y;
    // } 
    
    // myTest();  // run function
    // echo $y; // output the new value for variable $y



    echo "we are you right thinks only  you can happy face ever year<br>";
    $a = 98; //global variable 
    $b = 9;
      function irfankhan(){
        // $a = 97;  //local variable

        global $a, $b; //give me the access to this global variable
        $a = 100;
        $b = 1000;
        echo "<br>the value of your  variable a is $a and b is $b";
      }
      echo $a;
      irfankhan();
      echo "<br>the value of your  variable a is $a and b is $b";
      echo "<br>";
      // echo var_dump($GLOBALS);
      echo var_dump($GLOBALS["a"]);
      echo var_dump($GLOBALS["b"]);
      // echo var_dump($GLOBALS);


    ?>
</body>
</html>