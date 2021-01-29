<html>
<head>
	<title>HBIRD AUS</title>
	<style type="text/css">
      body {
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          width: 100vw;
      }
	  img {
		  max-width: 100%;
	  }
      .wrapper {
          margin: 0 auto;
          max-width: 70%;
		  position: relative;
      }
	  .links {
          position: absolute;
          left: 0;
          right: 0;
          bottom: 0;
          top: 0;
          display: flex;
		  justify-content: center;
	  }
	  .links a {
		  display: flex;
		  width: 50%;
		  height: 100%;
	  }
	</style>
</head>
<body>
<div class="wrapper">
	<div class="links">
		<a href="<?=site_url()?>/design/"></a>
		<a href="<?=site_url()?>/wine/"></a>
	</div>
	<img src="<?=get_stylesheet_directory_uri()?>/imgs/home-hd.png">
</div>
</body>
</html>