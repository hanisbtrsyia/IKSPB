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
    public function index($id_tempatMenarik)
    {
        $temMenarik = InformasiTempatMenarik::find($id_tempatMenarik);
        return view('pelancongan.pelanggan.infoTempatMenarik',compact('temMenarik'));
       
    }

    public function homeTempatMenarik()
    {
        $temMenarik = InformasiTempatMenarik::all();
        //dd($produk);
        return view('homeTempatMenarik',compact('temMenarik'));
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
        $file = $request->file('gambar');
        $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/attractions',$img_name);
        
        //$path = $request->file('gambar')->store('public/assets/images');
        //$temMenarik->temMenarik_image = $path;
    }

    InformasiTempatMenarik::create([
            'NamaTempat' => $request->NamaTempat,
            'gambar' => $img_name,
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
        return view('pelancongan.pelanggan.infoTempatMenarik');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tempatMenarik)
    {
        $temMenarik = InformasiTempatMenarik::find($id_tempatMenarik);
        return view('pelancongan.updateTempatMenarik',compact('temMenarik'));
       
    }

    public function AdminUpdate()
    {
        $temMenarik = InformasiTempatMenarik::all();
        //dd($produk);
        return view('pelancongan.admin.ListTempatMenarik',compact('temMenarik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required',

        ]);
        $updateTemMen = InformasiTempatMenarik::find($id);
        
        if ($request->hasFile('gambar')) {
            unlink("assets/images/attractions/".$updateTemMen->gambar);
            $file = $request->file('gambar');
            $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/attractions',$img_name);
            //$path = $request->file('gambar')->store('public/assets/images/penginapan');
            //$temPenginapan->temPenginapan_image = $path;
        }
        
        $updateTemMen->NamaTempat = $request->input('NamaTempat');
        $updateTemMen->gambar = $img_name;
        $updateTemMen->Lokasi = $request->input('Lokasi');
        $updateTemMen->penerangan = $request->input('penerangan');
        
       
        $updateTemMen->update();

        return redirect()->route('TempatMenarik.list')->with('success', 'Tempat Menarik sudah dikemaskini.');
       
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
