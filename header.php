<!DOCTYPE html>
<html>
<head>
	<meta name="name" content="content">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php echo get_title() ?></title>
	<link rel="stylesheet" type="text/css" href="http://static.dev/css/ermile.css">
	<link rel="stylesheet" type="text/css" href="http://static.dev/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo t_("%dir%")?>">
<div class="container co_contain">
	<header>
		 <?php if($app != 'homepage')
		 {
		 	 ?><h1 class="unselectable"><?php echo T_("project")." : ". $aplist[$app]['name']?></h1>
			<?php
			}
			?>
			<hr>
		<div class="row auto">
			<form  method="post" accept-charset="utf-8" class="lang">
				<input type="submit" name="lang" value="English">
				<input type="submit" name="lang" value="فارسی">
				<input type="submit" name="lang" value="العربیه">
			</form>
			<?php if($app != 'homepage'){?>
			<ul>
				<li><a href="/projects/new_Q/" ><i class="fa fa-home"></i></a></li>
				<li><a href="about.php" class="about" name="about" ><?=T_("about us")?></a></li>
			<ul>
			<?php
			}
			?>
		</div>
		<hr id="s_hr">
</header>
















