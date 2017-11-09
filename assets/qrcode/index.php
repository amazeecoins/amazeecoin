<html>
<head>
<style>
#qrcode {
width:160px;
height:160px;
margin-top:15px;
}
#text {
display: block;
width: 80%;
}
</style>
</head>
<body>
<input id="text" type="text" value="" />
<div id="qrcode"></div>

<!-- Post Info -->
<div style='position:fixed;bottom:0;left:0;    
            background:lightgray;width:100%;'>
    Documentation: <a href='http://davidshimjs.github.io/qrcodejs/'>QRCode.js</a><br/>
</div>
<script src="jquery.min.js" type="text/javascript"></script>
<script src="qrcode.min.js" type="text/javascript"></script>
<script>
var qrcode = new QRCode("qrcode");

$("#text").on("keyup", function () {
    qrcode.makeCode($(this).val());
}).keyup().focus();
</script>
</body>
</html>

