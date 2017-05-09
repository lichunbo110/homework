<?php 
	// 单行注释
	#  单行注释
	/*
		多行注释
	 */
	// echo "<h1>hello world</h1>";
?>

<?php 
	//echo (有返回值) 0/1 布尔值

	# 变量 variables 
	/*
		- 前缀”$“;
		- 以字母或下划线开头
		- 由数字／字母／下划线组成
		- 驼峰命名法
		- 大小写敏感
	*/
	// $output = "ghghhg";

	# 数据类型
	/* String Boolean Integer Float Null Object Array Resource */
	$_output = "ghghgg";
	$bool = true;
	$number = 5;
	$float = 5.5;

	# 数据相加
	$num1 = 7;
	$num2 = 12;
	$num = $num1 + $num2;

	# 字符串拼接
	$string1 = "hthth";
	$string2 = "jkjjkj";
	$greeting = $string1. ' ' .$string2;

	# 单引号和双引号 双引号可以识别变量 单引号不可以
	$greeting2 = '$string1 $string2';
	$greeting3 = "$string1 $string2";

	# 转义字符
	$greeting4 = 'thimf\'idj fg';
	$greeting5 = "thimf'idj fg";

	# 常量 常量名字大写 第三个参数规定大小写敏感或不敏感
	define("GREETING", "hello ban",true);

	echo greeting;
	// print "hello world";

	// 栈区 堆区 常量区 静态区 代码区
?>