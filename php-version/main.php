<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_GET != "" && $_GET != null){
        ?>
        <h1>wow you found the 404 page...</h1>
        <h1>Just kidding</h1>
        <?php
    }
    else{
        ?>
        <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="" placeholder="John"><br>
        <label for="lname">Maid:</label><br>
        <input type="text" id="email" name="email" value="" placeholder="test@example.com"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    }
    ?>
    
</body>
</html>