<br>
Task 1 : 
<br>
<?php 
for($i=0;$i<=10;$i++){
    if($i <10 ){
  echo "$i-";
    }
    else echo "$i ";
}
?>
<br>
Task 2: 
<br>
<?php 
$sum=0;
for($i=0;$i<=30;$i++){
   $sum+=$i;
}
echo "The total of sum = $sum";
?>

<br>
Task 3: 
<br>
<?php
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    
    $char = chr(65 + $i);
    
    for ($j = 0; $j < $rows; $j++) {
        
        if ($j < $rows - 1 - $i) {
            echo "A ";
        } else {
            echo "$char ";
        }
    }
    
    echo "<br>";
}
?>

<br>
Task 4: 
<br>
<?php
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    
    $num = 1 + $i;
    
    for ($j = 0; $j < $rows; $j++) {
        
        if ($j < $rows - 1 - $i) {
            echo "1 ";
        } else {
            echo "$num ";
        }
    }
    
    echo "<br>";
}
?>

<br>
Task 5 :
<br>
<?php 
$rows =5;
for ($i=0;$i<$rows ;$i++){
    $num = 1 + $i;
    for ($j=0; $j<$rows;$j++){
        if ($j !=$i){
            echo"0";
        } else echo "$num";
    }
    echo "<br>";
}
?>
<br>
Task 6:
<br>
<?php 
$num=5;
$factorial=1;
for($i=1;$i<=$num;$i++){
$factorial *=$i;
}
echo $factorial;
?>

<br>
Task 7:
<br>
<?php 
$num=6;
$n1=0;
$n2=1;
$nextNumber=0;
for($i=0;$i<$num;$i++){
    echo $n1;
    $nextNumber=$n1+$n2;
    $n1=$n2;
    $n2=$nextNumber;
}

?>

<br>
Task 8:
<br>
<?php 
$str="Orange Coding Academy";
$count=0;
$charArray = str_split($str);

for($i=0;$i<count($charArray);$i++){
if($charArray[$i]=="c"||$charArray[$i]=="C"){
    $count +=1;
}
}
echo $count;
?>
<br>
Task 9:
<br>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            padding: 3px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<table cellpadding="3px" cellspacing="0px">
    <?php
   
    $rows = 6;
    $columns = 5;

   
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        
       
        for ($j = 1; $j <= $columns; $j++) {
            $result = $i * $j;
            echo "<td>$i * $j = $result</td>";
        }
        
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
<br>
Task 10:
<br>
<?php
for($i=1;$i<=50;$i++){
    if($i%3==0&&$i%5==0){
        echo "FizzBuzz ";
    } else if ($i%3==0){
        echo "Fizz ";
    } else if ($i%5==0){
        echo "Buzz ";
    } else echo "$i ";
} 
?>

<br>
Task 11:
<br>
<?php
$num=1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$num ";
$num++;
    }
  echo "<br>";
} 
?>
<br>
Task 12:
<br>
<?php
$rows = 5; // Define the number of rows for the pattern

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {
    // Loop to print letters 'A' to current row letter
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " "; // Print letters from 'A' onwards
    }
    echo "<br>"; // Move to the next line after each row
}

// Loop for the second half of the pattern (excluding the middle line)
for ($i = $rows - 1; $i >= 1; $i--) {
    // Loop to print letters 'A' to current row letter
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " "; // Print letters from 'A' onwards
    }
    echo "<br>"; // Move to the next line after each row
}
?>

<br>
task 13:
<br>
<?php
$array = [2, 4, 8, 4, 7, 4];
$uniqueArray =array_unique($array);
$uniqueString = implode(' ', $uniqueArray);
echo $uniqueString;
?>
<br>
Task 14:
<br>
<?php
function isPrime($n) {
    // Corner cases
    if ($n <= 1) {
        return false;
    }
    if ($n <= 3) {
        return true;
    }
    
    // Check for divisibility from 2 to sqrt(n)
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Test cases
$number1 = 7;
$number2 = 10;

// Check if $number1 is prime
if (isPrime($number1)) {
    echo "$number1 is prime.\n";
} else {
    echo "$number1 is not prime.\n";
}

// Check if $number2 is prime
if (isPrime($number2)) {
    echo "$number2 is prime.\n";
} else {
    echo "$number2 is not prime.\n";
}
?>
<br>
Task 2 :
<br>
<?php
$str = "reverse";
$reverseStr=strrev($str);
echo $reverseStr;
?>
<br>
Task 3 :
<br>
<?php
$str = "reverse";
if (ctype_lower($str)){
echo "Your string is Ok";
}else echo " Your string is not Ok";

?>
<br>
Task 4/5: 
<br>
<?php 
function swapV($a,$b){
    $_a=$a;
    $_b=$b;
     echo "a=$_a b=$_b ";
    $_a=$_a + $_b;
    $_b=$_a - $_b;
    $_a=$_a - $_b;
    echo "a=$_a b=$_b ";
}

swapV(12,10);
?>
<br>
Task 6 : 
<br>
<?php
$num = 9926315;
$numStr = (string)$num;
$numArray = str_split($numStr);


$sum=0;
for ($i=0 ;$i<count($numArray);$i++){
$x= $numArray[$i];
$sum +=pow($x,count($numArray));

}
if ($num == $sum ){
echo "true";
} else echo "false";

?>



