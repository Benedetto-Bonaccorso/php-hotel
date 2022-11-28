
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP HOTEL</h1>
    <hr>
    <ul>
        <?php foreach($hotels as $hotel) : ?>

            <li>
                <h1>
                    <?php echo $hotel["name"]?>
                </h1>
            </li>
            <br>
            <li>
                <p>
                    <?php echo $hotel["description"]?>
                </p>
            </li>
            <li>
                <p>
                    <?php if($hotel["parking"] == 1){
                        echo "Parcheggio?: Sì";
                    }?>
                    <?php if($hotel["parking"] == 0){
                        echo "Parcheggio?: No";
                    }?>
                </p>
            </li>
            <li>
                <p>
                    <?php echo "voto " . $hotel["vote"] . "/5"?>
                </p>
            </li>
            <li>
                <p>
                    <?php echo "l'hotel si trova a " . $hotel["distance_to_center"] . " chilometri dal centro" ?>
                </p>
            </li>
        
        <?php endforeach; ?>
    </ul>
</body>
</html>
