<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peniaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_peniaga)
    {
        //
        $profile = Peniaga::find($id_peniaga);
        return view('dashboards.peniaga.profile',compact('profile'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Peniaga::all();
        return view('dashboards.peniaga.profile',compact('profile','profile'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Peniaga();
        $files = [];

      
       $request->validate([
        'GambarProfil' => 'required',

    ]);
   
    if ($request->hasFile('GambarProfil')) {
        $file = $request->file('GambarProfil');
        $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images',$img_name);
        
    }

    Peniaga::create([
            'NamaPengguna' => $request->NamaPengguna,
            'KataLaluan' => $request->KataLaluan,
            'Emel' => $request->Emel,
            'NoTel' => $request->NoTel,
            'GambarProfil' => $img_name,
            'NamaKedai' => $request->NamaKedai,
            'Alamat' => $request->Alamat,
            'NoAkaun' => $request->NoAkaun,
            'created_at' => now(),
        ]);
        return redirect()->route('profile.create')->with('success','Profil sudah ditambah');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboards.peniaga.profile');
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
        $profile = Peniaga::find(Auth::user()->id);
        return view('dashboards.peniaga.profile',compact('profile'));
       
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
              
        $updateProfil = Peniaga::find(Auth::user()->id);
        
        if ($request->hasFile('GambarProfil')) {
            //unlink("assets/images/profile/".$updateProfil->GambarProfil);
            $file = $request->file('GambarProfil');
            $img_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/profile',$img_name);
            $updateProfil->GambarProfil = $img_name;
        }
        
        $updateProfil->NamaPengguna = $request->input('NamaPengguna');
        $updateProfil->Emel = $request->input('Emel');
        $updateProfil->NoTel = $request->input('NoTel');
        $updateProfil->NamaKedai = $request->input('NamaKedai');
        $updateProfil->Alamat = $request->input('Alamat');
        $updateProfil->NoAkaun = $request->input('NoAkaun');
                   
        $updateProfil->update();

        return redirect()->route('profile.edit')->with('success', 'Profil sudah dikemaskini.');
       
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
