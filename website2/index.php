<?php include("service-info.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">
	<title>系统信息</title>
</head>
<body>
	<div class="container">
		<h1>服务端 & 配置信息</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach ($server as $Key => $Value): ?>
					<li class="list-group-item">
						<strong>
							<?php echo $Key; ?>:
						</strong>
						<?php echo $Value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h1>客户端 & 配置信息</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key =>$Value): ?>
					<li class="list-group-item">
						<strong>
							<?php echo $key; ?>:
						</strong>
						<?php echo $Value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>