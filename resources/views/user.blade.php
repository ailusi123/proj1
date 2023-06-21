<style type="text/css">
    .pagination li{
        flote: left;
        list-style-type:none ;
        margin: 10px;
    }
    </style>

    <form action="{{ url('user/cari') }}" method="get">
        <input type="search" name="cari" id="cari" value="{{ $cari }}">
    </form>
    <a href="{{ url('user/add') }}">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        @foreach ($user as key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>
                <a href="/user/hapus/{{ $item->id}}" onclick="return window.confirm('Hapus Data Ini')">Hapus</a>
                <a href="/user/edit/{{ $item->id}}" onclick="return window.confirm('Edit Data Ini')">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

    Total User: {{ $user->count() }}<br>
    total perhalaman: {{ $user->perpage() }}
    {{ $user->links() }}