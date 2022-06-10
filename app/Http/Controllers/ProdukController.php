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
        return view('pelancongan.peniaga.ListProduk',compact('produk','produk'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$produk = new Produk();
        $files = [];

        if ($request->hasFile('GambarProduk')) {
            $request->validate([
            'GambarProduk' => 'required|max:5',
        ]);
   
        foreach ($request->file('GambarProduk') as $file) {
            $imgname = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/produk', $imgname);
            $files[] = $imgname;
    //if ($request->hasFile('GambarProduk')) {
    //    $file = $request->file('GambarProduk');
    //    $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
    //    $file->move('assets/images/produk',$img_name);
       
        }
        }

        Produk::create([
            'NamaKategori' => $request->NamaKategori,
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
            'penerangan' => $request->penerangan,
            'GambarProduk' => $files,
            //'GambarProduk' => json_encode($files),
            'Unit' => $request->Unit,
            'Berat' => $request->Berat,
            'created_at' => now(),
        ]);        

        //$produk->save();
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
       
        $updateProduk = Produk::find($id);
        $files = [];
        
        if ($request->hasFile('GambarProduk')) {
            $request->validate([
                'GambarProduk' => 'required|max:5',
            ]);
            foreach ($request->file('GambarProduk') as $file) {
                $imgname = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
                $file->move('assets/images/produk', $imgname);
                $files[] = $imgname;
            //unlink("assets/images/produk/".$updateProduk->GambarProduk);
        
        }
        $updateProduk->GambarProduk = $files;
    }
        $updateProduk->NamaKategori = $request->input('NamaKategori');
        $updateProduk->NamaProduk = $request->input('NamaProduk');
        $updateProduk->Harga = $request->input('Harga');
        $updateProduk->penerangan = $request->input('penerangan');
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

    public function deleteProd(Request $request)
    {
        $id_produk = $request->input('id_produk');
        $produk = Produk::find($id_produk);
        $produk->delete();
        return redirect()->route('produk.list')->with('success', 'Produk has been deleted successfully');
    }

    public function cart()
    {
        return view('belibelah.addtocart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id_produk])) {
            $cart[$id_produk]['Kuantiti']++;
        } else {
            $cart[$id_produk] = [
                "NamaProduk" => $produk->NamaProduk,
                "Kuantiti" => 1,
                "Harga" => $produk->Harga
               
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updateCart(Request $request)
    {
        if($request->id_produk && $request->Kuantiti){
            $cart = session()->get('cart');
            $cart[$request->id_produk]["Kuantiti"] = $request->Kuantiti;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)
    {
        if($request->id_produk) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id_produk])) {
                unset($cart[$request->id_produk]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
