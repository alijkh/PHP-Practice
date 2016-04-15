<?php
include_once "footer.php";
include_once "header.php";
// include ('app_list.php');
// include ('app_function.php');
// if(isset($_GET['module'])){
// 	$app = $_GET['module'];
// }
// ?>
// <!DOCTYPE html>
// <html>
// <head>
// 	<title><?= $aplist[$app]['title']?></title>
// 	<meta charset="utf-8" />
// </head>
// <body>
// 	<ul>
	<!-- <?php foreach ($aplist as $key => $value) {
// 		if($app == $key){
// 			echo "<li class='active'><a href='?module=$key'>" . $value['name'] . "</a></li>";
// 		}else{
// 			echo "<li><a href='?module=$key'>" . $value['name'] . "</a></li>";
// 		}
// 	}
// 	?>
// 	</ul>
// 	<h1><?= $aplist[$app]['des']; ?></h1>
// 	<form method="post">
// 		<?php foreach ($aplist[$app]['el'] as $key => $value)  ?>{
// 			<div>
// 				<input type="<?= $value['type'] ?>" name="<?= $value['name'] ?>" placeholder="<?= $value['placeholder'] ?>" id="<?= $value['name'] ?>" title="<?= $value['title'] ?>">
// 				<label for="<?= $value['name'] ?>"><?= $value['lable'] ?></label>
// 			</div>
// 		<?php } ?>
// 		<input type="submit">
// 	</form>
// 	<div id="result">
// 		<?php
// 		if ($_SERVER["REQUEST_METHOD"]=="POST")
// 		{
// 			$function = $aplist[$app]['func'];
// 			$function();
// 		}
// 		?>
// 	</div>
// </body>
// </html>