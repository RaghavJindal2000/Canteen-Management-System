<html>
<head>
<script>
    var lat;
    var long;
    var url="https://www.google.com/maps?saddr="
    function showPosition() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                lat  = position.coords.latitude;
                long = position.coords.longitude;
                url=url+lat.toString()+"+"+long.toString()+"&daddr=Arasan+SJT+Canteen+VIT+University,+Vellore,+Tamil+Nadu+632014=&output=embed";
                document.getElementById("map").setAttribute("src",url);
                // document.getElementById("result").innerHTML = positionInfo;
                console.log(url);
            });
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    }
    showPosition();

</script>
</head>
<body style="margin:0px">
<div style="text-align:center;background-color:#18314f1a;padding-top:1em;padding-bottom:1em;margin-bottom:2em">
<h1>Directions to SJT Canteen</h1>
</div>
<div style="display:flex;justify-content:center;align-items:center;flex-direction:column">
<div class="mapouter" style="border: 2px black solid;">
<div class="gmap_canvas"><iframe id="map" width="600" height="500" id="gmap_canvas" src="https://www.google.com" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies.com</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
<div style="margin-top:1em"><a href="homepage.php"><button style="width:60px; height:30px; background-color:rgb(68 117 218);border-radius:5px">Back</button></a></div>
</div>
</body>