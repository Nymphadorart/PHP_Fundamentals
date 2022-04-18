<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ternary operators, exercise .</h2>
    <form action="" method = "get">

        <input type="radio" name = "gender" value = "male">
        <label for="male">Male</label>
        <input type="radio" name = "gender" value ="female">
        <label for="female">Female</label>
        <input type="submit" name = "submit" value = "Push here!">

    </form>

    <?php
        $Hello = "Hello ";

        echo($_GET['gender'] == "female" ? $Hello . "Miss !" : $Hello . "Mister !")

    ?>
</body>    
</html>