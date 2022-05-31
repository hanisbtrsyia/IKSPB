<?php

namespace App\Http\Controllers;

use App\Models\InformasiTempatPenginapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TempatPenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_tempatPenginapan)
    {
        $temPenginapan = InformasiTempatPenginapan::find($id_tempatPenginapan);
        return view('pelancongan.pelanggan.infoTempatPenginapan',compact('temPenginapan'));
              
    }

    public function homeTempatPenginapan()
    {
        $temPenginapan = InformasiTempatPenginapan::all();
        //dd($produk);
        return view('homeTempatPenginapan',compact('temPenginapan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temPenginapan = InformasiTempatPenginapan::all();
        return view('pelancongan.addTempatPenginapan',compact('temPenginapan','temPenginapan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temPenginapan = new InformasiTempatPenginapan();
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
        $temPenginapan->temPenginapan_image = $path;
    }

    InformasiTempatPenginapan::create([
            'NamaTempat' => $request->NamaTempat,
            'NamaHos' => $request->NamaHos,
            'NoTel' => $request->NoTel,
            'Lokasi' => $request->Lokasi,
            'penerangan' => $request->penerangan,
            'gambar' => $request->file('gambar'),
            'HargaPerMalam' => $request->HargaPerMalam,
            'Kemudahan' => $request->Kemudahan,
            'created_at' => now(),
        ]);
        return redirect()->route('addTempatPenginapan.create')->with('success','Tempat Penginapan sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pelancongan.pelanggan.infoTempatPenginapan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required',

        ]);
        $updateTemPen = InformasiTempatPenginapan::find($id);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/assets/images/penginapan');
            $updateTemPen->gambar = $path;
        }
        
        $updateTemPen->NamaTempat = $request->input('NamaTempat');
        $updateTemPen->NamaHos = $request->input('NamaHos');
        $updateTemPen->NoTel = $request->input('NoTel');
        $updateTemPen->Lokasi = $request->input('Lokasi');
        $updateTemPen->penerangan = $request->input('penerangan');
        $updateTemPen->HargaPerMalam = $request->input('HargaPerMalam');
        $updateTemPen->Kemudahan = $request->input('Kemudahan');
       
        $updateTemPen->update();

        return redirect()->route('pelancongan.updateTempatPenginapan')->with('success', 'Tempat Penginapan sudah dikemaskini.');
       
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
