<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Topo</title>
<style type="text/css">
body {
    margin: 0px;
	padding: 0px;
}
#toposite {
	width: 1024px;
	height: 135px;
	line-height:135px;
	
	margin:auto;
	background-image:url(wp-content/themes/suelen-imob-adm/images/topo.png);
}
img {
	border: 0px;
	margin: 2%;
}
#logo{	
    left: 16%;
    text-align: center;
    display: inline;
    width: 420px;
}

#home{
	position: absolute;
	top: 45px;
	right: 469px;
}
#home a {
    width: 250px;
    display: block;
    height: 50px;    
}

</style>
</head>
<body>
	<div id="toposite">
		
		<a target="_top"  href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" /></a>

	<div id="home">
		<a target="_top"  href="<?php echo $home; ?>"></a>
	</div>

</div>
</body>
</html>