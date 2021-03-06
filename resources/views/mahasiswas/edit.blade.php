@extends('mahasiswas.layout')
@section('content')

<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
   <div class="card" style="width: 24rem;">
      <div class="card-header">Edit Mahasiswa</div>
      <div class="card-body">
         @if ($errors->any())
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form method="post" action="{{route('mahasiswa.update', $mahasiswas->nim)}}" id="myForm">
         @csrf
         @method('PUT')
            <div class="form-group">
               <label for="Nim">Nim</label>
               <br>
               <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $mahasiswas->Nim }}" aria describedby="Nim" >
            </div>
            <div class="form-group">
               <label for="Nama">Nama</label>
               <br>
               <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $mahasiswas->Nama }}" aria describedby="Nama" >
            </div>
            <div class="form-group">
               <label for="Kelas">Kelas</label>
               <select name="Kelas" class="form-control">
               @foreach($kelas as $kls)
                  <option value="{{$kls->id}}" {{ $mahasiswas->kelas_id == $kls->id? 'selected' : '' }}>{{$kls->nama_kelas}}</option>
               @endforeach
               </select>
            </div>
            <div class="form-group">
               <label for="Jurusan">Jurusan</label>
               <br>
               <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswas->Jurusan }}" aria describedby="Jurusan" >
            </div>
            <div class="form-group">
               <label for="No_Handphone">No_Handphone</label>
               <br>
               <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $mahasiswas->No_Handphone }}" aria describedby="No_Handphone" >
            </div>
            <div class="form-group">
               <label for="Email">E-mail</label>
               <br>
               <input type="Email" name="Email" class="form-control" id="Email" aria-describedby="Email" >
            </div>
            <div class="form-group">
               <label for="Tanggal_Lahir">Tanggal_Lahir</label>
               <br>
               <input type="Tanggal_Lahir" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" aria-describedby="Tanggal_Lahir" >
               </div>
            <div class="form-group">
               <label for="image">Edit Foto</label>
               <br>
               <input type="file" class="form-control" required="required" name="upload"></br>
               </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
    </div>
</div>
@endsection