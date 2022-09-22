@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit MAHASISWA</h1>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}">
        </div>
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{$mahasiswa->nim}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{$mahasiswa->jurusan}}">
        </div>
        <select name="jenis_kelamin" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki - Laki</option>
            <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select>
        <div class="form-floating">
            <textarea name="alamat" class="form-control" placeholder="alamat" id="floatingTextarea">{{$mahasiswa->alamat}}</textarea>
            <label for="floatingTextarea">Alamat</label>
        </div><br>
        <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
    </form>
</div>
@endsection