<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    //Calon Kades

    public function tambahCalon()
    {
    	# code...

    	return view('admin.tambah');
    }

    public function upload(Request $request)
    {
        DB::table('calon_kades')->insert([
            'no_urut' => $request->nomor,
            'nama_calon' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            'foto' => $request->file->getClientOriginalName(),
        ]);
        $file = $request->file;
        $tujuan_upload = 'img/foto_kades';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        return redirect('/admin/home');
    }

     public function list()
    {
        $calon = DB::table('calon_kades')->get();

        return view('admin.list', ['calon' => $calon]);
    }

     public function edit($id)
    {
        $calon = DB::table('calon_kades')->where('id',$id)->get();

        return view('admin.edit', ['calon' => $calon]);
    }

    public function update(Request $request)
    {
        DB::table('calon_kades')->where('id',$request->id)->update([
            'no_urut' => $request->nomor,
            'nama_calon' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            
        ]);
        return redirect('/admin/home');
    }

    public function details($id)
    {
        $calon = DB::table('calon_kades')->where('id',$id)->get();

        return view('admin.details', ['calon' => $calon]);
    }

    public function hapus($id)
    {
        
        $file = DB::table('calon_kades')->where('id',$id)->first();
        File::delete('img/foto_kades/'.$file->foto);
        DB::table('calon_kades')->where('id',$id)->delete();

        return redirect('/admin/home');
    }

        public function KotakSuara()
    {
        
        $calon = DB::table('calon_kades')->get();

        return view('admin.kotak', ['calon' => $calon]);
    }


    //Pemilih

    public function tambahPemilih()
    {
        # code...

        return view('pemilih.tambah');
    }

     public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'email' => $request->email,
            'is_admin' => $request->is_admin,
            'surat_suara' => $request->surat_suara,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/admin/home');
    }

    public function listPemilih()
    {
        $pemilih = DB::table('users')->get();

        return view('pemilih.list', ['pemilih' => $pemilih]);
    }

    public function editPemilih($id)
    {
        $pemilih = DB::table('users')->where('id',$id)->get();

        return view('pemilih.edit', ['pemilih' => $pemilih]);
    }

    public function updatePemilih(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            
        ]);
        return redirect('/admin/home');
    }

    public function detailsPemilih($id)
    {
        $pemilih = DB::table('users')->where('id',$id)->get();

        return view('pemilih.details', ['pemilih' => $pemilih]);
    }

    public function hapusPemilih($id)
    {
       
        User::deleteData($id);
    
        echo "Delete successfully";
        exit;

        // DB::table('users')->where('id',$id)->delete();

        // return redirect('/admin/home');
    }

    // public function deleteUser($id=0){
    //     // Call deleteData() method of Page Model
    //     User::deleteData($id);
    
    //     echo "Delete successfully";
    //     exit;
    //   }




}
