<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 6.1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .auto {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
        }

        .skupi {
            background-color: #ffdddd;
            border: 2px solid red;
        }
    </style>
</head>
<body>

<?php

$json = '{
    "ime": "Marko",
    "prezime": "Marić",
    "automobili": [
        {
            "marka": "BMW",
            "model": "320d",
            "godina": 2020,
            "registriran": true,
            "cijena": 25000
        },
        {
            "marka": "Audi",
            "model": "A4",
            "godina": 2019,
            "registriran": false,
            "cijena": 18000
        },
        {
            "marka": "Mercedes",
            "model": "C220",
            "godina": 2021,
            "registriran": true,
            "cijena": 32000
        },
        {
            "marka": "Volkswagen",
            "model": "Golf 8",
            "godina": 2022,
            "registriran": true,
            "cijena": 22000
        }
    ]
}';

$osoba = json_decode($json, true);

echo "<h2>{$osoba['ime']} {$osoba['prezime']}</h2>";

foreach ($osoba['automobili'] as $auto) {

    $klasa = ($auto['cijena'] > 20000) ? "auto skupi" : "auto";

    echo "<div class='$klasa'>";
    echo "<h3>{$auto['marka']} {$auto['model']}</h3>";
    echo "<p>Godina: {$auto['godina']}</p>";
    echo "<p>Registriran: " . ($auto['registriran'] ? "DA" : "NE") . "</p>";
    echo "<p>Cijena: {$auto['cijena']} €</p>";
    echo "</div>";
}

?>

</body>
</html>
