<?

$score=50;

echo "成績：".$score."<br>";

if($score>=60){
    echo "pass";
}else{
    echo "fail";
}

echo "<hr>";

//判斷成績
/*
100-90 ->"A"
75-90 ->"B"
60-75 ->"C"
0-59 ->"D"

*/ 

$score=70;
echo "成績:" . $score;
echo "<br>";
echo "等級:" ;
if($score>=90){
    echo "A";
}else if ($score>=75){
    echo "B";
}else if($score>=60){
    echo "C";
}else{
        echo "D";
}

echo "<hr>";

//巢狀判斷式
if($score>=75){
    echo "B";
}else{
    if($score>=60){
        echo "C";
    }
}
echo "<hr>";

//閏年判斷

/*
公元年份除4不可整除，為平年
    ->除4可整除，為潤年
公元年份除4可整除；但100可整除，為平年
    ->除4可整除；且100不可整除，為閏年
公元年份除100可整除；但400不可整除，為平年
    ->除4且400可整除；但100不可整除，為閏年
    ->除4且400可整除；但3200不可整除，為閏年

*/ 

$year=2020;

//MOD 不為0
echo "西元：". $year . "<br>";
if($year%4 !=0){
    echo "平年"."<br>";    
}else{
    echo "閏年"."<br>";
}

//MOD 4為0
echo "西元：". $year . "<br>";

if($year%4 ==0){
    echo "閏年"."<br>";    
}else{
    echo "平年"."<br>";
}
echo "<hr>";

//可被4&400整除；不可被100整除
$year=2000;
echo "西元：". $year . "<br>";
if($year%4 ==0 && ($year%100 !=0 || $year%400==0)){
    echo "閏年"."<br>";
    }else{
    echo "平年"."<br>";
}
echo "<hr>";

//可被4整除；不可被100整除
$year=2100;
echo "西元：". $year . "<br>";
if($year%4 ==0 && $year%100 !=0){
    echo "閏年"."<br>";
    }else{
    echo "平年"."<br>";
}
echo "<hr>";
?>