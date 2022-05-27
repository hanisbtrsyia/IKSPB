<?php

namespace App\Http\Controllers;

use App\Models\InformasiTempatMenarik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TempatMenarikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temMenarik = InformasiTempatMenarik::all();
        return view('pelancongan.pelanggan.infoTempatMenarik',compact('temMenarik','temMenarik'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temMenarik = InformasiTempatMenarik::all();
        return view('pelancongan.addTempatMenarik',compact('temMenarik','temMenarik'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temMenarik = new InformasiTempatMenarik();
        $files = [];

       // if ($request->hasFile('GambarProduk')) {

    //     $request->validate([
       //         'GambarProduk.*' => 'image'
      //      ]);

       //     foreach ($request->file('GambarProduk') as $file) {
        //        $imgname = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
        //        $file->move('img', $imgname);
         //       $files[] = $imgname;
        //    }
       // }

      //  $request->validate([
      //      'GambarProduk' => 'required|max:5',
           
      //  ]);

       // $produk->GambarProduk = $request->file('GambarProduk');

       $request->validate([
        'gambar' => 'required',

    ]);
   
    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('public/assets/images');
        $temMenarik->temMenarik_image = $path;
    }

    InformasiTempatMenarik::create([
            'NamaTempat' => $request->NamaTempat,
            'gambar' => $request->file('gambar'),
            'Lokasi' => $request->Lokasi,
            'penerangan' => $request->penerangan,
            'created_at' => now(),
        ]);
        return redirect()->route('addTempatMenarik.create')->with('success','Tempat Menarik sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pelancongan.addTempatMenarik');
        return view('pelancongan.addTempatMenarik');
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
