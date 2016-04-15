<?php

function t_($_str)
{
	$lang = 'English';
	if (isset($_SESSION["lang"]))
	{
		$lang = $_SESSION["lang"];
	}
  	$translate = array(
  	"English" => array(
		"%dir%" => ""
  		),
	"العربیه" => array(
		"%dir%" => "rtl",
		"circel" => "ادخل النامبر",
		"circel qotr" => "القطر والمساحت الدایره",
		"giv cercel redius and get the qotr" =>
		 "الشعاع شالدایره الرا الگرفته و المساحت الآن الرا الحساب الکند",
		 "number" => "اجعل الاعداد",
		 "input the circel redius" => "اجعل العاداد فی هذالمکان",
		 "projects" => "البرنامج",
		),

	"فارسی" => array(
			"%dir%" => "rtl",
			"circel redius"                                            => "شعاع دایره",
			"circel qotr mohit & masahat"                             => "قطر/محیط و مساحت دایره",
			"giv cercel redius and get the qotr"                     => "شعاع دایره را گرفته قطر محیط و مساحت آن را بدست می 																										آورد",
			"get number"                                               => "عدد را وارد کنید",
			"input the circel redius"                                  => "شعاع دایره را در این قسمت وارد کنید ",
			"projects"                                                 => "پروژه ها",
			"taqsim & zarb"                                            =>"تقسیم و ضرب",
			"do add ra gerefte va jaqsim zarb mikonad"                 =>"دو عدد را گرفته و تقسیم را با تفریق و ضرب را با 																	            جمع نمایش دهد.",
			"triangel"                                                 => "رسم مثلث",
			"1 zel mosalas ra gerefte , enkan rasm ra barrsi mikonsd." => "مقادیر اضلاع مثلث را دریافت و امکان رسم ان را بررسی 																		میکند.",
			"power 1-3"                                               => "توان 1 تا 3",
			"yek add ra gerefte va tavane 1 -3 ra hesab mikonad"                                               =>"یک عدد را گرفته و توان 1 تا 3 آن را محاسبه میکند.",

			"x y z ra geretfe va zarf vs jam mikonad"                                            =>"x را دریافت و به توان y رسانده و با z جمع میکند.",
			"hasele jam va zarb"                                               => "حاصل جمع و ضرب",
			"hasele jame adad zoj ra hesab mikonsd"                                               => "2 عدد را دریافت و حاصل جمع اعداد زوج بین آنها را محاسبه مینماید.",
			"avrage"                                               => "میانگین",
			"do add ra gerefte va miyangin migirad."                                               => "دو عدد را گرفته و میانگین آنها را حساب میکند .",
			"square"                                               => "رسم مربع ",
			"zal square ra gerefte va rasm mikonad"                                               => "ضلع مربع را گرفته و آن را رسم مینماید. ",
			"fill"                                               => "تو پر",
			"unfill"                                               => "توخالی",
			"rectangel"                                               => "رسم مستطیل ",
			"zal rectangel ra gerefte va rasm mikonad"                                               => "ضلع مستطیل را گرفته و آن را رسم مینماید. ",
			"triangel"                                               => "رسم مثلث",
			"zel triangel ra gerfe va rasl konad"                                               => "ضلع مثلث را گرفته و آن را به 4 زاویه مختلف رسم میکند. ",

			"bigest va largest"                                               => "بزرگترین و کوچکترین ",
			"bigest va largest between numbers"                                               => "چند عدد را گرفته و بزرگترین و کوچکترین بین آنها را محاسبه میکند. ",
			" three bigest va largest"                                               => "سه بزرگترین و کوچکترین ",
			"three bigest va largest between numbers"                                               => "چند عدد را گرفته و سه بزرگترین و کوچکترین بین آنها را حساب میکند. ",
			"daimond"                                               => "رسم لوزی ",
			"daimond drawing"                                               => "ضلع لوزی را گرفته و آن را رسم مینماید.",
			"maghsom"                                               => "مقسوم علیه ",
			"maghsom reielayz"                                               => "مقسوم علیه های 2 عدد را محاسبه میکند.",
			"project"					=>"پروژه ی",
			"about us"                  =>"درباره ی ما",
			"homepage"					=> "صفحه نخست",
			"submit" 					=>"نتیجه",
			"get text"					=>"متن را وارد کنید",
			"Diameter"					=>"قطر",
			"DEnvironment"				=>"مساحت",
			"Area"						=>"محیط",
			"type1"						=>"شکل 1",
			"type2"						=>"شکل 2",
			"type3"						=>"شکل 3",
			"type4"						=>"شکل 4",
			"بزرگترین مقادیر:"					=>"bigest",
			"Diameter"					=>"قطر",
			"Diameter"					=>"قطر",
			"Diameter"					=>"قطر",
		)

	);

	if (isset($translate[$lang][$_str]))
	{
  		return $translate[$lang][$_str];
	}
	else
		return $_str;
}

?>
