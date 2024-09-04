<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #4472C4;
        color: white;
    }
</style>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Trainer</th>
            <th>Hari</th>
            <th>Class Academy</th>
            <th>Program</th>
            <th>Level</th>
            <th>Alat</th>
            <th>Pj Eskul</th>
            <th>Jam Jadwal</th>
            <th>Tanggal Jadwal</th>
            <th>Catatan</th>
            <th>Tanggal Absen</th>
            <th>Jam Absen</th>
            <th>Materi Ajar</th>
            <th>Absensi Siswa</th>
            <th>Kehadiran</th>
        </tr>
    </thead>
    <tbody>
        {{-- === data table export laporan === --}}
        @foreach ($laporan as $laporans)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $laporans->trainer_name }}</td>
                <td>{{ $laporans->hari }}</td>
                <td>{{ $laporans->kelas_name }}</td>
                <td>{{ $laporans->program }}</td>
                <td>{{ $laporans->levels }}</td>
                <td>{{ $laporans->nama_alat }}</td>
                <td>{{ $laporans->pj_eskul }}</td>
                <td>{{ $laporans->jm_awal }} - {{ $laporans->jm_akhir }}</td>
                <td>{{ \Carbon\Carbon::parse($laporans->tanggal_jd)->translatedFormat('d F Y') }}</td>
                <td>{{ $laporans->catatan }}</td>
                <td>{{ \Carbon\Carbon::parse($laporans->tanggal_lp)->translatedFormat('d F Y') }}</td>
                <td>{{ $laporans->jam_lp }}</td>
                <td>{{ $laporans->materi }}</td>
                @foreach ($getDataStudent as $getDataStudents)
                    <td>{{ $getDataStudents->nama_lengkap }}</td>
                    <td>{{ $getDataStudents->absensi_anak }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
