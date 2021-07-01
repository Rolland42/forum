<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    

    
    <form action="handler-topic.php" method="post">

    <div>
        <label for="input-author">Auteur :</label>
        <input type="text" id="input-author" name="data-author">
   </div>
   
   <div>
            <label for="input-object">Topic</label>
            <textarea name="data-object" id="data-object" ></textarea>
   </div>
   <div>
            <label for="input-text">Texte</label>
            <textarea name="data-text" id="input-text" cols="30" rows="10" ></textarea>
   </div>
   
    <div>
        <input type="submit" value="publier" >
    </div>



   </form>
</body>
</html>