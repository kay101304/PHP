<?

//For loop
echo "<table border='1'>";
for($i=1;$i<10;$i++){ 
    echo "<tr>";
    for($n=1;$n<10;$n++){
        echo  "<td>". $i. " x " . $n . " = ". ($i*$n)."</td>" ;
    }
    echo "</tr>";
}
echo "</table>";
?>