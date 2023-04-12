<!--  count 5 to 15 -->
<?php
for ($i = 5; $i <= 15; $i++) {
  echo " $i<br>";
}
?>
<br>
<!-- print hello world -->
<?php
echo"<br>Hello world";
?>
<br>
<br>

<!-- Student grade -->
<?php
$marks= 92;

if($marks>=90){
    echo"Grade A+";

}else if($marks>=80){
    echo"Grade A";

}elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} elseif ($marks >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

?>
<br>

<br>


<!-- Factorial -->
<?php

$a=5;
 $n=1;
if($a>1){
for ($i=2;$i<=$a;$i++){
$n*=$i;
}}
echo $n;
?>
<br>
<br>

<?php
for($i=0;$i<=5;$i++){        
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
?>
<br>
<!-- displays the capital and country name -->
<?php
$list = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris", 
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", 
    "Spain" => "Madrid", 
    "Sweden" => "Stockholm", 
    "United Kingdom" => "London", 
    "Cyprus" => "Nicosia", 
    "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", 
    "Estonia" => "Tallin", 
    "Hungary" => "Budapest", 
    "Latvia" => "Riga", 
    "Malta" => "Valetta", 
    "Austria" => "Vienna", 
    "Poland" => "Warsaw"
);

// sort the list by the name of the capital
asort($list);

// display the capital and country name for each entry
foreach($list as $country => $capital) {
    echo $capital . " is the capital of " . $country . "<br>";
}
?>

<br>
<br>

<!-- palindrome -->
<?php

$a="madan";
function palindrome($a){
    $b=strrev($a);
  if ($b===$a){
 echo "palindrome";
 }else{
 echo "not palindrome";
 }
 }
 palindrome($a)
 ?>
<br>
<br>
<!-- swap two variables -->

 <?php
 $a=19;
 $b=21;
 echo "Numbers before:\n";
 echo "a= ".$a." b= ".$b;
 $temp=$a;
 $a=$b;
 $b=$temp;
 echo "<br>Numbers after swapping:";
 echo "a= ".$a." b= ".$b;

 ?>

 <br>
 <br>

 <!-- print multiples -->
<?php

define("a",5);
for ($i=1;$i<=10;$i++){
$mult=$i*a;
echo $mult;
echo "<br>";
}
?>
<br>

<!-- armstrong number -->
<?php

 $number=153;
 $sum=0;
 while ($number!=0){
 $x=$number%10;
 $sum+=$x**3;
 $number/=10;
 }
 if($number==$sum){
 echo $number." is a armstrong number";
 }
 else{
 echo $number." is not a armstrong number";
 }
 echo $sum;

 ?>


