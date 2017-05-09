<?php 
	# shorthand: 语言结构中简写的方法
	
	$loggedIn = false;
	/*if($loggedIn){
		echo "登录成功";
	}else{
		echo "登录不成功";
	}*/

	# 三目运算符 ? : 表达式
	# echo ($loggedIn) ? "登录成功" : "登录不成功";

	#$isRegistered = ($loggedIn === true) ? true : false;

	# echo $isRegistered;

	# 三目嵌套
	/*$age = 7;
	$score = 12;
	echo "你的分数是:".($score < 10 ? ($age < 10 ? "中等成绩1" : "优秀成绩") : ($age > 10 ? "差等成绩" : "中等成绩2"));*/

	$arr = [1,2,3,4,5];
?>

<!-- html & php 混编 -->
<div>
	<?php if($loggedIn){ ?>
		<h1>125123321321</h1>
	<?php } else{ ?>
		<h1>byebye</h1>
	<?php } ?>
</div>

<!-- 更优 更美观的写法 -->
<div>
	<?php if($loggedIn): ?>
		<h1>8789978</h1>
	<?php else: ?>
		<h1>00000</h1>
	<?php endif; ?>
</div>

<!-- 遍历数组 -->
<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<!-- for循坏遍历 -->
<ul>
	<?php for($i = 0; $i < count($arr); $i++): ?>
		<li><?php echo $arr[$i] ?></li>
	<?php endfor; ?>
</ul>














