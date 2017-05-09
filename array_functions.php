<?php 
	# 创建一个数组

	# 使用数组方法，将内容添加到上面的数组中

	# 创建一个无序数组，使用数组方法，让数组排序

	# 创建一个关联数组，让关联数组排序(倒序)

	# 创建一个数组，将数组转为字符串

	# 创建一个字符串，将字符串转为数组

	$array = array();
	array_push($array, "21312131");
	#echo $array[0];

	$array = array("12","1","50","564","54");
	sort($array);
	foreach ($array as $value){
		#echo "$value<br>";
	}

	$array = array(
		"Henry" => 22,
		"Bucky" => 25,
		"Emily" => 30,
		"Elyse" => 40
	);
	ksort($array);
	print_r($array);
?>