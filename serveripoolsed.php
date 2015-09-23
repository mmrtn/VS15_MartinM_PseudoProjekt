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

        Name  <input name="kass"><br>

        <input type="submit" value="?">

    </form>

</body>
</html>