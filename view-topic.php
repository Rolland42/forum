<?php
require_once("db-connect.php");
$id = strip_tags($_GET['id']);
$sql = 'SELECT * FROM `topics` WHERE `id`=:id';
$query = $conn->prepare($sql);
$query->bindValue(':id', $id, PDO::PARAM_STR);
$query->execute();
$topic = $query->fetch();

$sql = 'SELECT * FROM `messages` WHERE `topic_id`=:id';
$query = $conn->prepare($sql);
$query->bindValue(':id', $id, PDO::PARAM_STR);
$query->execute();
$messages = $query-> fetchAll(PDO::FETCH_ASSOC);

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

    <h1><?=$topic['object']?>  </h1>
    <h2>Publié par <?=$topic['author']?>  </h2>
    <p><?=$topic['text']?> </p>


    <?php 
    foreach($messages as $message){
    ?>
        <h3><?=$message['author']?> dit :</h3> 
        <p>
        <?=$message['text']?>
        </p>
         <br>
     
     
<?php
    }
?>
    
    <form action="handler-message.php" method="post">

    <div>
        <label for="input-author">Auteur :</label>
        <input type="text" id="input-author" name="data-author">
   </div>
   
   <div>
            <label for="input-text">Texte</label>
            <textarea name="data-text" id="input-text" cols="30" rows="10" ></textarea>
   </div>
   
    <div>
        <input type="hidden" value="<?=$id?>" name="data-topic_id">
        <input type="submit" value="publier" >
    </div>

   </form>

<a href="index.php"><button>Revenir au forum</button></a>

</body>
</html>
        
    
    



