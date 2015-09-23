<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed Meltsas</title>
</head>
<body>
    <?php
        $age = 99;
        $first='Martin';
        $last='Meltsas';
        $eesnimi_algab_vokaaliga=false;

        $isik=array(
            'eesnimi'=>$first,
            'perenimi'=>$last,
            'vanus'=>$age

        );

    $isik_objekt = (object) array_merge($isik, array('sugu'=>'mees'));

    foreach ($isik_objekt as $key=>$value) {
        echo "<p>$key : $value</p>";
    }

//    echo $isik['eesnimi'].' '.$isik['perenimi'].' ('.$isik['vanus'].')';
//    if ((strpos('aeiouõäüö', strtolower($isik['eesnimi'][0])) !== FALSE)) {
//        echo '<br>Nimi algab vokaaliga';
//    }
    ?>

</body>
</html>