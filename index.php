<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Meltsas Pseudoprojek</title>
</head>
<body>
<?php
if (!empty($_GET['page']) && count($_GET['page'])>0) {
    // $page = (!empty($_GET['page']) ? $_GET['page'] : 'home');
    require($_GET['page'] . '.php');
}
?>


<form action="index.php?" method="get">
    <input name="page" >
    <input type="submit">
</form>



</body>
</html>