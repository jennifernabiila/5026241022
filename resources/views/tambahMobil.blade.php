<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Mobil')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>

        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Mobil
            </div>

            <div class="card-body">
                <form action="/mobilstore" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="merkmobil" class="col-sm-2 col-form-label">Merk Mobil</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkmobil" id="merkmobil" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockmobil" class="col-sm-2 col-form-label">Stock Mobil</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockmobil" id="stockmobil" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <input type="text" name="tersedia" id="tersedia" class="form-control" required>
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
        <a href="/mobil" class="btn btn-info"> Kembali</a>
    </center>
@endsection
