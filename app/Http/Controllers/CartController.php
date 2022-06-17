<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemDalamTroli;

class CartController extends Controller
{
    public function index($id_troli)
    {
        $cart = ItemDalamTroli::find($id_troli);
        return view('belibelah.addtocart',compact('cart'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = ItemDalamTroli::all();
        return view('belibelah.membuatpesanan',compact('cart','cart'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$temMenarik = new InformasiTempatMenarik();
        //$files = [];

       // if ($request->hasFile('gambar')) {
       //     $request->validate([
       //     'gambar' => 'required|max:5',

       // ]);
   
    //foreach ($request->file('gambar') as $file) {
    //    $imgname = time().rand(1,100).'.'.$file->getClientOriginalExtension();
    //    $file->move('assets/images/attractions',$imgname);
    //    $files[] = $imgname;
        //$path = $request->file('gambar')->store('public/assets/images');
        //$temMenarik->temMenarik_image = $path;
    //}
        //}
        ItemDalamTroli::create([
            'Kuantiti' => $request->Kuantiti,
            //'gambar' => $files,
            'Harga' => $request->Harga,
            'JumlahBayaranItem' => $request->JumlahBayaranItem,
            'created_at' => now(),
        ]);

        return redirect()->route('addcart.create')->with('success','Item has been added to cart');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
       
       
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

    public function deletecart(Request $request)
    {
       
    }
}
