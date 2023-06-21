@extends('home')
@section('content')

<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nama Project</td>
            <td><input type="text" name="name_project" id="name_project" value="{{ $project->name_project }}"></td>
        </tr>
        <tr>
        <td>Kategori</td>
            <td><input type="text" name="kategori" id="kategori" value="{{ $project->kategori }}"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $project->deskripsi }}"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id="foto" value="{{ $project->deskripsi }}""></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="{{ $tombol }}">

            </td>
        </tr>
    </table>
</form>
@endsection