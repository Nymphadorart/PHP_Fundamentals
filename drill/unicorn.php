<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Are you .. ?</h3>
    <form action="" method = "get">
        <input type="radio" name = "species" value = "Human">
        <label for="Human">Human</label>
        <input type="radio" name = "species" value = "Cat">
        <label for="Cat">Cat</label>
        <input type="radio" name ="species" value = "Unicorn">
        <label for="Unicorn">Unicorn</label>
        <input type="submit" name = "submit" value = "Surprise !">
    </form>

    <?php

        $Human = <iframe src="https://giphy.com/embed/w3AOSBckIzlrod6YCa" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/helloall-pride-queer-human-w3AOSBckIzlrod6YCa">via GIPHY</a></p>;
        $Cat = <iframe src="https://giphy.com/embed/onOWJOc7U5GAE" width="480" height="253" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-sup-whats-up-onOWJOc7U5GAE">via GIPHY</a></p>;
        $Unicorn = <iframe src="https://giphy.com/embed/lNAjbd8WRhWFy" width="376" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/my-little-pony-lNAjbd8WRhWFy">via GIPHY</a></p>;
    
        echo($_GET['species'] == 'Human'? $Human : ($_GET['species'] == 'Cat' ? $Cat : $Unicorn));
    ?>
</body>
</html>


