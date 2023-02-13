<?php

namespace App\Http\Controllers;

use App\Models\Registrar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardRegistrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrars = Registrar::oldest();
        $search = request('search');

        if ($search) {
            $registrars->where('name', 'like', "%$search%")
                ->orWhere('nim', 'like', "%$search%")
                ->orWhere('division1', 'like', "%$search%")
                ->orWhere('division2', 'like', "%$search%")
                ->orWhere('class', 'like', "%$search%")
                ->orWhere('force', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('whatsapp', 'like', "%$search%")
                ->orWhere('line', 'like', "%$search%");
        }

        return view('dashboard.registrar.index', [
            'title' => 'Dashboard',
            'registrars' => $registrars->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrar  $registrar
     * @return \Illuminate\Http\Response
     */
    public function show(Registrar $registrar)
    {
        return view('dashboard.registrar.show', [
            'title' => 'Detail',
            'registrar' => $registrar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrar  $registrar
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrar $registrar)
    {
        $this->authorize('admin');
        $data = [
            'title' => 'Edit',
            'registrar' => $registrar,
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
            ]
        ];

        return view('dashboard.registrar.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrar  $registrar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrar $registrar)
    {
        $this->authorize('admin');
        $rules = [
            'name' => 'required',
            'nim' => 'required|max:17|min:10',
            'force' => '',
            'class' => '',
            'email' => 'required',
            'domicile' => 'required',
            'address' => 'required',
            'whatsapp' => 'required',
            'line' => 'required',
            'division1' => '',
            'division2' => '',
            'main_reason' => 'required',
            'division1_reason' => 'required',
            'division2_reason' => 'required',
            'kpm' => 'image|max:4096',
            'twibbon' => 'required',
            'isPass' => '',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('kpm')) {
            if ($registrar->kpm) {
                Storage::delete($registrar->kpm);
            }
            $validatedData['kpm'] = $request->file('kpm')->store('kpm-images');
        }

        Registrar::where('id', $registrar->id)->update($validatedData);

        return redirect('/dashboard/registrar')->with('success', 'Calon staff telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrar  $registrar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrar $registrar)
    {
        $this->authorize('admin');
        if ($registrar->kpm) {
            Storage::delete($registrar->kpm);
        }

        Registrar::destroy($registrar->id);

        return redirect('/dashboard/registrar')->with('success', 'Calon staff telah dihapus');

    }

    public function search($keyword)
    {
        return count(Registrar::where('division1', 'like', "%$keyword%")->orwhere('division2', 'like', "%$keyword%")->get());
    }

    public function dashboard()
    {
        $registrars = DB::table('registrars')
            ->select(DB::raw("name, CASE WHEN isPass = '1' THEN division1 WHEN isPass = '2' THEN division2 END AS 'lulus di divisi'"))
            ->whereIn('isPass', ['1', '2'])
            ->orderBy('lulus di divisi')
            ->get();

        $ispass = $registrars->count();

        $data = [
            'title' => 'Dashboard',
            'registrars' => count(Registrar::all()),
            'administrasi' => $this->search('Administrasi'),
            'akademik' => $this->search('Akademik'),
            'kastrad' => $this->search('Kajian Strategi dan Advokasi'),
            'kwu' => $this->search('Kewirausahaan'),
            'kominfo' => $this->search('Komunikasi dan Informasi'),
            'pmb' => $this->search('Pengembangan Minat dan Bakat'),
            'psdm' => $this->search('Pengembangan Sumber Daya Manusia'),
            'isPass' => $ispass,
        ];

        return view('dashboard.index', $data);
    }
    
    
}
