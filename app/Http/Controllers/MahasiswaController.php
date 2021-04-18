<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$mahasiswas = Mahasiswa::all(); // Mengambil semua isi tabel
        $mahasiswas = Mahasiswa::orderBy('Nim', 'desc')->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'))
        -> with('i', (request()->input('page', 1) - 1) * 5);*/
        $mahasiswas = Mahasiswa::with('kelas')->get();
        $mahasiswas = Mahasiswa::orderBy('Nim', 'asc')->paginate(3);
        return view('mahasiswas.index', ['mahasiswas' => $mahasiswas, 'mahasiswas'=>$mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); //Mendapatkan data dari table kelas
        return view('mahasiswas.create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //melakukan validasi data
         $request->validate([
             'Nim' => 'required',
             'Nama' => 'required',
             //'Kelas' => 'required',
             'Jurusan' => 'required',
             /*'No_Handphone' => 'required',
             'Email' => 'required',
             'Tanggal_Lahir' => 'required'*/
             'Image' => 'required'
            ]);

            $mahasiswas = new Mahasiswa();
            $mahasiswas->nim = $request->get('Nim');
            $mahasiswas->nama = $request->get('Nama');
            $mahasiswas->jurusan = $request->get('Jurusan');
            $mahasiswas->save();

            $kelas = new Kelas;
            $kelas->id = $request->get('Kelas');

            //fungsi eloquent untuk menambah data dengan relasi belongsTo
            $mahasiswas->kelas()->associate($kelas);
            $mahasiswas->save();
        //fungsi eloquent untuk menambah data
        //Mahasiswa::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
         //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
         //$Mahasiswa = Mahasiswa::find($Nim);
         //return view('mahasiswas.detail', compact('Mahasiswa'));
         $mahasiswas = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
         return view('mahasiswas.detail', ['Mahasiswa' => $mahasiswas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        //$Mahasiswa = Mahasiswa::find($Nim);
        //return view('mahasiswas.edit', compact('Mahasiswa'));
        $mahasiswas = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        $kelas = Kelas::all(); //mendapatkan data dari table kelas
        return view('mahasiswas.edit', compact('mahasiswas', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nim)
    {
        //melakukan validasi data
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
            //'No_Handphone' => 'required',
            //'Email' => 'required',
            //'Tanggal_Lahir' => 'required'
        ]);
        $mahasiswas = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        $mahasiswas->nim = $request->get('Nim');
        $mahasiswas->nama = $request->get('Nama');

        if($mahasiswas->foto_profile && file_exists(storage_path('app/public'.$mahasiswas->image))){
            Storage::delete('public/'.$mahasiswas->image);
        }
        $image_name = $request->file('upload')->store('images','public');
        $mahasiswas->image = $image_name;
        $mahasiswas->jurusan = $request->get('Jurusan');
        $mahasiswas->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');
        //fungsi eloquent untuk mengupdate data inputan kita
        //Mahasiswa::find($Nim)->update($request->all());
        $mahasiswas->kelas()->associate($kelas);
        $mahasiswas->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nim)
    {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswa.index')
        -> with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function search(Request $request){
        $search = $request -> nim;

        $mahasiswas = DB::table('mahasiswas')->
        where('nim', 'like', "%".$search."%")->paginate(5);

        return view('mahasiswas.index', ['mahasiswas' => $mahasiswas]);
    }

    public function nilai($nim){
        $mahasiswas = Mahasiswa::find($nim);
        return view('mahasiswa.nilai',compact('mahasiswas'));
    }
}
