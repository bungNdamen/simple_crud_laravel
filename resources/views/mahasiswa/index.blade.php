@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a class="btn btn-outline-primary" href="{{ route('mahasiswa.create') }}">Add Mahasiswa</a>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Jurusan</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->nim}}</td>
                            <td>{{$m->jurusan}}</td>
                            <td>{{$m->jenis_kelamin}}</td>
                            <td>{{$m->alamat}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-outline-primary" href="{{  route('mahasiswa.edit', $m->id) }}">Edit</a>
                                    <form action="{{  route('mahasiswa.destroy', $m->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-outline-primary" type="submit" value="Delete">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection