<?php require_once('./utils/loadClass.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center my-3">
            <button type="button" class="btn btn-success" id="on">On</button>

            <div id="text_on" style="display: none;">
                <p><?php $machine = new CoffeeMachine("Senseo");
                    echo $machine->turningOn();
                    ?></p>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="d-flex justify-content-center my-2">
            <button type="button" class="btn btn-light" id="boutonClic" class="bouton">
                Add a piece of sugar
            </button>
        </div>

        <p class="d-flex justify-content-center">
            You put <span id="nombreClics"> 0 </span> piece(s) of sugar.
        </p>

    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-danger" id="off">Off</button>
            <div id="text_off" style="display: none;">
                <p><?php $machine = new CoffeeMachine("Senseo");
                    echo $machine->turnOff();
                    ?></p>
            </div>
        </div>

        <script src="./main.js"></script>
</body>

</html>