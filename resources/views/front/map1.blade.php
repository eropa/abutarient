<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Street View Containers</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #street-view {
            height: 100%;
        }
    </style>
</head>
<body>
<div id="street-view"></div>
<script>
    var panorama;
    function initialize() {
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'),
            {
                position: {lat:47.7616757, lng: 29.0017615},
                pov: {heading: 152.58, pitch: 90},
                zoom: 1
            });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYuLbOWriS7_vwJ7PxypQveXRBAyY4D6w&callback=initialize">
</script>
</body>
</html>
