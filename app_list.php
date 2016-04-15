<?php
$aplist = array(

"Q1"=>array(
			"name"  		=> T_("circel redius"),
			"title" 		=> T_("circel qotr mohit & masahat"),
			"des"   		=> T_("giv cercel redius and get the qotr"),
			"el"    		=> array(
			  	 			  array(
								   	"type"   => "number",
								    "name"   => "radius",
								    "title"  =>T_( "get number"),
								    "label"  =>T_("input the circel redius"))),
						"func" => "circel"),

"Q2" => array(
			"name"	  =>	T_("taqsim & zarb"),
			"title"   =>	T_("taqsim & zarb"),
			"des" 	  =>	T_("do add ra gerefte va jaqsim zarb mikonad"),
			"el"  	  =>	 array(
								array(
									"type"   => "number",
								    "name"   => "first_num",
									"title"  => T_( "get number"),
								    "label"  => T_( "get number")),
								array(
									"type"    => "number",
									  "name"  => "second_num",
									  "title" => T_( "get number"),
									  "label" => T_( "get number")),
								),
				"func" => "Calculate"
			),

"Q3" => array(
			"name"  =>	 T_("triangel"),
			"title" =>	 T_("triangel"),
			"des"   =>	 T_("1 zel mosalas ra gerefte , enkan rasm ra barrsi mikonsd."),
			"el"    =>	 array(
								array(
										"type"  => "number",
										"name"  => "side1",
										"title" => T_("get number"),
										"label" => T_("get number")),
								array(
										 "type"   => "number",
									 	 "name"   => "side2",
										 "title"  => T_("get number"),
										 "label"  =>T_( "get number")),
								array(
									 "type"   => "number",
									 "name"   => "side3",
									 "title"  => T_("get number"),
									 "label"  =>T_( "get number"),
								)
						),
				"func" => "look",
			),

"Q4" => array(
			"name"  => T_( "power 1-3"),
			"title" => T_("power 1-3"),
			"des"   => T_("yek add ra gerefte va tavane 1 -3 ra hesab mikonad"),
			"el"    => array(
							array("type" => "number",
							  "name"  => "num1",
							  "title" => T_("get number"),
							  "label" => T_("get number")),
							),
						"func" => "power",
					),

"Q5" => array(
			"name"  => T_("x,y,z"),
			"title" => T_("x,y,z"),
			"des"   => T_("x y z ra geretfe va zarf vs jam mikonad"),
			"el"    => array(
							array(
								 "type"   => "number",
								 "name"   => "x",
								 "title"  =>T_( "get number"),
								 "label"  => T_("get number")),
							array(
								"type"   => "number",
								"name"   => "y",
								"title"  => T_("get number"),
								"label"  => T_("get number")),
							array(
								"type"   => "number",
								"name"   => "z",
								"title"  => T_("get number"),
								"label"  => T_("get number")),
							),
					"func" => "xyz",
			),

"Q6" => array(
			"name"  => T_("hasele jam va zarb"),
			"title" => T_("hasele jam va zarb"),
			"des"   =>T_("hasele jame adad zoj ra hesab mikonsd"),
			"el"    => array(
							array(
								"type"   => "number",
								"name"   => "a",
								"title"  => T_("get number"),
								"label"	 =>T_( "get number")),
							array(
								"type"    => "number",
							 	"name"    => "b",
							    "title"   =>T_( "get number"),
							    "label"	  => T_("get number")),
					        ),
						 "func" => "hasel"
					),
"Q7" => array(
			"name"  =>T_( "avrage"),
			"title" =>T_( "avrage"),
			"des"   => T_("do add ra gerefte va miyangin migirad."),
			"el"    => array(
							array(
							   "type"    => "number",
							   "name"    => "a",
							   "title"   =>T_( "get number"),
							   "label"	 =>T_( "get number")),
							array(
							   "type"    => "number",
							   "name"    => "b",
							   "title"   =>T_( "get number"),
							   "label"	 =>T_( "get number")),
				        ),
					"func" => "avrage",
			),

"Q8" => array(
			"name"  => T_("square"),
			"title" =>T_( "square"),
			"des"   =>T_( "zal square ra gerefte va rasm mikonad"),
			"el"    => array(
							array(
								"type"       => "number",
								   "name"    => "height",
								   "title"   =>T_( "get number"),
								   "label"	 =>T_( "get number")),
							array(
								"type"       => "text",
								   "name"    => "star",
								   "title"   =>T_( ""),
								   "label"	 =>T_("get text")),
							array(
								"type"  => "radio",
							 	"name"  => "fill",
							  	"child" => array(
							  				array(
							  					 "value" => "fill",
							  					 "label" =>T_( "fill"),
							  					 "id"	=> "fill",
							  					 ),
							  				array("value" => "",
							  					 "id"	=> "unfill",
							  				  			"label" =>T_( "unfill"))
							  				)
							  	)
							),

						"func" => "square"
			),

"Q9" => array(
			"name"  => T_("rectangel"),
			"title" =>T_( "rectangel"),
			"des"   =>T_( "zal rectangel ra gerefte va rasm mikonad"),
			"el"    => array(
							array(
								"type"       => "number",
								   "name"    => "height",
								   "title"   =>T_( "get number"),
								   "label"	 =>T_( "get number")
							),
							array(
								"type"       => "number",
								   "name"    => "width",
								   "title"   =>T_( "get number"),
								   "label"	 =>T_( "get number")
							),
							array(
								"type"       => "text",
								   "name"    => "star",
								   "title"   =>T_( "set star"),
								   "label"	 =>T_("get text")
							),
							array(
								"type"  => "checkbox",
							 	"name"  => "fill",
							 	"title" => "fill_title",
							 	"label" => T_( "set fill")
							)
						),

						"func" => "rectangel"
			),

"Q10" => array(
				"name"  => T_("triangel"),
				"title" =>T_( "triangel"),
				"des"   =>T_( "zel triangel ra gerfe va rasl konad"),
				"el"    => array(
								array(
									"type"   => "number",
								 	"name"   => "side",
								  	"title"  =>T_( "get number"),
								    "label"	 =>T_( "get number")),
								array(
									"type"   => "text",
								 	"name"   => "shape",
								  	"title"  =>T_( ""),
								    "label"	 =>T_("get text")),
								array(
									"type"  => "radio",
								 	"name"  => "fill",
								  	"child" => array(
								  					array("value" => "fill",
							  					 		 "id"	=> "fill",
								  					 	  "label" => T_("fill")),
								  					  array("value" => "",
							  								 "id"	=> "unfill",
								  					   		"label" =>T_( "unfill")))),
									array(
									  "type"  => "radio",
									  "name"  => "direction",
									  "child" => array(
									  				     array(
							  								 "id"	=> "type1",

									  				  		"value"  => "1",
									  					 	"label" => T_("type1")),
									  					  array(
										  					  	"value" => "2",
										  					  	"id"	=> "type2",
										  					  	"label" => T_("type2")),
									  					  array(
									  							"value"  => "3",
									  							"id"	=> "type3",
									  							 "label" => T_("type3")),
									  					  array(
									  							"value"  => "4",
									  							"id"	=> "type4",
									  							 "label" => T_("type4")),
									  					  )),
								),

							"func" => "triangel",
			),

"Q11" => array(
			"name"  =>T_( "bigest va largest"),
			"title" => T_("bigest va largest"),
			"des"   =>T_( "bigest va largest between numbers"),
			"el"    => array(
							array(
								   "type"    => "text",
								   "name"    => "num",
								   "title"   =>T_( "get number"),
								   "label"	 =>T_("get text")),
							array(
								   "type"    => "text",
								   "name"    => "seprate",
								   "title"   =>T_( "get number"),
								   "label"	 =>T_("get text")),

							),
						"func" => "adad",
			),

"Q12" => array(
			"name"  => T_(" three bigest va largest"),
			"title" => T_(" three bigest va largest"),
			"des"   => T_("three bigest va largest between numbers"),
			"el"    => array(
							array(
								   "type"    => "number",
								   "name"    => "one",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							array(
								   "type"    => "number",
								   "name"    => "two",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							array(

								   "type"    => "number",
								   "name"    => "three",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							array(
								   "type"    => "number",
								   "name"    => "four",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							array(
								   "type"    => "number",
								   "name"    => "five",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							array(
								   "type"    => "number",
								   "name"    => "six",
								   "title"   => T_("get number"),
								   "label"	 => T_("get number")),
							),
				"func" => "min_max"
			),

"Q13" => array(
				"name"  => T_("daimond"),
				"title" =>T_( "daimond"),
				"des"   => T_("daimond drawing"),
				"el"    => array(
								array(
									  "type"     => "number",
									  "name"     => "side",
									  "title"    => T_("get number"),
									  "label"	 => T_("get number")),
								array(
									  "type"     => "text",
									  "name"     => "shape",
									  "title"    => T_("get number"),
									  "label"	 => T_("get text")),
								array(
									  "type"  => "radio",
									  "name"  => "fill",
									  "child" => array(
									  				array(
									  					"value"  => "fill",
									  					"id"	=> "fill",
									  					 "label" => T_("fill")),
									  					  array(
										  					  	"value" => "",
										  					  	"id"	=> "unfill",
										  					  	"label" => T_("unfill")))),

								),

						"func" => "daimond",
			),

"Q14" => array(
			"name"  =>T_( "maghsom"),
			"title" =>T_( "maghsom"),
			"des"   => T_("maghsom reielayz"),
			"el"    => array(
							array(
								   "type"    => "number",
								   "name"    => "num1",
								   "title"   =>T_( "get number"),
								   "label"	 => T_("get number")),
							array(
								   "type"    => "number",
								   "name"    => "num",
								   "title"   =>T_( "get number"),
								   "label"	 => T_("get number")),


							),
				"func" => "maghsoom",
			),
);
?>