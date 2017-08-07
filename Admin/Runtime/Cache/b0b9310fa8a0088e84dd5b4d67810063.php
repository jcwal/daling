<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>达令——添加商品</title>
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/reset.css" />
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__ROOT__/Admin/Common/css/add.css" />
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/sweetalert.css">
		<script src="__ROOT__/Admin/Common/js/sweetalert.min.js"></script>	
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/angular.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/angular-sanitize.js"></script>
		<script type="text/javascript" src="__ROOT__/Admin/Common/js/bootstrap.min.js"></script>
	</head>
	<body ng-app='myapp' ng-controller='addController'>
		<div class="content">
			<h2>添加商品</h2>
			<div class="form-horizontal">
				<div class="form-group">
					<label for="bookname" class="col-md-2 col-md-offset-1 col-sm-2 control-label">商品名：</label>
					<div class="col-md-8 col-sm-8">
						<input type='text' placeholder='商品名' class='form-control' id='bookname' name='bookname' />				
					</div>
				</div>
				<div class="form-group">
					<label for="introduce" class="col-md-2 col-md-offset-1 col-sm-2 control-label">原价：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="原价" class="form-control" id="introduce" name="introduce" />
					</div>
				</div>
				<div class="form-group">
					<label for="author" class="col-md-2 col-md-offset-1 col-sm-2 control-label">折扣价：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="折扣价" class="form-control" id="author" name="author" />
					</div>
				</div>
				<div class="form-group">
					<label for="press" class="col-md-2 col-md-offset-1 col-sm-2 control-label">折扣率：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="折扣率" class="form-control" id="press" name="press" />
					</div>
				</div>
				<div class="form-group">
					<label for="publicationDate" class="col-md-2 col-md-offset-1 col-sm-2 control-label">促销信息：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="促销信息" class="form-control" id="publicationDate" name="publicationDate" />
					</div>
				</div>
				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-1 col-sm-2 control-label">默认收藏数量：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="收藏数量" class="form-control" id="price" name="price" />
					</div>
				</div>
				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-1 col-sm-2 control-label">关键字(用 、 分隔)：</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" placeholder="关键字(用 、 分隔)" class="form-control" id="price" name="price" />
					</div>
				</div>
				<div class="form-group">
					<label for="bookpic" class="col-md-2 col-md-offset-1 col-sm-2 control-label">默认评论文件(json格式)：</label>
					<div class="col-md-8 col-sm-8">
						<input type="file" id="bookpic" name="bookpic" onchange="sub()" />
					</div>
				</div>
				<div class="form-group">
					<label for="bookpic" class="col-md-2 col-md-offset-1 col-sm-2 control-label">商品展示图片：</label>
					<div class="col-md-8 col-sm-8">
						<input type="file" id="bookpic" name="bookpic" onchange="sub()" />
					</div>
				</div>
				<div class="form-group">
					<label for="bookpic" class="col-md-2 col-md-offset-1 col-sm-2 control-label">商品信息图片：</label>
					<div class="col-md-8 col-sm-8">
						<input type="file" id="bookpic" name="bookpic" onchange="sub()" />
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-md-1 col-md-offset-3 col-sm-1 col-sm-offset-2 ">
						<input type="button"  class="btn btn-default" value="添加" />
					</div>
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="__ROOT__/Admin/Common/js/add.js"></script>
</html>