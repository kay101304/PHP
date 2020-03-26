<style>
*{
    font-family:"Courier New";
    line-heigot: 16px;
}
</style>

<?

//直角三角形
for ($i=1;$i<6;$i++){
    for ($n=1;$n<=$i;$n++){
        echo "*";
    }  
echo "<br>";
}
echo"<hr>";

//倒直角
for ($i=1;$i<=5;$i++){
    for ($n=6;$n>$i;$n--){
        echo "*";
    }  
echo "<br>";
}
echo "<hr>";

//正三角
for ($i=0;$i<5;$i++){
    for ($w=0;$w<(4-$i);$w++){
        echo "&nbsp";
    }
    for ($n=0;$n<($i*2+1);$n++){
        echo "*";
    }  
echo "<br>";
}
echo"<hr>";


//菱形

//第一種
for ($i=0;$i<5;$i++){
    for ($w=0;$w<(4-$i);$w++){
        echo "&nbsp";
    }
    for ($n=0;$n<($i*2+1);$n++){
        echo "*";
    }  
echo "<br>";
}
for ($i=3;$i>=0;$i--){
    for ($w=0;$w<(4-$i);$w++){
        echo "&nbsp";
    }
    for ($n=0;$n<($i*2+1);$n++){
        echo "*";
    }  
echo "<br>";
}
echo"<hr>";


//第2種

for($i=0;$i<9;$i++){
//用判斷式決定t的值，再用t的值來決定空白及*的記號
if($i<=4){
    $t=$i;
}else{
    $t=8-$i;
}

//印空白
for($w=0;$w<(4-$t);$w++){
    echo "&nbsp";
}

//印星星
for($n=0;$n<($t*2+1);$n++){
        echo "*";
}
   
echo "<br>";
}
echo"<hr>";




//矩形

for($i=0;$i<5;$i++){
    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo "*";
        }
}else{

    for($k=0;$k<5;$k++){
        if($k==0 || $k==4){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
}
echo "<br>";
}
echo "<hr>";

//矩形

for($i=0;$i<5;$i++){
    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo "*";
        }
}else{

    for($k=0;$k<5;$k++){
        if($k==0 || $k==4 || $k==$i || $k==(4-$i)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
}
echo "<br>";
}
echo "<hr>";


//變數

$x=10;

for($i=0;$i<=$x-1;$i++){
    if($i==0 || $i==($x-1)){
        for($j=0;$j<=($x-1);$j++){
            echo "*";
        }
}else{

    for($k=0;$k<$x;$k++){
        if($k==0 || $k==($x-1) || $k==$i || $k==($x-$i-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
}
echo "<br>";
}
echo "<hr>";
?>