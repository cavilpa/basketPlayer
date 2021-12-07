<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador de Basket</title>
</head>
<body>
    <?php
        include_once './player.php';

        $player1 = new player();

        $player1->setNombre('Juan');
        $player1->setDorsal(17);
        $player1->setEdad(25);

        $player1->informacion();

        $player2 = new player();
        $player2->informacion();
    ?>
</body>
</html>