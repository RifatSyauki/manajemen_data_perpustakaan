<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

<table style="width: 100%;">
	<tr style="text-align: left;">
		<th>Nama Buku</th>
		<th>Penulis</th>
		<th>Rak</th>
		<th>Ketersediaan</th>
	</tr>
	@forelse ($books as $book)
		<tr>
			<td><a href="{{ route('book.detail', $book->id) }}"> {!! $book->title !!} </a></td>
			<td><a href="{{ route('book.detail', $book->id) }}"> {!! $book->author !!} </a></td>
			<td> {!! $book->shelf !!} </td>
			<td> {!! $book->availability !!} </td>
		</tr>
	@empty
		<p>Data kosong</p>
	@endforelse
</table>

</body>
</html>