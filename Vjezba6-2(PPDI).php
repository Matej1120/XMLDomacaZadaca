<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
<title>Vježba 6.2</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    .kartica {
        width: 350px;
        margin: 15px;
        padding: 15px;
        border-radius: 10px;
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .skuplji {
        border-left: 8px solid red;
    }

    .povoljniji {
        border-left: 8px solid green;
    }

    .oznaka {
        font-weight: bold;
        margin-top: 10px;
    }
</style>
</head>
<body>

<?php

$json = '{
    "ime": "Ivan",
    "prezime": "Horvat",
    "automobili": [
        {
            "marka": "BMW",
            "model": "320d",
            "godina": 2020,
            "boja": "Crna",
            "registriran": true,
            "cijena": 25000,
            "kilometri": 85000,
            "gorivo": "Dizel",
            "vlasnik_od": 2021
        },
        {
            "marka": "Audi",
            "model": "A4",
            "godina": 2018,
            "boja": "Siva",
            "registriran": true,
            "cijena": 18000,
            "kilometri": 120000,
            "gorivo": "Dizel",
            "vlasnik_od": 2019
        },
        {
            "marka": "Mercedes",
            "model": "C220",
            "godina": 2022,
            "boja": "Bijela",
            "registriran": false,
            "cijena": 35000,
            "kilometri": 40000,
            "gorivo": "Dizel",
            "vlasnik_od": 2023
        }
    ]
}';

$osoba = json_decode($json, true);

echo "<h1>Vlasnik: {$osoba['ime']} {$osoba['prezime']}</h1>";

foreach ($osoba['automobili'] as $auto) {

    if ($auto['cijena'] > 20000) {
        $klasa = "skuplji";
        $oznaka = "Skuplji automobil";
    } else {
        $klasa = "povoljniji";
        $oznaka = "Povoljniji automobil";
    }

    echo "<div class='kartica $klasa'>";

    echo "<h2>{$auto['marka']} {$auto['model']}</h2>";

    echo "<p><strong>Godina:</strong> {$auto['godina']}</p>";
    echo "<p><strong>Boja:</strong> {$auto['boja']}</p>";
    echo "<p><strong>Registriran:</strong> "
         . ($auto['registriran'] ? 'DA' : 'NE') . "</p>";

    echo "<p><strong>Cijena:</strong> {$auto['cijena']} €</p>";
    echo "<p><strong>Kilometri:</strong> {$auto['kilometri']} km</p>";
    echo "<p><strong>Gorivo:</strong> {$auto['gorivo']}</p>";
    echo "<p><strong>Vlasnik od:</strong> {$auto['vlasnik_od']}.</p>";

    echo "<p class='oznaka'>$oznaka</p>";

    echo "</div>";
}

?>

</body>
</html>
