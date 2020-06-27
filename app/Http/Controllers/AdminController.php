<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\User;

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

   

    public function listPemilih(Request $request)
    {
        // $pemilih = DB::table('users')->get();

        // return view('pemilih.list', ['pemilih' => $pemilih]);

        $list_user = User::all();
        if($request->ajax()){
            return datatables()->of($list_user)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('pemilih.list');


    }

    public function store(Request $request)
    {
        // ainun
        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'nik' => $request->nik,
        //     'tempat_lahir' => $request->tempatLahir,
        //     'tanggal_lahir' => $request->tanggalLahir,
        //     'kelamin' => $request->kelamin,
        //     'agama' => $request->agama,
        //     'pekerjaan' => $request->pekerjaan,
        //     'pendidikan' => $request->pendidikan,
        //     'email' => $request->email,
        //     'is_admin' => $request->is_admin,
        //     'surat_suara' => $request->surat_suara,
        //     'password' => bcrypt($request->password),
        // ]);

        // return redirect('/admin/home');
    
        $id = $request->id;
        $post = User::updateOrCreate(['id' => $id],
                [
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
        return response()->json($post);
        
    }

    public function editPemilih($id)
    {
        // ainun
        // $pemilih = DB::table('users')->where('id',$id)->get();

        // return view('pemilih.edit', ['pemilih' => $pemilih]);
    
        // youtube
        $where = array('id' => $id);
        $post  = User::where($where)->first();
     
        return response()->json($post);

        
        // web
        // if(request()->ajax())
        // {
        //     $data = User::findOrFail($id);
        //     return response()->json(['data' => $data]);
        // }
    }

    public function updatePemilih(Request $request)
    {
        // ainun
        // DB::table('users')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'nik' => $request->nik,
        //     'tempat_lahir' => $request->tempatLahir,
        //     'tanggal_lahir' => $request->tanggalLahir,
        //     'kelamin' => $request->kelamin,
        //     'agama' => $request->agama,
        //     'pekerjaan' => $request->pekerjaan,
        //     'pendidikan' => $request->pendidikan,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
            
        // ]);
        // return redirect('/admin/home');
    
        // return response()->json($post);
    }

    public function detailsPemilih($id)
    {
        $pemilih = DB::table('users')->where('id',$id)->get();

        return view('pemilih.details', ['pemilih' => $pemilih]);
    }

    public function hapusPemilih($id)
    {
       
        // ainun
        // User::deleteData($id);
    
        // echo "Delete successfully";
        // exit;

        // DB::table('users')->where('id',$id)->delete();

        // return redirect('/admin/home');
    
        // web tutor
        // $data = User::findOrFail($id);
        // $data->delete();

        // pegawai
        $post = User::where('id',$id)->delete();
        return response()->json($post);
        
    }

    // public function deleteUser($id=0){
    //     // Call deleteData() method of Page Model
    //     User::deleteData($id);
    
    //     echo "Delete successfully";
    //     exit;
    //   }




}
