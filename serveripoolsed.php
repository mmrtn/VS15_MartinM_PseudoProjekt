<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed Meltsas</title>
</head>
<body>
    <?php
        if (!empty($_POST['kass'])) {
            echo "Kass oli: ".$_POST['kass'];
        }
    ?>

    <form action="?" method="post">
        <label for="kass">Sinu kassi tõug:
         <input name="kass" /><br>
        </label>

        <input type="submit" value="?">

    </form>

</body>
</html>