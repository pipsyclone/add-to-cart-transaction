<div>
    <h3>Tabel Cart</h3>
    <br>
    <div>
        <a href="{{ route('produk') }}">Home</a>
        |
        <a href="#">Cart</a>
    </div>
    <br>
    <table border="1">
        <tr>
            <th>NO.</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Quantity</th>
            <th>Opsi</th>
        </tr>
        
        @if ($dataCartCount < 1)
            <tr>
                <th colspan="5">Belum ada item</th>
            </tr>
        @else
            @php $no = 1; @endphp
            @foreach ($dataCart as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->product_name }}</td>
                    <td>{{ $data->product_price }}</td>
                    <td>{{ $data->quantity }}</td>
                    <td>
                        <a href="/add-to-cart/delete/{{ $data->cartid }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>

    <a href="/checkout/apiprahmans">Checkout</a>
</div>