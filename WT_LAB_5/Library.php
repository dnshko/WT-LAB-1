<?php
function cube($n){  
	return $n*$n*$n;  
}  
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
} 
function areaSquare($side) 
{ 
    $area = $side * $side; 
    return $area; 
} 
function isEvenOrOdd($num){      
        if( $num % 2 == 0)
            return 1; 
        else
            return 0; 
}
function sumof($a){  
      
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($a);$i++)  
 {  
  $rem=$a%10;  
   $sum = $sum + $rem;  
   $a=$a/10;  
  }  
    return $a =$sum;
}
function primenumber($s){
    
    $input=$s;  
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo 'The Number '. $input . ' is not prime';  
}  else {  
   echo 'The Number '. $input . ' is prime';  
   }   
}
function FactorialProgram($s){
    $num = $s;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  

}

?>  

