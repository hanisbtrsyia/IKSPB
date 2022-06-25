<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Peniaga;
use App\Models\Pelanggan;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'NamaPengguna' => ['required', 'string', 'max:255'],
            'Emel' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
                        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role'=>2,
    //         'favoriteColor'=>$data['favoriteColor'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    function register(Request $request){

        if($request->role=="peniaga"){
         $request->validate([
            'NamaPengguna' => ['required', 'string', 'max:255'],
            'Emel' => ['required', 'string', 'email', 'max:255', 'unique:peniaga'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => 'required_with:password|same:password|min:6'
         ]);
        }

        else if($request->role=="pelanggan"){
            $request->validate([
               'NamaPengguna' => ['required', 'string', 'max:255'],
               'Emel' => ['required', 'string', 'email', 'max:255', 'unique:pelanggan'],
               'password' => ['required', 'string', 'min:6', 'confirmed'],
               'password_confirmation' => 'required_with:password|same:password|min:6'
            ]);
           }

         $user = new User();
         $user->name = $request->NamaPengguna;
         $user->email = $request->Emel;
         $user->password = Hash::make($request->password);
        
         if($request->role=="peniaga"){
            $user->role = "peniaga";
            $user->save();
            $peniaga = new Peniaga();
            $peniaga->id_peniaga = $user->id;
            $peniaga->NamaPengguna = $request->NamaPengguna;
            $peniaga->Emel = $request->Emel;
            // $peniaga->role = 2;
            
            //$user->picture = $picture; 
            $peniaga->KataLaluan = Hash::make($request->password);

            if( $peniaga->save() ){

                return redirect()->route('login')->with('success','Anda sudah berjaya didaftarkan');
             }
             else{
                return redirect()->back()->with('error','Failed to register');
            }
         }

         else if($request->role=="pelanggan"){
            $user->role = "pelanggan";
            $user->save();
            $pelanggan = new Pelanggan();
            $pelanggan->id_pelanggan = $user->id;
            $pelanggan->NamaPelanggan = $request->NamaPengguna;
            $pelanggan->Emel = $request->Emel;
            
            // $peniaga->role = 2;
            
            //$user->picture = $picture; 
            //$pelanggan->KataLaluan = Hash::make($request->password);
            
            if( $pelanggan->save() ){

                //return redirect()->back()->with('success','Anda sudah berjaya didaftarkan');
                return redirect()->route('login')->with('success','Anda sudah berjaya didaftarkan');
               
             }
            else{
                return redirect()->back()->with('error','Failed to register');
             }
         }
            

         

        

    }


}