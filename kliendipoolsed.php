<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Martini PseudoProjekt</title>
</head>
<script>
    function changeImg() {
        var pic = document.getElementById('pilt');
        if (pic.name == "KASS") {
            pic.src="http://www.dog-boarding-wetherby.co.uk/wp-content/uploads/How-to-choose-a-healthy-dog-2.jpg";
            pic.name="KOER";
        }
        else {
            pic.src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg";
            pic.name="KASS";
        }
    }
</script>
<body>
<button onclick="alert('tere maailm!!');">Tere maailm</button>
<div>
    <a onclick="alert('tere maailm!!');" href="http://khk.ee/">tere maailm</a>
</div>

<div>
    <a href="" onclick="alert('jääme siia');">jääme siia</a>
</div>

<img id='pilt' name="KASS" onclick="changeImg()" src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg">

</body>
</html>