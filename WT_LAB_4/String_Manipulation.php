<?PHP
$strvalue =$_POST["strvalue"];
$strvalue2 =$_POST["strvalue2"];
$selected_radio = $_POST['str'];

if ($selected_radio == 'Strlenfun') {
echo Strlen($strvalue)  . "<br><br></hr>";
echo "<div class='card text-white bg-primary mb-3' >       <div class='card-body'> <p class='card-text text-white'>PHP has a predefined function to get the length of a string. Strlen() displays the length of any string. It is more commonly used in validating input fields where the user is limited to enter a fixed length of characters.</p> </div></div> "; 
    
}
else if ($selected_radio == 'Str_word_count') {

    echo Str_word_count($strvalue) . "<br><br></hr>";
    echo   "<div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Another function which enables display of the number of words in any specific string is str_word_count(). This function is  also useful in validation of input fields.</p> </div></div>  ";
}
else if ($selected_radio == 'Strev'){

    echo strrev($strvalue) . "<br><br></hr>";
    echo " <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Strrev() is used for reversing a string. You can use this function to get the reverse version of any string.</p> </div></div> ";
}
else if ($selected_radio == 'Ucwords'){

    echo ucwords($strvalue) . "<br><br></hr>";
    echo "  <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Ucwords() is used to convert first alphabet of every word into uppercase.    </p> </div></div>    ";        
}
else if ($selected_radio == 'Stringtoupper'){

    echo strtoupper($strvalue) . "<br><br></hr>";
    echo "   <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Strtoupper() is used to convert a whole string into uppercase.    </p> </div></div>  ";
}
else if ($selected_radio == 'Stringtolower'){

    echo strtolower($strvalue) . "<br><br></hr>";
    echo "<div class='card text-white bg-primary mb-3' >   <div class='card-body'> <p class='card-text text-white'>Strtolower() is used to convert a string into lowercase.</p> </div></div> ";
}
elseif ($selected_radio == 'Strpos') {
    echo Strpos("$strvalue","$strvalue2");
    echo "<div class='card text-white bg-primary mb-3' >   <div class='card-body'> <p class='card-text text-white'>Strpos() enables searching particular text within a string. It works simply by matching the specific text in a string. If found, then it returns the specific position. If not found at all, then it will return “False”. Strops() is most commonly used in validating input fields like email.</p> </div></div> ";

}
elseif ($selected_radio == 'Str_repeat') {
    echo Str_repeat("$strvalue","$strvalue2");
    echo "<div class='card text-white bg-primary mb-3' >   <div class='card-body'> <p class='card-text text-white'>PHP provides a built-in function for repeating a string a specific number of times.</p> </div></div> ";

}
elseif ($selected_radio == 'Strcmp') {

    echo Strcmp($strvalue,$strvalue2);
    echo "<div class='card text-white bg-primary mb-3' >   <div class='card-body'> <p class='card-text text-white'>You can compare two strings by using strcmp(). It returns output either greater than zero, less than zero or equal to zero. If string 1 is greater than string 2 then it returns greater than zero. If string 1 is less than string 2 then it returns less than zero. It returns zero, if the strings are equal.</p> </div></div> ";

}
else {
    
    echo "<h1 style='color:red;'>select any one<h1>";
}

?>