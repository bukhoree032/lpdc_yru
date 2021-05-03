<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ทดสอบ geolocation</title>
        <script type="text/javascript" src="jquery.min.js"></script>
    </head>
    <body>
        ตำแหน่งของฉัน:
        <div id="geo_data"></div>
        <script type="text/javascript">
        if ( navigator.geolocation ) {
            // ตรงนี้คือรองรับ geolocation
            navigator.geolocation.getCurrentPosition(function(location) {
                var location = location.coords;
                $("#geo_data").html('lat: '+location.latitude+'<br />long: '+location.longitude+'<br /> altitude: '+location.altitude+'<br /> accuracy: '+location.accuracy+'<br /> altitude accuracy: '+location.altitudeAccuracy+'<br /> heading: '+location.heading+'<br /> speed: '+location.speed);
            }, function() {
                alert('มีปัญหาในการตรวจหาตำแหน่ง');
            });
        } else {
            alert('เบราเซอร์นี้ไม่รองรับ geolocation');
        }
        </script>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>