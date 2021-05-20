<?php
echo "Name: Phutiwat Luekiatpaisan";
echo "<br>"; echo "<br>";
echo "62010661";
echo "<br>";
echo strlen("Hello World!");
echo "<br>";
echo strpos("Hello World!","World!");
echo "<br>";


$b = array("z","B","c","d","a");
echo implode($b);
echo "<br>";
sort($b);
echo implode($b);
echo "<br>";
natcasesort($b);
echo implode($b);
echo "<br>";
echo "<br>";

$a = array(1,2,3);
for ($i=0; $i<=2;$i++){
echo $a[$i];
}
unset($a[1]);
echo $a[1];
echo $a[2];
$b = array(1,2,3,4,5,6,7,8);
array_splice($b,3,6); 
echo implode($b);


$x=1;
$sum;
$a=0;
$b=1;
echo "<table style=\"width:55%;\">";
for($a = 0 ; $a < 10 ; $a++){
    echo "<tr>";
    for($b=1 ; $b<=12 ; $b++){
        $sum = $x * $b;
        if($sum % 2 === 1 && $a !== 0 && $b !== 1){
            echo "<td></td>";
            continue;
        }
        echo "<td>".$sum."</td>";
    }
    $x+=1;
    echo "<br>";


}

echo "</table>";

$i=0;
$j=0;
$x=9;
$y=1;
echo "<table>";
for($a=0 ; $a< 10 ;$a++){
    echo "<tr>";
    for($i=0 ; $i<= $x ;$i++){
        echo "<td></td>";
    }
    for($j=0 ; $j< $y ;$j++){
        echo  "<td>"."0"."</td>"; 
    }
    for($i=0 ; $i<= $x ;$i++){
        echo "<td></td>";
    }
    $x--;
    $y+=2;
    echo "</tr>";
    echo "<br>";
}
for($a=0 ; $a< 11 ;$a++){
    echo "<tr>";
    for($i=0 ; $i<= $x ;$i++){
        echo "<td></td>";
    }
    for($j=0 ; $j< $y ;$j++){
        echo  "<td>"."0"."</td>"; 
    }
    for($i=0 ; $i<= $x ;$i++){
        echo "<td></td>";
    }
    $x++;
    $y-=2;
    echo "</tr>";
    echo "<br>";
}
echo "</table>";

echo "<br>";
echo "<br>";



$string = "Let’s test xx and xYz check";
$word = array("xx", "yy", "xYz");
$i = 0;
for($i =0  ; $i<count($word)  ; $i++){
// Test if string contains the word 
if(strpos($string, $word[$i]) != false){
    $string = str_replace($word[$i],"XXX", $string);
} 
}
echo $string;

?>