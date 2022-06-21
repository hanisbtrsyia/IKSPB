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
        //$temPenginapan = new InformasiTempatPenginapan();
        $files = [];

        if ($request->hasFile('gambar')) {
        $request->validate([
        'gambar' => 'required|max:5',

        ]);
   
    foreach ($request->file('gambar') as $file) {
        $imgname = time().rand(1,100).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/penginapan',$imgname);
        $files[] = $imgname;
        //$path = $request->file('gambar')->store('public/assets/images');
        //$temMenarik->temMenarik_image = $path;
    }
        }
       
    InformasiTempatPenginapan::create([
            'NamaTempat' => $request->NamaTempat,
            'NamaHos' => $request->NamaHos,
            'NoTel' => $request->NoTel,
            'Lokasi' => $request->Lokasi,
            'penerangan' => $request->penerangan,
            'gambar' => $files,
            'HargaPerMalam' => $request->HargaPerMalam,
            'Kemudahan' => $request->Kemudahan,
            'created_at' => now(),
            'id_peniaga'=>Auth::user()->id,
        ]);
        return redirect()->route('TempatPenginapan.list')->with('success','Tempat Penginapan sudah ditambah');
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

    public function edit($id_tempatPenginapan)
    {
        $temPenginapan = InformasiTempatPenginapan::find($id_tempatPenginapan);
        //dd($temPenginapan);
        return view('pelancongan.updateTempatPenginapan',compact('temPenginapan'));
    }

    public function PeniagaUpdate()
    {
        $temPenginapan = InformasiTempatPenginapan::where('id_peniaga', Auth::user()->id)->get();
        //$temPenginapan = InformasiTempatPenginapan::all();
        //dd($temPenginapan);
        return view('pelancongan.peniaga.ListTempatPenginapan',compact('temPenginapan'));
    }

    public function AdminUpdate()
    {
        $temPenginapan = InformasiTempatPenginapan::all();
        //dd($produk);
        return view('pelancongan.admin.ListTempatPenginapan',compact('temPenginapan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $updateTemPen = InformasiTempatPenginapan::find($id);
        $files = [];

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|max:5',
            ]);
            foreach ($request->file('gambar') as $file) {
                $imgname = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
                $file->move('assets/images/penginapan', $imgname);
                $files[] = $imgname;
            //unlink("assets/images/produk/".$updateProduk->GambarProduk);
        
        }
        $updateTemPen->gambar = $files;
    }
        
        $updateTemPen->NamaTempat = $request->input('NamaTempat');
        $updateTemPen->NamaHos = $request->input('NamaHos');
        $updateTemPen->NoTel = $request->input('NoTel');
        $updateTemPen->Lokasi = $request->input('Lokasi');
        $updateTemPen->penerangan = $request->input('penerangan');
        $updateTemPen->HargaPerMalam = $request->input('HargaPerMalam');
       // $Kemudahan= implode(",", $request->get('option'));
       // $updateTemPen->Kemudahan = $Kemudahan;
        $updateTemPen->Kemudahan = $request->input('Kemudahan');
        
        $updateTemPen->update();

        return redirect()->route('TempatPenginapan.list')->with('success', 'Tempat Penginapan sudah dikemaskini.');
       
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
    public function destroy($id_tempatPenginapan)
    {
       
    }

    public function deleteTemPeng(Request $request)
    {
        $id_tempatPenginapan = $request->input('id_tempatPenginapan');
        $temPenginapan = InformasiTempatPenginapan::find($id_tempatPenginapan);
        $temPenginapan->delete();
        return redirect()->route('TempatPenginapan.list')->with('success', 'Tempat Penginapan has been deleted successfully');
    }
}
