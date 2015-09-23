<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Meltsas Pseudoprojek</title>
</head>
<body>
<?php
if (array_key_exists('page',$_GET)) {
    $page = (!empty($_GET['page']) ? $_GET['page'] : 'home');
    require($page . '.php');
}
?>


<form action="?" method="get">
    <input name="page" >
    <input type="submit">
</form>



</body>
</html>