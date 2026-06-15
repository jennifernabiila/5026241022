<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Nilai')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>

        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Nilai
            </div>

            <div class="card-body">
                <form action="/easstore" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopeserta" id="nopeserta" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                        <div class="col-sm-10">
                            <input type="text" name="nilaiteori" id="nilaiteori" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                        <div class="col-sm-10">
                            <input type="text" name="nilaipraktek" id="nilaipraktek" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/eas" class="btn btn-info"> Kembali</a>
    </center>
@endsection
