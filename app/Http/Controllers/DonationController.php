<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function getDonationById($id)
    {
        // Mengambil semua data donasi (bukan berdasarkan ID)
        $donasis = Donasi::all()->map(function ($donasi) {
            $donasi->path = asset('storage/' . $donasi->path);
            $donasi->qris_path = asset('storage/' . $donasi->qris_path);

            // Gabungkan data ATM
            $donasi->bank = collect([
                ['nama' => $donasi->nama_atm_1, 'no_rek' => $donasi->no_rek_1],
                ['nama' => $donasi->nama_atm_2, 'no_rek' => $donasi->no_rek_2],
                ['nama' => $donasi->nama_atm_3, 'no_rek' => $donasi->no_rek_3],
            ])->filter(function ($bank) {
                return !empty($bank['nama']) && !empty($bank['no_rek']);
            });

            // Gabungkan data e-Money
            $donasi->emoney = collect([
                ['nama' => $donasi->emoney_1, 'va' => $donasi->nomer_va_1],
                ['nama' => $donasi->emoney_2, 'va' => $donasi->nomer_va_2],
                ['nama' => $donasi->emoney_3, 'va' => $donasi->nomer_va_3],
            ])->filter(function ($emoney) {
                return !empty($emoney['nama']) && !empty($emoney['va']);
            });

            return $donasi;
        });

        // Mengirimkan koleksi donasi ke view
        return view('landingpage', compact('donasis'));
    }
}
