<div class="wraper row auto">
	<div class=" sidebar span2"><?= sidebar()?></div>
	<div class="span10 main">
		<h1 class="des css-typing "><?= $aplist[$app]['des']?></h1>
 		<div class="row auto">
 			<div class="span6 contain">
			 	<form method="post">

			 		<?php
			 		foreach ($aplist[$app]['el'] as $key => $value) {
			 			$form_value = "";
			 			if (isset($_POST[$value['name']])) {
			 				$form_value = "value='" . $_POST[$value['name']] . "'";
			 			}
			 		?>

				 		<?php
				 		if($value['type'] == 'radio') {
				 			foreach ($value['child'] as $k => $v) {
				 			?>
				 				<div>
				 						<div class="span6">
				 						<input type="radio" checked="checked" name="<?= $value['name'] ?>" value="<?= $v['value'] ?>" id="<?= $v['id'] ?>">
				 						<label class="unselectable" for="<?= $v['id'] ?>"><?= $v['label'] ?></label>
				 					</div>
				 				</div>
				 			<?php
				 			}
				 		}else{ ?>
				 			<div class="co_input">
				 				<input min="1" max="200" type="<?= $value['type'] ?>" name="<?= $value['name'] ?>" placeholder=" " id="<?= $value['name'] ?>" title="<?= $value['title'] ?>" <?= $form_value?>>
				 				<label class="unselectable" for="<?= $value['name'] ?>"><?= $value['label'] ?></label>
				 			</div>
				 		<?php
				 		}
				 	}
				 	?>
		 			<input type="submit" class="b_sub" value='<?=T_("submit")?>'>
			 	</form>
		</div>
 	    <div class="result span6 unselectable">
			<p>
			<?php
	 		if ($_SERVER["REQUEST_METHOD"]=="POST")
	 		{
	 			$function = $aplist[$app]["func"];
	 			$function();
	 		}
	 		?>
	 		</p>
		</div>
