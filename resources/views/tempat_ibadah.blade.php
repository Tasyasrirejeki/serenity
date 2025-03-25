<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tempat Ibadah</title>
</head>
<body>

    <h2>Wisata Religi Batam</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tiket</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ibadah as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['tiket'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
