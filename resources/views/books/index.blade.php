<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book</title>
	<style>
	</style>
</head>
<body>

<div>
	<form action="{{ route('books.index') }}" method="GET">
		@csrf
		<input type="text" name="search" placeholder="Cari...">
		<input type="submit" value="CARI">
	</form>
</div>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>


<table style="width: 100%;">
	<tr style="text-align: left;">
		<th>Nama Buku</th>
		<th>Penulis</th>
		<th>Rak</th>
		<th>Ketersediaan</th>
		<th></th>
	</tr>
	@forelse ($books as $book)
		<tr>
			<td> {!! $book->title !!} </td>
			<td> {!! $book->author !!} </td>
			<td> {!! $book->shelf !!} </td>
			<td> {!! $book->availability !!} </td>
			<td style="display: flex;">
				<a href="{{ route('books.show', $book->id) }}"><button>detail</button></a>
			</td>
		</tr>
	@empty
		<p>Data kosong</p>
	@endforelse
</table>



</body>
</html>