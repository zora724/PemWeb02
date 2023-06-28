<!-- Praktikum 11 (Membuat tampilan admin) -->
@extends('template/admin')

@section('content')
<h1>Products</h1>
<!-- Praktikum 12 (CRUD) -->
<a href=" {{ route('produk.create') }} " class="btn btn-primary mb-3">Add Product</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($products as $product)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
              <a href="{{ route('produk.edit', $product) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('produk.destroy', $product) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
          </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
</table>
@endsection