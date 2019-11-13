<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pemasukan;

class pemasukanController extends Controller
{
    public function home(){
        return view('welcome');
    }

    // public function pemasukan(){
    //     return view('pemasukan');
    // }

    public function inputpemasukan(){
        return view('inputpemasukan');
    }

    public function pemasukan()
    {
    	// mengambil data dari table pegawai
    	$pemasukan = pemasukan::all();
 
    	// mengirim data pegawai ke view index
    	return view('pemasukan',['pemasukan' => $pemasukan]);
 
    }

    public function store(Request $request){
		
		// $this->validate($request,[
		// 	'tanggalpemasukan' => 'required',
		// 	'aktivitaspemasukan' => 'required',
		// 	'jumlahpemasukan' => 'required|numeric'
		//  ]);
		
		pemasukan :: create([
			'tanggalpemasukan' => $request->tanggalpemasukan,
			'aktivitaspemasukan' => $request->aktifitaspemasukan,
			'keterangan' => $request->keterangan,
			'jumlahpemasukan' => $request->jumlahpemasukan
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pemasukan');
    }

    public function edit($id)
    {
    	// mengambil data dari table pegawai
    	$pemasukan = DB::table('pemasukan')->where('id',$id)->get();
 
    	// mengirim data pegawai ke view index
    	return view('editpemasukan',['pemasukan' => $pemasukan]);
 
    }

    public function update(Request $request){
		// $this->validate($request,[
		// 	'tanggalpemasukan' => 'required',
		// 	'aktivitaspemasukan' => 'required',
		// 	'jumlahpemasukan' => 'required|numeric'
		//  ]);

        DB::table('pemasukan')->where('id',$request->id)->update([
			'tanggalpemasukan' => $request->tanggalpemasukan,
			'aktivitaspemasukan' => $request->aktifitaspemasukan,
			'keterangan' => $request->keterangan,
			'jumlahpemasukan' => $request->jumlahpemasukan
		]);
		// alihkan halaman ke halaman pemasukan
		return redirect('/pemasukan');
    }

    public function delete($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pemasukan')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/pemasukan');
	}

	public function infaq(){
		return view('infaq');
	}

}
