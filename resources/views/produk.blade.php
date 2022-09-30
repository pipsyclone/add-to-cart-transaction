<div>
    <h3>Tabel Produk</h3>
    <br>
    <div>
        <a href="#">Home</a>
        |
        <a href="{{ route('addToCartView') }}">Cart</a>
    </div>
    <br>
    <table border="1">
        <tr>
            <th>NO.</th>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Opsi</th>
        </tr>

        @php $no = 1; @endphp
        @foreach ($dataProduct as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->productid }}</td>
                <td>{{ $data->product_name}}</td>
                <td>{{ $data->product_price}}</td>
                <td>{{ $data->product_stock}}</td>
                <td>
                    <a href="/add-to-cart/proses/{{ $data->productid }}">Tambah Ke Cart</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>