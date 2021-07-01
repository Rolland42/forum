<?php
require_once("db-connect.php");
$sql = 'SELECT * FROM topics';
$query = $conn -> prepare($sql);
$query ->execute();
$results = $query-> fetchAll(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    
<?php 
    foreach($results as $result){
?>
         <a href="view-topic.php?id=<?=$result['id'] ?>"><?=$result['object']?></a>

         <br>
     
     
<?php
    }
?>
        
    <a href="form-topic.php"><button>nouveau-topic</button></a>
    



</body>
</html>