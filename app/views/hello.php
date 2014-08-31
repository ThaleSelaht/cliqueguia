<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 4.1 on OpenShift</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>

	<?php echo Lang::setLocale('en');?>

	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>

	<?php echo Lang::setLocale('es');?>
	
	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>

</body>
</html>
