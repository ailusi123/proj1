@extends('home')
<style type="text/css">
.pagination li{
    float: left;
    list-style-type: none;
    margin:10px;
}
</style>

{{-- <form action="{{ url('project/create') }}"method="get">
    @csrf
    <input type="seacrch" name="cari" id="cari" value="{{ $cari }}">
    <input type="submit" value="cari">
</form> --}}

<div class="container-fluid">

    <table class="table table-hover table-bordered table-triped">
        @section('content')
        @csrf
        <tr>
            <a href="{{ url('project/add') }}">Tambah Data</a>
            <th>NO</th>
            <th>NAMA</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
        @foreach ($project as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name_project }}</td>
            <td>{{ $item->kategori}}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <img src="/storage/{{ $item->foto }}" alt="" width="100">
            </td>
            <td>
                <a href="/project/hapus/{{ $item->id }}>" onclick="return window.confirm('hapus data ini?')">Hapus</a>
                <a href="/project/edit/{{ $item->id }}" >Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- 
        Total Siswa: {{ $siswa->count() }}<br>
    
    {{$siswa->links()}} --}}
    
</div>
@endsection
