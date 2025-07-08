<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

<nav><a href="/">Back</a></nav>

<div class="container" style="padding: 50px;">
	<form action="{{ route('login.submit') }}" method="post">
		@csrf
		<ol style="list-style-type: none;">
			<li>
				<label>Email</label>
				<input type="text" name="email">
			</li>
			<li>
				<label>Password</label>
				<input type="password" name="password">
			</li>
			<li>
				<input type="submit" name="" value="Login">
			</li>
		</ol>
	</form>
	<p>Forgot password <a href="/forgot-password">click here</a></p>
</div>

</body>
</html>