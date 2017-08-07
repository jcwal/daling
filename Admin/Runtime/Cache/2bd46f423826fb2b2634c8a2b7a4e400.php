<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>达令——后台管理系统</title>
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/reset.css" />
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/manage.css" />
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/bootstrap.min.js"></script>
	</head>
	<body ng-app='myapp' ng-controller='manageController'>
		<div id="header">
			<div class="header">
		    	<h2 class="header_title">达令后台管理系统</h2>
		    	<span class="header_user">欢迎你,<?php echo (session('username')); ?></span>
		    </div>
			<div class="panel">
				<div class="panel_item">
					<a style="background-color:#39A3F9;" href="__ROOT__/admin.php/Manage/add">添加商品</a>
					<a style="background-color:#D33733;" href="__ROOT__/admin.php/Manage/modify">修改商品</a>
				</div>
			</div>
		</div>
	</body>
</html>