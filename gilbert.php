<?php
function call_name(){
    $name = "ALIHO GILBERT";
    return $name;
}
function my_age($current_year,$birth_year){
    $age=$current_year-$birth_year;
    return $age;
}

function my_home_address(){
    $address="kyanamira-kabale";
    return $address;
}

print("Welcome ".call_name());
print("<br> To ".my_home_address()."");
print (" <br>currently, you are ".my_age(2024,2002)." years old!");
?>
