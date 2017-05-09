<?php 
	# 创建服务器端数组信息 $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。它是一个超全局变量
	$server = [
		"Host Server Name" => $_SERVER["SERVER_NAME"],
		"Server Software" => $_SERVER["SERVER_SOFTWARE"],
		"Document Root" => $_SERVER["DOCUMENT_ROOT"],
		"Host Name" => $_SERVER["HTTP_HOST"],
		"Script Name" => $_SERVER["SCRIPT_NAME"],
		"Absolute Path" => $_SERVER["SCRIPT_FILENAME"],
		"Current Page" => $_SERVER["PHP_SELF"],
	];
	/*echo $server["Host Server Name"];
	echo "<hr>";
	echo $server["Server Software"];
	echo "<hr>";
	echo $server["Document Root"];
	echo "<hr>";
	echo $server["Host Name"];
	echo "<hr>";
	echo $server["Script Name"];
	echo "<hr>";
	echo $server["Host Name"].$server["Script Name"];
	echo "<hr>";
	echo $server["Absolute Path"];
	echo "<hr>";
	echo $server["Current Page"];*/

	# 客户端数组信息
	$client = [
		"Client System Info" => $_SERVER["HTTP_USER_AGENT"],
		"Client IP" => $_SERVER["REMOTE_ADDR"],
		"Client IP" => $_SERVER["REMOTE_PORT"],
	];
	#echo $client["Client System Info"];
	#echo "<hr>";
	#echo $client["Client IP"];

?>