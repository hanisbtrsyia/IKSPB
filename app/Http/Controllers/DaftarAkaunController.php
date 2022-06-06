<?php

namespace App\Http\Controllers;

use App\Models\Peniaga;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarAkaunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $role = Auth::user()->role;

        // if ($role == 'admin') {
        //     $user = User::all();

        $user = User::all();
        return view('dashboards.peniaga.homepeniaga', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('dashboards.peniaga.homepeniaga', compact('user'));
       
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
        User::create([
            'NamaPengguna' => $request->NamaPengguna,
            'Emel' => $request->Emel,
            'KataLaluan' => $request->KataLaluan,
            'created_at' => now(),
        ]);
        return redirect()->route('DaftarAkaun.create')->with('success', 'Account has been added');
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

        return view('dashboards.peniaga.homepeniaga');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Peniaga::with('info')->find($id);
        return view('dashboards.peniaga.profile', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'GambarProfil' => 'image|mimes:jpeg,png,jpg',

        ]);

        $profile = Peniaga::find($id);
        if ($request->hasFile('GambarProfil')) {
            $file = $request->file('GambarProfil');
            $filename= $profile->id.$file->getClientOriginalName();
            $file->move(public_path('public/file'),$filename);
            $profile->picture = $filename;
            
        }


        $profile->NamaPengguna = $request->input('NamaPengguna');
        $profile->Emel = $request->input('Emel');
        $profile->KataLaluan = $request->input('KataLaluan');

            $profile_id = Peniaga::find($id);
            $profile_id->NoTel = $request->input('NoTel');
            $profile_id->NamaKedai = $request->input('NamaKedai');
            $profile_id->Alamat = $request->input('Alamat');
            $profile_id->NoAkaun = $request->input('NoAkaun');
            $profile_id->save();
        

        $profile->save();
        // $profile_id->update();

        return redirect()->route('DaftarAkaun.edit', $profile->id)->with('success', 'Your profile has been updated successfully');
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