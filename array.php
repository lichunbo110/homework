<?php 
	# Array : 数组是存储多个数值的容器
	/*
		下标数组
		关联数组
	*/

	# 下标数组
	# $people = array("Heney","Bucky","Emily");
	# echo $people[1];

	# $ids = array(23,52,98);
	# echo $ids[2];

	# $cars = ["Honda","Toyota","Ford"];
	# $cars[3] = "Bence";
	# $cars[] = "BMW";

	# 计算数组个数
	# echo count($cars);

	# 数组输出方法 (only array) print_r 只用于数组
	# print_r($cars);

	# 万能输出方法 for anything...
	# var_dump($cars);

	# 关联数组
	$people = array(
		"Heney" => 35,
		"Bucky" => 30,
		"Emily" => 25
		);
	# echo $people["Heney"];

	/*
		关联数组的特殊情况:
		1.如果关联的key值是字符串，那么在添加一个没有key值的数据，那么会自动从0下标开始分配。
		2.日过关联的key 值是数值，那么在添加一个没有key值的数据时，会自动在前一个数值的基础上＋1.
	*/

	$ids = [
		22 => "Heney",
		33 => "Bucky",
		44 => "Emily"
	];

	# 添加关联数组
	$ids[55] = "Elyse";

	# echo $ids[55];

	# print_r($ids);

	# var_dump($people);

	# 多维数组
	$cars = array(
		array("Honda",20,10),
		array("Toyota",15,10),
		array("Ford",23,18)
		);

	echo $cars[1][1];

	// localhost/phpsandbox/array.php	
?>