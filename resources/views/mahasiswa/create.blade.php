@extends('layouts.master')
@section('content')
<div class="container">
    <h1>ADD MAHASISWA</h1>

    <form action="/mahasiswa/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select name="jenis_kelamin" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki - Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <div class="form-floating">
            <textarea name="alamat" class="form-control" placeholder="alamat" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Alamat</label>
        </div><br>
        <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
    </form>
    @endsection
</div>