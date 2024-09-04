<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Sekolah</th>
            <th>Telephone</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($trainers as $trainer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $trainer->nama }}</td>
                <td>{{ $trainer->alamat }}</td>
                <td>{{ $trainer->lulusan }}</td>
                <td>{{ $trainer->telephone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
