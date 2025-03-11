<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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
</body>
</html>