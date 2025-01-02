<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Donasi;
use App\Models\Hero;
use App\Models\Kontak;
use App\Models\PaymentMethod;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentsController extends Controller
{
    public function index(Request $request)
    {

        $donasis = Donasi::all()->map(function ($donasi) {
            $donasi->path = $donasi->path ? asset('storage/' . $donasi->path) : null;
            $donasi->qris_path = $donasi->qris_path ? asset('storage/' . $donasi->qris_path) : null;
        
            // Kelompokkan data bank
            $donasi->bank = collect([
                ['key' => 'ATM1', 'nama' => $donasi->nama_atm_1, 'no_rek' => $donasi->no_rek_1],
                ['key' => 'ATM2', 'nama' => $donasi->nama_atm_2, 'no_rek' => $donasi->no_rek_2],
                ['key' => 'ATM3', 'nama' => $donasi->nama_atm_3, 'no_rek' => $donasi->no_rek_3],
            ])->filter(function ($bank) {
                return !empty($bank['nama']) && !empty($bank['no_rek']);
            });
        
            // Kelompokkan data e-money
            $donasi->emoney = collect([
                ['key' => 'Emoney1', 'nama' => $donasi->emoney_1, 'va' => $donasi->nomer_va_1],
                ['key' => 'Emoney2', 'nama' => $donasi->emoney_2, 'va' => $donasi->nomer_va_2],
                ['key' => 'Emoney3', 'nama' => $donasi->emoney_3, 'va' => $donasi->nomer_va_3],
            ])->filter(function ($emoney) {
                return !empty($emoney['nama']) && !empty($emoney['va']);
            });
        
            return $donasi;
        });
        
        // dd($donasis);
        $contents = Content::all();
        $tentangs = Tentang::all();
        $Hero = Hero::all();
        $kontaks = Kontak::all();

        return view('landingpage', compact('contents', 'tentangs', 'donasis', 'Hero', 'kontaks'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_atm_1' => 'required',
            'no_rek_1' => 'required',
            'nama_atm_2' => 'required',
            'no_rek_2' => 'required',
            'nama_atm_3' => 'required',
            'no_rek_3' => 'required',
            'emoney_1' => 'required',
            'nomer_va_1' => 'required',
            'emoney_2' => 'required',
            'nomer_va_2' => 'required',
            'emoney_3' => 'required',
            'nomer_va_3' => 'required',
            
        ]);

        // Buat entri baru
        Donasi::create($validatedData);

        return redirect()->route('donasi.index');
    }

    public function getPaymentDetails($id)
    {
        $donasi = Donasi::findOrFail($id);
    
        return response()->json([
            'bank' => $donasi->bank,
            'emoney' => $donasi->emoney,
            'qris_path' => $donasi->qris_path,
        ]);
    }

    public function getPaymentMethod(Request $request){

        $paymentMethods = Donasi::find($request->id);
        return $paymentMethods;

    }

}
