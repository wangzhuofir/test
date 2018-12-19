<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<h1>登录页面	</h1>
	<form action="{{url('index')}}" method="post">
		<input type="text" name="username" id="username" value="" />
		<input type="password" name="password" />
		<input type="submit" class="btn btn-info" value="登录" />
	</form>
</body>
</html>