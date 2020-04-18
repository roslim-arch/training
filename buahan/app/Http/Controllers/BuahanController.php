<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BuahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buahan = DB::table('tblbuahan')->get();
        return view('indexx',['buahan'=>$buahan]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahh()
    {
        return view('tambahh');
    }
    public function store(Request $request)
    {
        DB::table('tblbuahan')->insert([
            'nama'=> $request->Nama,
            'warna'=> $request->Warna,
            'bentuk'=> $request->Bentuk,
            'rasa'=> $request->Rasa
        ]);
        return redirect('/buahan');
    }
    public function editt($id){
        $buahan = DB::table('tblbuahan')->where('id',$id)->get();
        return view('editt',['buahan'=>$buahan]);
    }
    public function update(Request $request)
    {
        DB::table('tblbuahan')->where('id',$request->id)->update([
            'nama'=>$request->Nama,
            'warna'=>$request->Warna,
            'bentuk'=>$request->Bentuk,
            'rasa'=>$request->Rasa,
        ]);
        return redirect('/buahan');
    }
    public function hapus($id)
    {
        DB::table('tblbuahan')->where('id',$id)->delete();
        return redirect('/buahan');
    }
}
