<h1>HASIL UJIAN KENAIKAN TINGKAT (kyu) INKAI CABANG CIANJUR</h1>
<table>
    <thead>
    <tr>
        <th>Nomor Peserta</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Ranting</th>
        <th>Kyu Lama</th>
        <th>Kyu Baru</th>
        <th>Sabuk</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($karate as $karate)
        <tr>
            <th scope="row">{{ $karate->no_urut }}</th>
            <td>{{ $karate->nama }}</td>
            <td>{{ $karate->ttl }}</td>
            <td>{{ $karate->ranting }}</td>
            <td>{{ $karate->kyu_lama }}</td>
            <td>{{ $karate->kyu_baru }}</td>
            <td>@if (($karate->kyu_baru) === 10)
                    Putih
                @elseif (($karate->kyu_baru) >= 7)
                    Kuning
                @elseif (($karate->kyu_baru) === 6 )
                    Hijau
                @elseif (($karate->kyu_baru) >= 4 )
                    Biru
                @else
                    Cokelat
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
