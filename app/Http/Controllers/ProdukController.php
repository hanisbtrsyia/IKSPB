<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$name)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addProd(Request $request)
    {
        $produk = new Produk();
        $files = [];

        //if($request->file('GambarProduk')){
        //    $file= $request->file('GambarProduk');
        //    $filename= time() . rand(1, 100) . '.' .$file->getClientOriginalName();
        //    $file-> move(public_path('public/Image'), $filename);
        //}

        $request->validate([
            'GambarProduk' => 'required',
            'NamaKategori' => 'required',
            'NamaProduk' => 'required',
            'Harga' => 'required|max:999',
            'penerangan' => 'required',
            'Unit' => 'required',
            'Berat' => 'required',
        ]);

        $produk->creator_email = Auth::user()->email;
        $produk->NamaKategori = $request->NamaKategori;
        $produk->NamaProduk = $request->NamaProduk;
        $produk->Harga = $request->Harga;
        $produk->penerangan = $request->penerangan;
        $produk->GambarProduk = $request->file('GambarProduk');
        $produk->Unit = $request->Unit;
        $produk->Berat = $request->Berat;

        $produk->save();

        return  redirect('/')->with('success', 'Produk sudah ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
