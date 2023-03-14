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
    if ($_POST != "" && $_POST != null){
        ?>
        <?php
        if ($_POST['fname'] == "" || $_POST['fname'] == null || $_POST['email'] == "" || $_POST['email'] == null){
            ?>
            <form method="post">
            <label for="fname">First name:</label>
            <?php
                if ($_POST['fname'] == "" || $_POST['fname'] == null){
                    print("*THIS FIELD IS REQUIRED");
                }
                ?><br>
            <input type="text" id="fname" name="fname" value="" placeholder="John"><br>
            <label for="mail">Maid:</label>
            <?php
                if ($_POST['email'] == "" || $_POST['email'] == null){
                    print("*THIS FIELD IS REQUIRED");
                }
                else{
                    ?>
                    <script>
                        document.getElementById("fname").value = FormData["fname"]
                    </script>
                    <?php
                }
                ?>
                <br>
            <input type="email" id="email" name="email" value="" placeholder="test@example.com"><br><br>
            <input type="submit" value="Submit">
            <?php
        }
        else{

            ?>
            <h1>hi, this is an information page</h1>
            <?php 

            echo htmlspecialchars("Name: " . $_POST['fname']);?><br><br>
            <?php 
            echo htmlspecialchars("Email: ". $_POST['email']);?>
            <?php
        }
        ?>
        <?php
    }
    else{
        ?>
        <form method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="" placeholder="John"><br>
        <label for="mail">Maid:</label><br>
        <input type="text" id="email" name="email" value="" placeholder="test@example.com"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    }
    ?>
    
</body>
</html>