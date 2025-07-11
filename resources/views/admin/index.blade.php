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
	<form action="{{ route('admin.index') }}" method="GET">
		@csrf
		<input type="text" name="search" placeholder="Cari...">
		<input type="submit" value="CARI">
	</form>
</div>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<div>
	<div>
		<button onclick="showForm()" style="margin-top: 20px;" id="button-add">Add data</button>
	</div>
	<form action="{{ route('admin.store') }}" method="POST" enctype="application/json" style="display:none;" id="formAdd">
		@csrf
		<ol style="max-width: 400px; list-style-type: none;">
			<li>
				<label>Nama Buku</label>
				<input type="text" name="title">
			</li>
			<li>
				<label>Penulis</label>
				<input type="text" name="author">
			</li>
			<li>
				<label>ISBN</label>
				<input type="text" name="isbn">
			</li>
			<li>
				<label>Penerbit</label>
				<input type="text" name="publisher">
			</li>
			<li>
				<label>Tahun publikasi</label>
				<input type="number" name="publication" min="0">
			</li>
			<li>
				<label>Edisi</label>
				<input type="number" name="edition" min="1">
			</li>
			<li>
				<label>Rak</label>
				<input type="text" name="shelf">
			</li>
			<li>
				<label>Ketersediaan</label>
				<input type="number" name="availability" min="1">
			</li>
			<li>
				<button type="submit">Simpan</button>
			</li>
		</ol>
	</form>
</div>


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
				<a href="{{ route('admin.edit', $book->id) }}"><button>edit</button></a>
				<form action="{{ route('admin.destroy', $book->id) }}" method="POST" enctype="application/json">
					@csrf
					@method('DELETE')
					<button type="submit">delete</button>
				</form>
			</td>
		</tr>
	@empty
		<p>Data kosong</p>
	@endforelse
</table>

<script>
const buttonAdd = document.getElementById('button-add');
const formAdd = document.getElementById('formAdd');

function showForm() {
	console.log(buttonAdd);
	if(formAdd.style.display == "none") {
		buttonAdd.innerHTML = "Cancel";
		formAdd.style.display = "block";
	} else {
		formAdd.style.display = "none";
		buttonAdd.innerHTML = "Add data";
	}
}

</script>

</body>
</html>