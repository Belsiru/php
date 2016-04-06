<!doctype html>
<html lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'/>
</head>
<body>
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <?php if(isset($navbar)): ?><div id='navbar'><?=get_navbar($navbar)?></div><?php endif; ?>
    <div id='main'><?=$main?></div>
    <div id='byline'><?=$byline?></div>
    <div id='footer'><?=$footer?></div>
  </div>
</body>
</html>
