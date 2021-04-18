<!DOCTYPE html>
<html>
 <head>
 <title>Sistem Informasi Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
    <style type="text/css">
    table tr td,
    table tr th{
    font-size: 9pt;
    }
    </style>
    <body>
        <h2 style="text-align: center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                    <h3 style="text-align: center"><strong>KARTU HASIL STUDI (KHS)</strong></h3>

                    <p><strong>Nama :</strong> {{ $mahasiswas->nama }}</p>
                    <p><strong>NIM  :</strong> {{ $mahasiswas->nim }}</p>
                    <p><strong>Kelas:</strong> {{ $mahasiswas->kelas->nama_kelas }}</p>

                    <table class='table table-bordered'>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach ($mahasiswas->matakuliah as $matakuliah)
                            <tr>
                                <td>{{ $matakuliah->nama_matkul }}</td>
                                <td>{{ $matakuliah->sks }}</td>
                                <td>{{ $matakuliah->semester }}</td>
                                <td>{{ $matakuliah->pivot->nilai }}</td>
                            </tr>
                        @endforeach
                    </table>

    </body>
</html>