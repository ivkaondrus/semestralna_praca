<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="public/css/sekcia_balikovo.css"/>
</head>
<body class="bg-purple">
<div class="col-md-3"></div>
<div class="col-md-6 well" style="background-color: purple">
    <h3 class="text-primary">Nájdete nás:</h3>
    <hr style="border-top:1px dotted #ccc;"/>
    <button class="btn btn-primary" id="get_map"><span class="glyphicon glyphicon-location"></span>Načítaj mapu:</button>
    <div id="map" style="height:500px; display:none;"></div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlE9tz8016NkrnL2J4Kcxbyfv1JDUpaKI&callback=initMap" async defer></script>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 9.5162, lng: 123.158},
            zoom: 8
        });
    }
</script>
<script src="js/script.js"></script>
</body>
</html>