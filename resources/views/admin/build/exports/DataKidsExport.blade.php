<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th>Class Academy</th>
            <th>Sekolah</th>
            <th>Nama Orang Tua</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Alamat</th>
            <th>Nomor Telephone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kids as $kid)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kid->nama_lengkap }}</td>
                <td>{{ $kid->tl }}</td>
                <td>{{ $kid->tanggal_lahir }}</td>
                <td>{{ $kid->kelas }}</td>
                <td>{{ $kid->class }}</td>
                <td>{{ $kid->sekolah }}</td>
                <td>{{ $kid->nama_ortu }}</td>
                <td>{{ $kid->work_ortu }}</td>
                <td>{{ $kid->alamat }}</td>
                <td>{{ $kid->telephone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
