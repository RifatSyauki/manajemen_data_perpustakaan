<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot password</title>
</head>
<body>

<nav><a href="/login">Back</a></nav>

<div class="container" style="padding: 50px;">
	<label>Username</label>
	<input type="text" name="username" id="username">
	<button onclick="request()">Submit</button>
</div>

<script>

const username = document.getElementById('username');

const request = () => {
	// console.log(username.value);
	// location.replace("https://www.w3schools.com");
	location.replace(`https://mail.google.com/mail/?view=cm&fs=1&to=mrifat.124140138@student.itera.ac.id&su=Forgot+Password&body=I+lost+my+account+password+with+username+${username.value}`);
}

</script>

</body>
</html>