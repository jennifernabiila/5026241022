@extends('template')


@section('title', 'Keranjang Belanja')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang-->
@section('konten')

<center>
 <center>
        <br />
        <br />


        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>

            @foreach ($keranjangbelanja as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KodeBarang }}</td>
                    <td>{{ $k->Jumlah }}</td>
                    <td>
                        {{ number_format($k->Harga, 0, ',', '.') }}
                    </td>
                    <td>
                        {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangtambah/ {{ $k->ID }}" class="btn btn-warning">Beli</a>
                        |
                        <a href="/keranjanghapus/ {{ $k->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>

@endsection
