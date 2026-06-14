@extends('template')


@section('title', 'Mobil')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang-->
@section('konten')

<center>
 <center>
        <br />
        <br />


        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Mobil</th>
                <th>Merk Mobil</th>
                <th>Stock Mobil</th>
                <th>Tersedia</th>
            </tr>

            @foreach ($mobil as $m)
                <tr>
                    <td>{{ $m ->kodemobil }}</td>
                    <td>{{ $m ->merkmobil }}</td>
                    <td>{{ $m->stockmobil }}</td>
                    <td>{{ $m->tersedia }}</td>
                </tr>
            @endforeach
        </table>
        <a href="/mobiltambah" class="btn btn-primary">Tambah Mobil</a>
    </center>

@endsection
