<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>

<nav><a href="{{ url()->previous() }}">Back</a></nav>

<form action="{{ route('admin.update', $book->id) }}" method="POST" enctype="application/json">
	@csrf
	@method('PUT')
	<ol style="list-style-type: none; padding: 50px;">
		<li>
			<label>Nama Buku</label>
			<input type="text" name="title" value="{{ old('title', $book->title) }}">
		</li>
		<li>
			<label>Penulis</label>
			<input type="text" name="author" value="{{ old('author', $book->author) }}">
		</li>
		<li>
			<label>ISBN</label>
			<input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}">
		</li>
		<li>
			<label>Penerbit</label>
			<input type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}">
		</li>
		<li>
			<label>Tahun publikasi</label>
			<input type="number" name="publication" min="0" value="{{ old('publication', $book->publication) }}">
		</li>
		<li>
			<label>Edisi</label>
			<input type="number" name="edition" min="1" value="{{ old('edition', $book->edition) }}">
		</li>
		<li>
			<label>Rak</label>
			<input type="text" name="shelf" value="{{ old('shelf', $book->shelf) }}">
		</li>
		<li>
			<label>Ketersediaan</label>
			<input type="number" name="availability" min="1" value="{{ old('availability', $book->availability) }}">
		</li>
		<li>
			<button type="submit">Simpan</button>
		</li>
	</ol>
</form>


</body>
</html>