<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<style>
p {
    color:red;
    font-weight:999;
}
</style>
</head>
<body>
<div is="page" id="home" data-role="page" style="background-color:#ececec;">
<div is="header" data-role="header" data-position="fixed" style="background-color:blue;color:white;">
<h4>SOS求救</h4>
<a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="index.html" rel="external">Back</a>
</div>
<div is="content" role="main" class="ui-content">
    <div data-role="collapsible">
        <h4>救護車專線</h4>
        <p>專線-119</p>
        <iframe src="https://st2.depositphotos.com/5794592/9907/v/950/depositphotos_99072340-stock-illustration-medical-emergency-chopper-helicopter-and.jpg" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div data-role="collapsible">
        <h4>消防車專線</h4>
        <p>專線-119</p>
        <iframe src="http://image.91chep.com/a4e0cf7032f7465592ae17fb54a7213a680_680.jpg" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div data-role="collapsible">
        <h4>警察局專線</h4>
        <p>專線-110</p>
        <iframe src="http://image.91chep.com/47bf5682d40548eea30ddef3a9745da8680_680.jpg" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div data-role="collapsible">
        <h4>緊急電話</h4>
        <img  src="images/111.png" style="width:500px; margin:0px 10px 0px 12px">
    </div>
    </div>

    <div data-role="collapsible">
        <h4><?php echo $row['loc_title']; ?></h4>
        <p><?php echo $row['loc_place']; ?></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.168138160603!2d120.42744541488116!3d23.705688996400035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eba0f958ef16b%3A0x47e51c12ac825a52!2z6JmO5bC-6Imy6byO54eS6IKJ6JmO5bC-5bqX!5e0!3m2!1szh-TW!2stw!4v1574056425234!5m2!1szh-TW!2stw" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
</div>    
</body>
</html>
