

<?php


// $x = "irfan khan";
// echo $x . "<br>";
// var_dump($x);


// $y = '5000';
// echo $y . "<br>";
// var_dump($y);



//  $a = "2500.50";
//  echo $a . "<br>";
//  var_dump($a);


//  $b = true;
//  echo $b . "<br>";
//  var_dump($b);


// $c = array("car", "bike", "cycle");
// echo $c[2] ."<br>";
// var_dump($c);

// $sub = array("HTML","JAVA","CSS","PHP");
// var_dump($sub);


// class Mobile{
//     var $model;   //properties
//     function showModel($number){
//         global $model;
//         $model = $number;
//         echo "model Number is: $model";
//     }

//     function showModel($number){
//         $model = $number;
//         echo "model Number is: $model";
//     }
// }

// $sumsung = new Mobile;
// $sumsung->showModel('A8');



// class fruit{
//     public function __construct($name) {
//         $this->name = $name;
//     }
//     function show($lastName){
//         echo $this->name ." === " . $lastName;
//     }
//     function create($name){}
// }
// $obj = new fruit('shakir');
// print_r($obj->show('irfan'));


 class car{
    public function __construct($petrol = '') {
        //petrol khali nhi h
        if(!empty($petrol)){
            $this->petrol = 'petrol h<br>';
        }else{
            $this->petrol = 'petrol nhi h<br>';
        }
    }
    function start($abc='raki',$test=false){
        echo $abc,$test;
    }
    function stop(){
        echo $this->start();
    }
 } 
//  public
//  private
//  protected
 $carObj = new car('dsaf');
//  print_r($carObj->start('dasf'));
 print_r($carObj->stop());



 
//  class home{
        
//     function open($irfan,$test){
//         echo $irfan,$test;
//     }
//     function close($ifu,$dku){
//         // echo $this->close();
//         echo $ifu,$dku;
        
//     }
//  }

//  $rakib = new home();
//  print_r($rakib->open('vccv ','dhyd'));
//  print_r($rakib->close('dhd','dhdy'));
?>