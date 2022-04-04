<?php
/*
echo "Hello world";
print("Helooooooooooo world");
*/
$name = "Abebe";
$age = 25;
echo "Name ".$name;
echo "<br>";
echo "Age ".$age;
echo "<hr>";
echo "My name is $name and am $age years old";


//arthmetic (+,-,/,%,*)
//logiacl(&&,||,!)
//relational (<,>,<=,>=,==,!=)
//assignment =
//compound assignment +=,-=
//array operator
//string operator
echo "<br>";
$x=8;
$y=9;
echo $x." + ".$y." = ".($x+$y);
echo "<br>";
//conditional if , if---else, switch
$role ="hod";
$dept ="IS";
if($role == "admin" || ($role == "hod" && $dept=="IS") )
{
echo "Welcome ".$role;
}

else{
    echo 'Student';
}
//switch

switch($role)
{
    case "admin":
        echo "Welcome ".$role;
     break;
     case "hod":
        echo "Welcome ".$role;
     break; 
             
}
?>