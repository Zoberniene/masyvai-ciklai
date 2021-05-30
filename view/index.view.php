<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mokinių lentelė</title>
        <link rel="stylesheet" href="view/css/style.css">
    </head>
    <body>
        <h1>Mokiniai</h1>
        <table>
            <tr>
                <th>Klasė</th>
                <th>Kodas</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Kontrolinių darbų vidurkis</th>
                <th>Duomenų formavimo data</th>
            </tr>
            <?php
            $suma = 0;
            $kiekis = 0;
            foreach($mokiniai as $klase => $duomenys) {
                foreach ($duomenys as $mokinys) {
                    echo "<tr>";
                    foreach ($mokinys['pazymiai'] as $dalykas => $balas) {
                    $suma = $suma + $balas;
                    $kiekis++;
                    }
                    echo "<td>". $klase ."</td>";
                    echo "<td>". $mokinys["kodas"] ."</td>";
                    echo "<td>". $mokinys["vardas"] ."</td>";
                    echo "<td>". $mokinys["pavarde"] ."</td>";
                    echo "<td>". round($suma/$kiekis, 2) ."</td>";
                    echo "<td>". $mokinys["data"] ."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>