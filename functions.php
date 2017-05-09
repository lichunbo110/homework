<?php 
	# function : 可被重复利用的代码块

	/*
		Camel  Case:myFunction
		Pascle Case:MyFunction
		lower  Case:my_function
	*/

	/*定义函数
	function simpleFunction(){
		echo "hello world";
	}
	调用函数
	simpleFunction();

	带参函数
	function sayHello($name="hirjg"){ //不传参数默认是小括号里的值
		echo "hello $name";
	}
	sayHello("lichunbo");

	# 返回值函数
	function addNumbers($num1,$num2){
		return $num1 + $num2;
	}
	echo addNumbers(2,3);
	*/

	# 函数传引用
	$myNum = 10;
	function addFive($num){
		$num += 5;
	}
	addFive($myNum);

	function addTen(&$num){ //取地址符
		$num += 10;
	}

	addTen($myNum);

	echo "value:$myNum<br>";
?>