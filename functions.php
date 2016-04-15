<?php
function get_title()
{
	global $aplist;
	global $app;
	$title = $app;
	if (isset($aplist[$app]['title']))
	{
		$title = $aplist[$app]['title'];
	}
	return t_($title);
}

function sidebar()
{
	global $aplist;
	global $app;
	foreach ($aplist as $key => $value)
	{
		if($app == $key)
		{
			echo "<li class='active'><a  href='?module=$key' class='active'>" . $value['name'] . "</a></li>";
		}
		else
		{
			echo "<li><a href='?module=$key'>" . $value['name'] . "</a></li>";
		}
	}
}
function max_number($_number, $_max){
	$number = $_POST[$_number];
	if ($number > $_max) {
		$number= $_max;
		echo "max number valid is $_max <br>";
	}
	return $number;
}
																				// <!--Q1 -->
function circel()
{
	$_radius = max_number('radius', 200);

	echo "Diameter= ".$_radius*2 . "<br />";
	echo "Environment= ". $_radius*2*3.1416. "<br />";
	echo "Area= ". $_radius*$_radius*3.1416. "<br />";
}
																			// <!--Q2 -->

function Calculate()
{
	$_first_num = $_POST['first_num'];
	if(empty($_first_num)){
		$_first_num = 1;
	}
	$_second_num = $_POST['second_num'];
	if(empty($_second_num)){
		$_second_num = 1;
	}
	function division($_first_num , $_second_num)
	{
		$_count=$_first_num;
		$GLOBALS['x'] = 0;
		while ($_count - $_second_num >= 0)
		{
			$_count -= $_second_num;
			$GLOBALS['x']++;
		}
		echo T_("division=") . $GLOBALS['x']. "<br>";
	}
	division($_first_num , $_second_num);

	function multiplication($_first_num , $_second_num)
	{
		define("ZARB2", $_first_num);
		for ($i=0; $i < $_second_num -1; $i++)
		{

			$_first_num += constant("ZARB2");

		}
		echo "multiplication= ". $_first_num. "<br>";
	}
	multiplication($_first_num , $_second_num);
 }
																											// <!--Q3 -->
function look()
{
	$_side1 = $_POST['side1'];
	$_side2 = $_POST['side2'];
	$_side3 = $_POST['side3'];

	if (empty($_side1 && $_side2 && $_side3))
		{
				echo "Height is empty";
				return;
		}
	elseif ( ($_side1 + $_side2)>$_side3 && ($_side2 + $_side3)>$_side1 && ($_side1+$_side3)>$_side2 )
	{
		echo "triangel is drawable :)";
	}
	else
	{
		echo "Triangel is not drawable :(";
	}

}
																									// <!--Q4 -->
function power ()
{
	$_num1 = $_POST['num1'];
	echo $_num1;
	echo '<br />';

	echo $_num1*$_num1;
	echo "<br />";

	echo $_num1*$_num1*$_num1;
}

function xyz()
{
	$_x = $_POST['x'];
	$_y = $_POST['y'];
	$_z = $_POST['z'];
	$a=1;
	for ($i=0; $i <$_y ; $i++)
	{
		$a=$a*$_x;
	}
	echo $a+$_z;
	echo "<br/>";
}
																					// <!--Q6 -->
function hasel ()
{
	$_a = $_POST['a'];
	$_b = $_POST['b'];
	$sum = 0;
	global $result;
		if  ($_a > 1000 || $_b > 1000 )
	{
		$result .= "this is a big number. plz enter a less number 200";
	}
	else
	{
	if ($_a%2 == 0)
	{
		while ( $_a < $_b-1)
		{
			$_a=$_a+2;
			$result.= $_a."-";
			$sum+= $_a;
		}
		$result.="<br> sum =".$sum;
	}
	else
	{

		$_a=$_a+1;
		$result.= $_a;
		while ($_a<$_b-1)
		{
		$_a=$_a+2;
		$result.= $_a."-";
		$sum+= $_a;
		}
		$result.="<br> sum =".$sum;
	}
	echo $result;
}
}
																			// <!--Q7 -->

function avrage ()
{
	$_a = $_POST['a'];
	$_b = $_POST['b'];

	echo ($_a+$_b)/2;
}
																				// <!--Q8 -->
function square( )
{
	echo "<pre>";
	$_height = $_POST['height'];
	if(isset($_POST['fill'])){
		$_fill = $_POST['fill'];
	}else{
		$_fill = false;
	}
	// $_width = $_POST['width'];

	if(empty($_POST['star']))
	{
		$_star = "*";
	}
	else
	{
		$_star = $_POST['star'];
	}
	$_star = substr($_star, 0, 1);
	$empty = str_repeat(' ', strlen($_star));;


	if (empty($_height))
		{
				echo "box is empty...<br>Fill it !!!";
				return;
		}

	echo('<pre>');
	for ($row=0; $row < $_height ; $row++)
	{
		for ($col=0; $col < $_height ; $col++)
		{
			if($_fill)
			{
				echo $_star;
			}
			else
			{
				if($col === 0 || $col === $_height-1 ||
					$row === 0 ||$row === $_height-1
					)
				{
					echo $_star;
				}
				else
				{
					echo $empty;
				}
			}

		}
		echo('<br />');
	}
	echo('</pre>');
}
																	// <!--Q9 -->
 function rectangel()
{
	echo "<pre>";
	 $_star = substr($_star, 0, 1);
	$_height = $_POST['height'];
	if(isset($_POST['fill'])){
		$_fill = $_POST['fill'];
	}else{
		$_fill = false;
	}
	$_width = $_POST['width'];

	if(empty($_POST['star'])){
		$_star = "*";
	}else{
		$_star = $_POST['star'];
	}

	if (empty($_height) && empty($_width))
		{
				echo "boxes are empty...<br>Fill them !!!";
				return;
		}
	elseif (empty($_height)) {
		$_height=$_width;
	}
	elseif (empty($_width)) {
		$_width=$_height;
	}

	echo('<pre>');
	for ($row=0; $row < $_height ; $row++)
	{
		for ($col=0; $col < $_width ; $col++)
		{
			if($_fill)
			{
				echo $_star;
			}
			else
			{
				if($col === 0 || $col === $_width-1 ||
					$row === 0 ||$row === $_height-1
					)
				{
					echo $_star;
				}
				else
				{
					echo " ";
				}
			}

		}
		echo('<br />');
	}
	echo('</pre>');
}
																				// <!--Q10-->
function triangel()
{
	echo"<pre>";
	 $_shape = $_POST['shape'];
	 $_fill = $_POST['fill'];
	 $_side = $_POST['side'];
	 $_direction = $_POST['direction'];

	if(isset($_POST['fill'])){
		$_fill = $_POST['fill'];
	}else{
		$_fill = false;
	}

	 if(empty($_POST['shape'])){
		$_shape = "*";
	}
	else{
		$_shape = $_POST['shape'];
	}


	 $_fill = $_POST['fill'];
	 $_shape = $_POST['shape'];

	if (empty($_side))
		{
				echo "Enter a number in box...";
				return;
		}
		else{

	 $_side = $_POST['side'];
		}
		if ($_direction == 1)
		{
			for ($i=1; $i < $_side; $i++)
			{
					for ($j=1; $j <$i ; $j++) {
						if ($_fill)
						{
							echo "$_shape";
						}
				else
				{
					if($j === 1 || $j === $i-1 ||
						$i === 1 ||$i === $_side-1
						)
					{
						echo "$_shape";
					}
					else
					{
						echo " ";
					}
				}
			}
					echo('<br />');
			}
		}
		elseif ($_direction == 2)
		{
			for ($i=1; $i < $_side; $i++)
			{
					for ($j=$_side; $j >$i ; $j--)
					{
						if ($_fill)
						{
							echo $_shape;
						}
							else
							{
							if($j === $_side || $j === $i+1 || $i === 1 ||$i === $_side-1)
						{
							echo $_shape;
						}
						else
						{
							echo " ";
						}
						}
					}
					echo('<br/>');
			}
		}

		elseif ($_direction == 3)
		{
			for ($i=1; $i < $_side; $i++)
			{
					for ($j=$_side; $j >$i ; $j--) {
						echo " ";
					}
					for ($k=0; $k < $i; $k++) {
						if ($_fill)
						{
							echo $_shape;
						}
						else
						{
							if ($i===1 || $i===$_side-1 ||
									$k===$i-1 || $k=== 0) {
								echo $_shape;
							}
							else {
								echo " ";
							}
						}

					}
					echo('<br />');
			}
		}

		elseif ($_direction == 4)
		{
			for ($i=1; $i < $_side; $i++)
			{
					for ($j=1; $j <$i ; $j++) {
						echo " ";
					}
					for ($k=$_side; $k > $i; $k--) {
						if ($_fill)
						{
							echo "$_shape";
						}
						else
						{
							if ($i===1 || $i===$_side-1 ||
								$k===$_side || $k===$i+1)
							{
								echo "$_shape";
							}
							else
							{
								echo " ";
							}
						}

					}
					echo('<br />');
			}
		}
	echo('</pre>');
}

																						 //<!--Q11-->
function min_max()
{
	$_one = $_POST['one'];
	$_two = $_POST['two'];
	$_three = $_POST['three'];
	$_four = $_POST['four'];
	$_five = $_POST['five'];
	$_six = $_POST['six'];

	if (empty($_one)|| empty($_two) || empty($_three) || empty($_four) || empty($_five) || empty($_six) )
		{
				echo "Enter a number in box...";
				return;
		}
		$a = [$_one , $_two , $_three , $_four , $_five , $_six];
		$min = $a[0];
		$max = $a[0];
	for ($i=0; $i < 6; $i++)
	{
		if ($a[$i] < $min)
		{
			$min = $a[$i];
		}
		if ($a[$i] > $max)
		{
			$max = $a[$i];
		}
	}
	echo "min= " . $min . "<br>";
	echo "max= " . $max;
}
																					// <!--Q12-->
function adad()
{
	$_num     = $_POST['num'];
	$_seprate = $_POST['seprate'];
	$answer   = [];
	$arr = explode($_seprate, $_num);
	foreach ($arr as $key => $value)
	{
		if (is_numeric($value) && !in_array($value, $answer))
		{
			$answer[] = $value;
		}
	}
	sort($answer);
	$count = count($answer);


	echo "<br>" . "<p> کوچکترین مقادیر:‌ ";
	for ($j=0; $j < 3; $j++)
	{
		if (isset($answer[$j]))
		{
			echo $answer[$j] . " ";
		}
	}
	echo "<br>" . "<p> بزرگترین مقادیر:‌ ";

	for ($h=$count-1 ; $h >= ($count-3) ; $h--)
	{
		if (isset($answer[$h]))
		{
		echo $answer[$h] . " ";
		}
	}
}
																		// <!--Q13-->
 function daimond()
{
	$_side = $_POST['side'];
	$_fill = $_POST['fill'];
	$_shape = $_POST['shape'];
	$_shape = substr($_shape, 0, 1);
	echo "<pre>";
	if(isset($_POST['fill']))
	{
		$_fill = $_POST['fill'];
	}
	else
	{
		$_fill = false;
	}
	 if(empty($_POST['shape'])){
		$_shape = "*";
	}
	else{
		$_shape = $_POST['shape'];
	}


	if (empty($_side))
	{
		echo "Enter a number in box...";
		return;
	}
	$maxSide = $_side*2-1;
	for ($row=1; $row <= $maxSide; $row++)
	{
		for ($col=1; $col <= $maxSide; $col++)
		{
			if(		$col == $_side - ($row - 1) 		// side left top
				|| 	$col == $_side + ($row - 1) 		// side right top
				|| 	$col == $row - ($_side -1) 			// side left bottom
				|| 	$col == $maxSide + $_side - $row	// side right bottom
			)
			{
				echo $_shape;
			}
			elseif($_fill && $row <= $_side && $col >= $_side - ($row - 1) && $col <= $_side + ($row - 1))
			{
				echo $_shape;
			}
			elseif($_fill && $row >= $_side && $col >= $row - ($_side -1) && $col <= $maxSide + $_side - $row)
			{
				echo $_shape;
			}
			else
			{
				echo " ";
			}
		}
		echo("<br />");
	}
	echo('</pre>');
}
																	// <!--Q14-->

function maghsoom()
{
	$_num = $_POST['num'];

	$s = 0;
	for ($i=1; $i <= ($_num/2); $i++)
	{
		$r = $_num % $i;
		if ($r===0)
		{
			echo  $i ;
			$s++;
		echo " - ";
		}
	}
	echo "<br>" . $s ;
}

?>