<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Book</title>
</head>
<body>

<nav><a href="/dashboar">Back</a></nav>

<ol style="list-style-type: none; padding: 50px;">
		<li>
			<label>Nama Buku</label>
			<p>{{ $book->title }}</p>
		</li>
		<li>
			<label>Penulis</label>
			<p>{{ $book->author }}</p>
		</li>
		<li>
			<label>ISBN</label>
			<p>{{ $book->isbn }}</p>
		</li>
		<li>
			<label>Penerbit</label>
			<p>{{ $book->publisher }}</p>
		</li>
		<li>
			<label>Tahun publikasi</label>
			<p>{{ $book->publication }}</p>
		</li>
		<li>
			<label>Edisi</label>
			<p>{{ $book->edition }}</p>
		</li>
		<li>
			<label>Rak</label>
			<p>{{ $book->shelf }}</p>
		</li>
		<li>
			<label>Ketersediaan</label>
			<p>{{ $book->availability }}</p>
		</li>
	</ol>

</body>
</html>