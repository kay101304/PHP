<?

//Array

$arr=[1,2,3,4];
//print_r($arr);

$a=["小明"=>12,"小華"=>23,"小強"=>30,"阿國"=>40];

echo "<pre>";print_r($a);"</pre>";
echo "<br>";
echo $a["小明"];


//Array 維度

//二維陣列
//$a=[[1,2,3],[4,5,6],[7,8,9]];

$a=[
    "小明"=>["國文"=>32,"英文"=>60,"歷史"=>99],
    "小華"=>["英文"=>60,"數學"=>77],
    "小強"=>30,
    "阿國"=>40
];


echo "<pre>";print_r($a);"</pre>";
echo "<br>";

//Array function
$b="BBB";
echo "count(\$a)=>";
echo count($a);
echo "<hr>";
echo "is_array(\$a)=>";
echo is_array($a);
echo "<hr>";
echo "in_array(\$a)=>";
echo in_array(["國文"=>32,"英文"=>60,"歷史"=>99],$a);
echo "<hr>";
echo "sort(\$a)";
sort($a);
echo "<pre>";print_r($a);"</pre>";
echo "<hr>";
$a1=array_fill(2,7,"red");
echo "<pre>";print_r($a1);"</pre>";
?>