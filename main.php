<?php
echo "666\n";

$result = 0;
$test = new test();

echo truc($result);
echo $test->$name;

function truc($result){
    for ($i = 0; $i < 101; $i++) {
        $result += $i;
    }
    return $result;
}

class test{
    public $name;
    public $color;


}
