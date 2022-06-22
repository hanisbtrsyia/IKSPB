<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerProfileController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_pelanggan)
    {
        //
        $profil = Pelanggan::find($id_pelanggan);
        return view('dashboards.pelanggan.profile',compact('profil'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Pelanggan::all();
        return view('dashboards.pelanggan.profile',compact('profil','profil'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil = new Pelanggan();

        Pelanggan::create([
            'NamaPelanggan' => $request->NamaPelanggan,
            'Emel' => $request->Emel,
            'NoTel' => $request->NoTel,
            'created_at' => now(),
        ]);
        return redirect()->route('profil.create')->with('success','Profil sudah ditambah');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboards.pelanggan.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $profil = Pelanggan::find(Auth::user()->id);
        return view('dashboards.pelanggan.profile',compact('profil'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
              
        $updateProfil = Pelanggan::find(Auth::user()->id);
               
        $updateProfil->NamaPelanggan = $request->input('NamaPelanggan');
        $updateProfil->Emel = $request->input('Emel');
        $updateProfil->NoTel = $request->input('NoTel');
                   
        $updateProfil->update();

        return redirect()->route('profil.Custedit')->with('success', 'Profil sudah dikemaskini.');
       
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
