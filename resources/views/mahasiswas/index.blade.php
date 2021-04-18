@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2" style="text-align: center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-left my-2">
            <form action="{{url('search')}}" method="GET">
                <input type="search" name="nim" class="form-control" id="search" aria-describedby="search" placeholder="Search..."> <input type="submit" value="Search">
            </form>
            {{$mahasiswas->links()}}
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif
 <table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <!--th>No_Handphone</th>
        <th>E-mail</th>
        <th>Tanggal_Lahir</th-->
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>
        <td>{{ $Mahasiswa->nim }}</td>
        <td>{{ $Mahasiswa->nama }}</td>
        <td><img width="100px" src="{{asset('storage/'.$Mahasiswa->image)}}"></td>
        <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
        <td>{{ $Mahasiswa->jurusan }}</td>
        <!--td>{{ $Mahasiswa->no_handphone }}</td>
        <td>{{ $Mahasiswa->email }} </td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td-->
        <td>
            <form action="{{ route('mahasiswa.destroy', ['mahasiswa'=>$Mahasiswa->nim])}}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show', [$Mahasiswa->nim]) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $Mahasiswa->nim) }}">Edit</a>

        @csrf
        @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning"href="{{url('nilai/'.$Mahasiswa->nim)}}">Nilai</a>
            </form>
        </td>
    </tr>
 @endforeach
 <div>
</div>
</table>
@endsection