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

    echo $isik['eesnimi'].' '.$isik['perenimi'].' ('.$isik['vanus'].')';
    ?>

</body>
</html>