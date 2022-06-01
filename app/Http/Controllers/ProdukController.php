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
    public function index($id_produk)
    {
        $produk = Produk::find($id_produk);
        //dd($produk);
        return view('produk.ProductDetails',compact('produk'));
    }

    public function homebelibelah()
    {
        $produk = Produk::all();
        //dd($produk);
        return view('homebelibelah',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('belibelah.addproduk',compact('produk','produk'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk();
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
        'GambarProduk' => 'required',

    ]);
   
    if ($request->hasFile('GambarProduk')) {
        $file = $request->file('GambarProduk');
        $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/produk',$img_name);
        //$path = $request->file('GambarProduk')->store('public/assets/images');
        //$produk->produk_image = $path;
    }

        Produk::create([
            'NamaKategori' => $request->NamaKategori,
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
            'penerangan' => $request->penerangan,
            'GambarProduk' => $img_name,
            'Unit' => $request->Unit,
            'Berat' => $request->Berat,
            'created_at' => now(),
        ]);
        return redirect()->route('addproduk.create')->with('success','Produk sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('produk.ProductDetails');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        return view('belibelah.updateproduk',compact('produk'));
       
    }

    public function PeniagaUpdate()
    {
        $produk = Produk::all();
        //dd($produk);
        return view('pelancongan.peniaga.ListProduk',compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'GambarProduk' => 'required',

        ]);
        $updateProduk = Produk::find($id);
        
        if ($request->hasFile('GambarProduk')) {
            unlink("assets/images/produk/".$updateProduk->GambarProduk);
            $file = $request->file('GambarProduk');
            $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/produk',$img_name);
            //$path = $request->file('gambar')->store('public/assets/images/penginapan');
            //$temPenginapan->temPenginapan_image = $path;
        }
        
        $updateProduk->NamaKategori = $request->input('NamaKategori');
        $updateProduk->NamaProduk = $request->input('NamaProduk');
        $updateProduk->Harga = $request->input('Harga');
        $updateProduk->penerangan = $request->input('penerangan');
        $updateProduk->GambarProduk = $img_name;
        $updateProduk->Unit = $request->input('Unit');
        $updateProduk->Berat = $request->input('Berat');
                   
        $updateProduk->update();

        return redirect()->route('produk.list')->with('success', 'Produk sudah dikemaskini.');
       
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
