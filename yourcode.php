<?php
	$CSS = 'fw_templates/additional/rpi/production';
	$JS  = 'http://'.$_SERVER['SERVER_NAME'].'/fw_templates/additional/rpi/production';
	$STN = 'http://'.$_SERVER['SERVER_NAME'].'/shutdown';
	
	$seo = new headerSeo;
	$url = new url;
	
	$seo->encode();
	$seo->title($core->coreSencillo->info["FWK"]." - RaspberryPi");
	$seo->owner("Peter Horváth, phorvath.com");
	$seo->custom("<script>var server_name='http://{$_SERVER['SERVER_NAME']}';</script>");
	$seo->custom("<meta http-equiv='X-UA-Compatible' content='IE=edge'>");
	$seo->custom("<meta http-equiv='cache-control' content='no-cache'>");
	$seo->custom("<meta http-equiv='expires' content='-1'>");
	$seo->custom("<meta http-equiv='pragma' content='no-cache'>");
	$seo->bootstrapDefs();
	$seo->style("http://{$_SERVER['SERVER_NAME']}/$CSS/fonts/css/font-awesome.min.css");
	$seo->style("http://{$_SERVER['SERVER_NAME']}/$CSS/css/animate.min.css");
	$seo->style("http://{$_SERVER['SERVER_NAME']}/$CSS/css/custom.css");
	$seo->style("http://{$_SERVER['SERVER_NAME']}/$CSS/css/icheck/flat/green.css");
	$seo->custom('
	<!--[if lt IE 9]>
		<script src="../assets/js/ie8-responsive-file-warning.js"></script>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	');
	$seo->script("{$JS}/js/extend_js/ext.js");
	echo $seo->save();
	
	$url->addUrl('','first_pi_page.html.php');
	$url->addUrl('shutdown','_');
	$url->addUrl('phpinfo','_');
	
	if(file_exists('./fw_templates/additional/rpi/production/'.$url->getPage(PAGE)))
	{
		require_once('./fw_templates/additional/rpi/production/'.$url->getPage(PAGE));
	}
	
	switch(PAGE)
	{
		case 'phpinfo':
			echo phpinfo();
		break;
	}
?>