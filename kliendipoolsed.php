<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Martini PseudoProjekt</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
<script>
    //    function changeImg() {
    //        var pic = document.getElementById('pilt');
    //        if (pic.name == "KASS") {
    //            pic.src="http://www.dog-boarding-wetherby.co.uk/wp-content/uploads/How-to-choose-a-healthy-dog-2.jpg";
    //            pic.name="KOER";
    //        }
    //        else {
    //            pic.src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg";
    //            pic.name="KASS";
    //        }
    //    }
    $(document).ready(function() {

        $('#pilt').click(function() {
            // console.log("tere!!!!!!");
            $('#pilt').attr('src', "http://www.dog-boarding-wetherby.co.uk/wp-content/uploads/How-to-choose-a-healthy-dog-2.jpg");
        });
        $('#red').click(function() {
            // console.log("tere!!!!!!");
            $('body').css('backgroundColor', 'red');
        });
        $('#green').click(function() {
            // console.log("tere!!!!!!");
            $('body').css('backgroundColor', 'green');
        });
        $('#blue').click(function() {
            // console.log("tere!!!!!!");
            $('body').css('backgroundColor', 'blue');
        });
    });
</script>

<button onclick="alert('tere maailm!!');">Tere maailm</button>
<div>
    <a onclick="alert('tere maailm!!');" href="http://khk.ee/">tere maailm</a>
</div>

<div>
    <a href="" onclick="alert('jääme siia');">jääme siia</a>
</div>

<!--<img id='pilt' name="KASS" onclick="changeImg()" src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg">-->
<img id='pilt' name="KASS" src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg" alt="Looma Pilt">
<div>
    <button class="btn" id="red">red</button>
    <button class="btn" id="green">green</button>
    <button class="btn" id="blue">blue</button>
</div>
</body>
</html>