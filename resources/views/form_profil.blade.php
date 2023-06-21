@extends('home')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('/profil/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" id="nis" value="{{ $profil->nis==''?old('nis'):$profil->nis }}"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name" id="name" value="{{ $profil->name }}"></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td><input type="text" name="ttl" id="ttl" value="{{ $profil->ttl }}"></td>
        </tr>
        <tr>
            <td>SEKOLAH</td>
            <td><input type="text" name="sekolah" id="sekolah" value="{{ $profil->sekolah }}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="SIMPAN">

            </td>
        </tr>
    </table>
</form>