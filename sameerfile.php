<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        h1:hover{
            color:red;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
echo"<b><i> <h1> My php work </h1> </i></b>";
// $a = array("js","c#","C++");
// $b = "saad";
// $c = 89;
// $d = 90.78;
// $e = true;
// $f = null;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

// Index Array
// $abc = array("ali","shayan","hai","umer");
// echo $abc[2] . "<br>";
// echo $abc[3];

// ASSOCIATIVE ARRAY
// $xyz = array (
//     "name" => "sameer",
//     "email" => "sameerahmed@gmail.com"

// );

// echo "first Name: " . $xyz["name"] . "<br>";
// echo "Email: " . $xyz["email"] . "<br>";

// $NUM = array(6,5,4,3,2,1);
// rsort($NUM);
// print_r($NUM);

// object
class student {
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name= $name;
        $this->age = $age;
    }
    public function info(){
        echo "Name" . $this->name . "<br>";
        echo "Age"  . $this->age . "<br>";
    }
}
$ab = new student ("Ali",35);
$ab->info();
?>