<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InformasiTempatMenarik;
use App\Models\InformasiTempatPenginapan;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='admin')
        {
            //$produk = Produk::all();
            //dd($produk);
            //return view('pelancongan.peniaga.ListProduk',compact('produk'));
            //return view('dashboards.peniaga.homepeniaga');
            $temMenarik = InformasiTempatMenarik::all();
            //dd($produk);
            return view('pelancongan.admin.ListTempatMenarik',compact('temMenarik'));
            //return view('pelancongan.admin.ListTempatMenarik');
        }
        elseif($role=='peniaga')
        {
            $produk = Produk::all();
            //dd($produk);
            return view('pelancongan.peniaga.ListProduk',compact('produk'));
            //$temPenginapan = InformasiTempatPenginapan::all();
            //dd($produk);
            //return view('pelancongan.peniaga.ListTempatPenginapan',compact('temPenginapan'));
            //return view('dashboards.peniaga.homepeniaga');
        }
        elseif($role=='pelanggan')
        {
            $produk = Produk::all();
            //dd($produk);
            return view('welcome',compact('produk'));
            //return view('welcome');
        }
    }
    
}