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

echo "<hr>";
echo "For loop<br>";
for ($i =1;$i<=10;$i++)
{
    echo "Number ".$i."<br>";
}
echo "<hr>";
echo "while loop<br>";
$w=10;
while($w>=1)
{
    echo "Number ".$w."<br>"; 
    $w--;
}
echo "<hr>";
echo "Do while";
$d=100;
do{
    echo "Number ".$d."<br>"; 
    $d--; 
}while($d>=90);
echo "<hr>";
echo "foreach <br>";
$numbers = array(20,30,40,50,60,70,80,90);
foreach($numbers as $number)
{
    echo "Number ".$number."<br>";
}

echo "<hr>";
echo "Accessing indexed array elements <br>";
echo "First element ".$numbers[0]."<br>";
echo "fourth element ".$numbers[3]."<br>";

echo "Find 70 in the collection <br>";
$lenght = count($numbers);
for($j= 0; $j< $lenght;$j++)
{
    if($numbers[$j]==70)
    {
        echo "Find at ".$j;
    }
}


//reading assignment array builtin methods

$age = array("abebe"=>23,"almaz"=>18);
echo "<hr>";
echo "Abebe is ".$age['abebe']." years old<br>";
echo "<hr>";
echo "Multidimentional array <br>";
$users = array (array("Abebe","kebede","Almaz"),
                array("Admin","student","hod")
                

);
echo "Accessing multidimentional array elements <br>";
echo "User ".$users[0][0]." role ".$users[1][0]."<br>";





?>