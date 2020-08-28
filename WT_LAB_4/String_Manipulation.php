<?PHP
$strvalue =$_POST["strvalue"];

$selected_radio = $_POST['str'];

if ($selected_radio == 'Strlenfun') {
echo Strlen($strvalue)  . "<br><br></hr>";
echo <<<INFO
    <div class='card text-white bg-primary mb-3' >       <div class='card-body'> <p class='card-text text-white'>PHP has a predefined function to get the length of a string. Strlen() displays the length of any string. It is more commonly used in validating input fields where the user is limited to enter a fixed length of characters.</p> </div></div>    
    INFO;
}
else if ($selected_radio == 'Str_word_count') {

    echo Str_word_count($strvalue) . "<br><br></hr>";
    echo <<<INFO
    <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Another function which enables display of the number of words in any specific string is str_word_count(). This function is  also useful in validation of input fields.</p> </div></div>    
    INFO;
}
else if ($selected_radio == 'Strev'){

    echo strrev($strvalue) . "<br><br></hr>";
    echo <<<INFO
    <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Strrev() is used for reversing a string. You can use this function to get the reverse version of any string.</p> </div></div>    
    INFO;
}
else if ($selected_radio == 'Ucwords'){

    echo ucwords($strvalue) . "<br><br></hr>";
    echo <<<INFO
    <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Ucwords() is used to convert first alphabet of every word into uppercase.    </p> </div></div>    
    INFO;        
}
else if ($selected_radio == 'Stringtoupper'){

    echo strtoupper($strvalue) . "<br><br></hr>";
    echo <<<INFO
    <div class='card text-white bg-primary mb-3' >      <div class='card-body'> <p class='card-text text-white'>Strtoupper() is used to convert a whole string into uppercase.    </p> </div></div>    
    INFO;
}
else if ($selected_radio == 'Stringtolower'){

    echo strtolower($strvalue) . "<br><br></hr>";
    echo <<<INFO
    <div class='card text-white bg-primary mb-3' >   <div class='card-body'> <p class='card-text text-white'>Strtolower() is used to convert a string into lowercase.</p> </div></div>    
    INFO;
}
else {
    
    echo "select any one";
}

?>