<?php $pre = get_stylesheet_directory_uri() . '/shop'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
	<title>首页</title>
	<style>
		body { margin: 0; padding: 0; }
		#preview { width:100%; filter: blur(6px); }
		#coming-soon { position: fixed; bottom: 50%; text-align: center; left: 0; right: 0; font-size: 60px; color: white; text-shadow: 2px 2px 5px #5e5e5e; }
	</style>
</head>
<body>
	<img id="preview" src="<?=get_stylesheet_directory_uri()?>/imgs/develop-preview.jpg">
	<div id="coming-soon">Coming Soon</div>
</body>
</html>
