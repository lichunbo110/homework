<?php 
	# 循坏 : 根据某种条件重复执行某段代码
	/*
		- For
		- While
		- Do....While
		- Foreach
	*/

	# For
	# @params -init,conditions,inc
	/*for ($i = 0; $i < 10; $i++) { 
		echo "$i<br>";
	}

	*/
	# Whlie
	# @params -conditions
	/*$i = 0;
	while ($i < 10) {
		echo "$i<br>";
		$i++;
	}
	*/

	/*
	# Do...while
	# @params -conditions
	$i = 0;
	do{
		echo "$i<br>";
		$i++;
	}
	while ($i < 10);
	*/

	/*
	# Foreach 下标数组
	#as后面的变量来接收前面的变量
	$people = ["Henry","Bucky","Emily"];
	foreach ($people as $person) {
		echo "$person<br>";
	}
	*/

	# Foreach 关联数组
	/*	
	$people = [
		"Henry" => "hjithjk",
		"Bucky" => "detrt",
		"Emily" => "cxvcbv"
	];
	foreach ($people as $person => $email){
		echo "$person : $email<br>";
	}
	*/

	# 打印1-100之间的7的倍数
	# 打印1-100之间个位为7的数
	# 打印1-100之间十位为7的数

	/*for($i=1; $i<100; $i++){ 
		if($i%7 == 0){
			echo "$i<br>";
		}
	}*/

	/*for($i=1; $i<100; $i++){ 
		if($i%10 == 7){
			echo "$i<br>";
		}
	}*/

	for($i=1; $i<100; $i++){ 
		if(($i - $i%10)/10 == 7){
			echo "$i<br>";
		}
	}
?>