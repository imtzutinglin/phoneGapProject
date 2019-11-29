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
</div>
</div>    
</body>
</html>