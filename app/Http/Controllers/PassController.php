<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PassController extends Controller
{
    public function index()
    {

        return view('dashboard.passregistrars.index', [
            'title' => 'Pendaftar Diterima',
            'adm' => $this->searchDivision('Administrasi'),
            'akademik' => $this->searchDivision('Akademik'),
            'kastrad' => $this->searchDivision('Kajian Strategi dan Advokasi'),
            'kwu' => $this->searchDivision('Kewirausahaan'),
            'kominfo' => $this->searchDivision('Komunikasi dan Informasi'),
            'pmb' => $this->searchDivision('Pengembangan Minat dan Bakat'),
            'psdm' => $this->searchDivision('Pengembangan Sumber Daya Manusia'),
        ]);
    }

    public function searchDivision($div)
    {
        $registrars = collect(DB::table(
            DB::raw("
        (SELECT name, nim, isPass,
            CASE
                WHEN isPass = '1' THEN division1
                WHEN isPass = '2' THEN division2
            END AS 'passDivision'
        FROM registrars) as registrars_temp
    ")
        )->select('name', 'nim', 'isPass', 'passDivision')
                ->whereIn('isPass', ['1', '2'])
                ->where('passDivision', 'like', "%$div%")
                ->orderBy('passDivision')->orderBy('name')
                ->get()
                ->toArray());

        return $registrars;
    }
}
