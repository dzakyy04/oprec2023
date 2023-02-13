<?php

namespace App\Http\Controllers;

use App\Models\Registrar;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    private $time = '2023-01-27 21:00:00';

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        if (date("Y-m-d H:i:s") > $this->time) {
            return view('daftar.error', ['title' => 'Daftar']);
        }

        $data = [
            'title' => 'Daftar',
            'divisions' => [
                'Administrasi',
                'Akademik - Pengembangan Ilmu Pengetahuan',
                'Akademik - Pengembangan Teknologi Informasi',
                'Kajian Strategi dan Advokasi - Advokasi dan Kesejahteraan Mahasiswa',
                'Kajian Strategi dan Advokasi - Politik dan Propaganda',
                'Kewirausahaan',
                'Komunikasi dan Informasi - Hubungan Masyarakat',
                'Komunikasi dan Informasi - Multimedia',
                'Pengembangan Minat dan Bakat - Olahraga',
                'Pengembangan Minat dan Bakat - Seni',
                'Pengembangan Sumber Daya Manusia'
            ],
            'classes' => [
                'Reguler A',
                'Reguler B',
                'Reguler C',
                'Reguler D',
                'Bilingual A',
                'Bilingual B'
            ],
            'forces' => [
                '2021',
                '2022'
            ],
            'domiciles' => [
                'Indralaya',
                'Palembang'
            ],
        ];

        return view('daftar.index', $data);
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        if (date("Y-m-d H:i:s") > $this->time) {
            return view('daftar.error', ['title' => 'Daftar']);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'nim' => 'required|max:17|min:10|unique:registrars',
            'force' => '',
            'class' => '',
            'email' => 'required',
            'domicile' => '',
            'address' => 'required',
            'whatsapp' => 'required',
            'line' => 'required',
            'division1' => '',
            'division2' => '',
            'main_reason' => 'required',
            'division1_reason' => 'required',
            'division2_reason' => 'required',
            'kpm' => 'required|image|file|max:4096',
            'twibbon' => 'required',
        ]);

        if ($request->file('kpm')) {
            $validatedData['kpm'] = $request->file('kpm')->store('kpm-images');
        }

        Registrar::create($validatedData);

        return redirect('/daftar/sukses');
    }
}
