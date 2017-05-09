<?php
	# string function: 处理字符串的函数
	# 返回字符串的一部分
	/*$output = substr("hello", 1,2);
	$output = substr("hello", -2);
		echo $output;
	*/

	# 返回给定的字符串 string的长度
	$output = strlen("hello world");
	#echo $output;

	# strpos - 查找字符串中第一个子字符串的位置
	$output = strpos("hello world", "o");
	#echo $output;

	# strrpos - 查找字符串中最后一个子字符串的位置
	$output = strrpos("hello world", "o");
	#echo $output;

	# 去除首尾空格
	$text = "hello world        ";
	#var_dump($text);
	$trimed = trim($text);
	#var_dump($trimed);

	# 将字符串转为大写
	$output = strtoupper("hello world");
	#echo $output;

	# 将字符串转为小写
	$output = strtolower("HELLO WORLD");
	#echo $output;

	# 将每个单词首字母大写
	$output = ucwords("upper case words");
	#echo $output;

	# 替换所有匹配内容
	$text = "hello world";
	$output = str_replace("world", "Everybody", $text);
	#echo $output;

	# 判断是否是字符串
	$num = 10;
	$val = "$num";
	$output = is_string($val);
	#echo $output;

	# 过滤掉数组中非字符串的值
	/*$values = array(true,flase,null,"abc",33,"33",22.4,"22.4",""," ",0,"0");
	foreach ($values as $value){
		if(is_string($value)){
			var_dump($value);
		}
	}*/

	# 压缩字符串
	$string = "fghhhghghdhdhdhdhdfhdhdfhdfshfdshdfghdshsdfhdfhhfdshfsdhfdshfdshfshfh";
	$compressed = gzcompress($string);
	echo $compressed;
	$original = gzuncompress($compressed);
	echo "<hr>$original";
?>