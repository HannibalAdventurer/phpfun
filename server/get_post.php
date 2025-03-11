<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get|Post</title>
</head>
<body> 
    <a href="http://localhost:8000/index.html">Return</a>
    <?php 
 function Add_user() {
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = isset($_POST['name']) ? $_POST['name'] : '';
         $profession = isset($_POST['profession']) ? $_POST['profession'] : '';
         $Workhours = isset($_POST['Workhours']) ? $_POST['Workhours'] : '';
 
         echo "<br> Name: $name <br> Profession: $profession <br> Work Hours: $Workhours";
     }
 }
 Add_user();
 
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
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>