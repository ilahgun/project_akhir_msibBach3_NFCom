<!DOCTYPE html>
<html>
<head>
    <title>Data Donatur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h4 align="center">Data Donasi</h4>
    <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Tanggal Donasi</th>
                <th>Jumlah Donasi</th>
                <th>Nama Donatur</th>
            </tr>
        </thead>
        <tbody>
            @php $no= 1; @endphp
            @foreach ($donasi as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->tgl_donasi }}</td>
                <td>{{ $row->jml_donasi }}</td>
                <td>{{ $row->donatur->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>