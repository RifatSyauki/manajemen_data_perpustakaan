<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

<nav><a href="/">Back</a></nav>

<div class="container" style="padding: 50px;">
	<form action="{{ route('register.submit') }}" method="post">
		@csrf
		<ol style="list-style-type: none;">
			<li>
				<label>Username</label>
				<input type="text" name="username">
			</li>
			<li>
				<label>email</label>
				<input type="text" name="email">
			</li>
			<li>
				<label>Password</label>
				<input type="password" name="password">
			</li>
			<li>
				<input type="submit" name="" value="Regis">
			</li>
		</ol>
	</form>
</div>

</body>
</html>