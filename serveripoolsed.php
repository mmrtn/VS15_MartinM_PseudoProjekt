<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed Meltsas</title>
</head>
<body>
    <?php
        function is_first_letter_vowel($str) {
            return (strpos('aeiouõäüö', strtolower($str[0])) !== FALSE) ? true : false;
        }

        $age = 99;
        $first='Martin';
        $last='Meltsas';

        $float1=1.23;
        $float2=2.34;

        $isik=array(
            'eesnimi'=>$first,
            'perenimi'=>$last,
            'vanus'=>$age

        );

    $isik_objekt = (object) array_merge($isik, array('sugu'=>'mees'));

    $eesnimi_algab_vokaaliga=is_first_letter_vowel($isik_objekt->eesnimi);
    // echo "<em>ALGAB VOKAALIGA: $eesnimi_algab_vokaaliga</em>";

    foreach ($isik_objekt as $key=>$value) {
        echo "<p>$key : $value</p>";
    }

    echo "<p>Teha kaks muutujat väärtustega 1.23 ja 2.34 ning kuvada ekraanil nende summat : </p>" , ($float1+$float2);

    if (!empty($_GET['koer'])) {
        echo "<p>".$_GET['koer']."</p>";
    }

//    echo $isik['eesnimi'].' '.$isik['perenimi'].' ('.$isik['vanus'].')';
//    if ((strpos('aeiouõäüö', strtolower($isik['eesnimi'][0])) !== FALSE)) {
//        echo '<br>Nimi algab vokaaliga';
//    }
    ?>

</body>
</html>