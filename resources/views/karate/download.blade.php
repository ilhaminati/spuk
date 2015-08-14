<table class="table table-striped">
    <thead>
    <tr>
        <th>Nomor Peserta</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Ranting</th>
        <th>Kyu Lama</th>
        <th>Kyu Baru</th>
        <th>Sabuk</th>
        <th>Opsi</th>
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
            <td>{{ $karate->sabuk }}</td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-trash-o"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>