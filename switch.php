<?
$score=88;
$level="";

if($score>=90){
    $level = "A";
}else if ($score>=75){
    $level = "B";
}else if($score>=60){
    $level = "C";
}else{
    $level = "D";
}

echo "成績：" . $score;
echo "<br>";
echo "Level：". $level."<br>";

switch($level){
    case "A":
        echo  "Excellent";
    break;
    case "B":
        echo  "Good";
    break;
    case "C":
        echo  "Normal";
    break;
    case "D":
        echo  "Bad";
    break;
}

echo "<br>";


if($score>=60){
    echo "pass"."<br>";
}else{
    echo "fail"."<br>";
}

$result="";
    if($score>=60){
        $result="pass";
    }else{
        $result="fail";
    }
echo $result."<br>";

$result=($score>=60)?"pass":"fail";
echo $result."<br>";

echo "<br>";
?>