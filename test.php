<style>
/* tr：是橫的(列)；td是直的(行) */
table{
    border:1px solid #999;
    padding:10px;
}

table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;
}
table tr:nth-child(1),
table td:nth-child(1){
    background: #bbb;
}
</style>

<?
echo "<table border='1'>";
for($i=0;$i<10;$i++){
    //判斷第一列第一格是否要空白
    if($i==0){
        echo "<tr><td></td>";
    }else{
        echo "<tr><td>".$i."</td>";
    }
    for($n=1;$n<10;$n++){
        //判斷第一列如何呈現
        if($i==0){
            echo  "<td>". $n ."</td>" ;
        }else{
            echo  "<td>". ($i*$n)."</td>" ;
        }
    }
    echo "</tr>";
}
echo "</table>";
?>