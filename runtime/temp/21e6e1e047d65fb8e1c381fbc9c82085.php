<?php /*a:1:{s:40:"/www/wwwroot/qingyuan/public/mobile.html";i:1696737567;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$siteName?></title>
  <style>
    #page {
      width: 375px;
      height: 60vh;
      margin: 0 auto;
      display: block;
      position: absolute;
      left: 50%;
      -webkit-transform: translate(-50%,0);
      -moz-transform: translate(-50%,0);
      transform: translate(-50%,0);
    }
    body {
      margin-top: 100px;
    }
  </style>
</head>
<body>
<iframe id="page" src="<?=$siteUrl?>" frameborder="0"></iframe>
</body>
</html>