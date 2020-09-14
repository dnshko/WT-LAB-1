
<?php
require("library.php");
		$a=$_POST["siz1"];
		if(isset($_POST["r1"]))
		{
			if($_POST["r1"]=='l')
			{
				$s=isEvenOrOdd($a);
				if($s==1)
				echo "$a is even number";
				else
				echo "$a is odd number";
			}
			if($_POST["r1"]=='r')
			{
				$s=areaSquare($a);
				echo "The Area of Square is $s";
			}if($_POST["r1"]=='s')
			{
				$s=cube($a);
				echo "The Cube of value is $s";			
			}
			if($_POST["r1"]=='u')
			{
				if(isLeap($a)==1)
				echo "$a is leap year";
				else
				echo "$a is not a leap year";			
            }            
			if($_POST["r1"]=='sum')
			{               
                $s=sumof($a);
                echo "Sum of digits is $s";  	
            }                       
			if($_POST["r1"]=='pn')
			{               
                $s=primenumber($a); 							
            }
            if($_POST["r1"]=='fp'){
                $s=FactorialProgram($a);
            }
        }
		?>
