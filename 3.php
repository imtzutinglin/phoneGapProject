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
<h4>提醒功能</h4>
<a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="index.html" rel="external">Back</a>
</div>
<div is="content" role="main" class="ui-content">
    <div data-role="collapsible">
        <h4>用藥提醒</h4>
        <img  src="images/123.png" style="width:500px; margin:0px 10px 0px 12px">
    </div>
    <div data-role="collapsible">
        <h4>回診時間</h4>
         <img  src="images/456.png" style="width:500px; margin:0px 10px 0px 12px">
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