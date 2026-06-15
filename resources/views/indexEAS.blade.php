@extends('template')


@section('title', 'EAS')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang-->
@section('konten')

    <center>
        <center>
            <br />

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>No Peserta</th>
                    <th>Nilai Teori</th>
                    <th>Nilai Praktek</th>
                    <th>Rata-rata</th>
                    <th>Status</th>
                </tr>

                @foreach ($nilai_peserta as $np)
                    <tr>
                        <td>{{ $np->ID }}</td>
                        <td>{{ $np->nopeserta }}</td>
                        <td>{{ $np->nilaiteori }}</td>
                        <td>{{ $np->nilaipraktek }}</td>
                        <td>
                            {{ $np->rata = ($np->nilaiteori + $np->nilaipraktek)/2 }}
                        </td>
                        <td>
                            @if ($np->rata >= 75)
                                <a class="btn btn-success">Lulus</a>
                            @else
                                <a class="btn btn-danger">Gagal</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>

            <a href="/eastambah" class="btn btn-primary">Tambah Nilai Baru</a>

        </center>

    @endsection
