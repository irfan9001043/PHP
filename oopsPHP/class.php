<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops</title>
</head>
<body>
    <?php
    
    class calculation{
        public $a, $b, $c

        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        function sub(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }
    }


    $c1 = new calculation();

    $c1->a = 20;
    $c1->b = 10;

    $c2 = new calculation();


    $c2->a = 50;
    $c2->b = 35;

    $c1->sum() . "\n";
    $c2->sub();
    
    
    
    
    ?>
</body>
</html>