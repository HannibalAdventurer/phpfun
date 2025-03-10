<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"> <!-- Fixed typo -->
    <title>Justfun</title>
</head>
<body>
    <h1>Welcome </h1>
<?php echo "firstcode"; 


/*
* Exercise: Employee Salary Calculator
* Problem Statement:
* Create a PHP program that calculates the total salary of employees based on their hours worked and hourly rate. The program should:

* Use a class to represent an employee.

* Use a for loop to iterate through a list of employees.

* Apply conditions to calculate bonuses or deductions based on hours worked.

?nasna3 programeee example mta3 
!5 5adema  
kol we7id yi5dem fama formulaire mitha 
!loul nada5el ism la9ab 
!mihna chnowa 5idma w 
!9adeh min se3a w 
!soum se3a mte3ou 
*/

function Add_user(){
if($_SERVER["REQUEST_METHOD"]== "POST"){
    for($i=0;$i<5;$i++){
        $name=$_POST['name'];
        $profesion=$_POST['profession'];
        $Workhours=$_POST['Workhours'];
    echo <<<"hello"
<br>
$name <br> $profesion <br> $Workhours 
hello;
    }
}
};
Add_user();

?>

<form method="post" action="">
<input type="text" name="name" placeholder="name & lastname">
<input type="text" name="profession" placeholder="Profession">
<input type="tel" name="Workhours" placeholder= "Work Hours">
<input type="submit" value="send"> 
</form>
</body>
</html>