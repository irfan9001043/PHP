<?php
// class papa{
//     public function __construct() {
//         echo 'autocall<br>';
//     }
//     public function info(){
//         echo "papa<br>";
//     }
// }
// class beta extends papa{
//     public function show($name){
//         echo $name;
//     }
// }
// $objPapa = new papa();
// $objPapa->info();


// $objBeta = new beta();
// $objBeta->info();
// $objBeta->show('beta');


// class s{
//     public function __construct() {
//         echo "autocall<br>";
//     }
//     public function info($fruit,$vag){
//         echo $fruit;
//     }
// }

// class a extends s{
//     public function irfan($name)
// }

// $s = new s();
// $s->info('banana','sdafsd');

// class rakib {
//     public function __construct(){
//         echo "autocall<br>";
//     }
//     public function info($irfan){
//         echo "rakib ki lani hai muj $irfan<br>";
//     }
// }

// class irfan extends rakib{
//     public function sahil($name){
//         echo $name;
//     }
// }

// // $objrakib = new rakib("king");
// // $objrakib->info("photo or kya");


// $objirfan = new irfan();
// $objirfan->info  ('fd');
// $objirfan->sahil("fyaz");




// class car{
//     public function __construct(){
//         echo irfankhan;
//     }

//     public function info(){
//         echo khan saab
//     }
// }

// class on extends car{
//     echo 
// }



// class papa{
//     public function __construct() {
//         echo  'autocall <br>';
//     }

//     public function info(){
//         echo 'papa';
//     }
// }

// class beta extends papa{
//     public function rakib($name){
//         echo $name;
//      }
//  }

//   $objpapa = new papa();
//   $objpapa->info();


//   $objBeta = new beta();
//  $objBeta->info();
//  $objBeta->show('beta');






class home {
    public function __construct(){
        echo 'rakib<br>';
    }
    public function irfan(){
        echo 'nadeem<br>';
    }
}
    class ghar extends home{
        public function kalu($name){
          echo $name;
        }
    }

$objkiran = new home();
$objkiran->irfan();


$objkiran = new ghar();
$objkiran->irfan(); 
$objkiran->kalu('ghar');
    
?>