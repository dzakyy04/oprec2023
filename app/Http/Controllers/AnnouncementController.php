<?php

namespace App\Http\Controllers;

use App\Models\Registrar;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'token' => csrf_token(),
        ];

        return view('pengumuman.index', $data);
    }

    public function check(Request $request)
    {
        $registrar = Registrar::where('nim', $request->nim)->first();

        $data = [
            'isPass' => 0,
            'message' => '',
        ];

        if ($registrar) {
            if ($registrar['isPass'] == 1) {
                $data['isPass'] = 1;
                $name = $registrar['name'];
                $nim = $registrar['nim'];
                $division = explode('-', $registrar['division1']);
                $data['message'] = "
                <table class='table table-borderless'>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><strong>$name</strong></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><strong>$nim</strong></td>
                        </tr>
                        <tr>
                            <td colspan='3'>Selamat! Kamu dinyatakan <strong>Diterima</strong> pada OPREC HMIF UNSRI 2023 di</td>
                        </tr>
                        <tr>
                            <td>Dinas</td>
                            <td>:</td>
                            <td><strong>$division[0]</strong></td>
                        </tr>";

                if (isset($division[1])) {
                    $data['message'] .= "
                            <tr>
                                <td>Divisi</td>
                                <td>:</td>
                                <td><strong>$division[1]</strong></td>
                            </tr>";
                }

                $data['message'] .= "
                    <tr>
                        <td colspan='3'>Silahkan bergabung ke Group Whatsapp Kabinet Abhinaya</td>
                    </tr>
                    </tbody>
                </table>";

            } else if ($registrar['isPass'] == 2) {
                $data['isPass'] = 1;
                $name = $registrar['name'];
                $nim = $registrar['nim'];
                $division = explode('-', $registrar['division2']);
                $data['message'] = "
                <table class='table table-borderless'>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><strong>$name</strong></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><strong>$nim</strong></td>
                        </tr>
                        <tr>
                            <td colspan='3'>Selamat! Kamu dinyatakan <strong>Diterima</strong> pada OPREC HMIF UNSRI 2023 di</td>
                        </tr>
                        <tr>
                            <td>Dinas</td>
                            <td>:</td>
                            <td><strong>$division[0]</strong></td>
                        </tr>";

                if (isset($division[1])) {
                    $data['message'] .= "
                            <tr>
                                <td>Divisi</td>
                                <td>:</td>
                                <td><strong>$division[1]</strong></td>
                            </tr>";
                }

                $data['message'] .= "
                    <tr>
                        <td colspan='3'>Silahkan bergabung ke Group Whatsapp Kabinet Abhinaya</td>
                    </tr>
                    </tbody>
                </table>";

            } else {
                $name = $registrar['name'];
                $nim = $registrar['nim'];
                $data['message'] = "
                <p>Maaf, Pendaftar dengan nama <strong>$name</strong> dengan NIM <strong>$nim</strong> dinyatakan <strong>Tidak Diterima</strong> pada OPREC HMIF UNSRI 2023</p>
                <h4 class='text-center fw-bold'>Jangan Putus Asa dan Tetap Semangat!</h4>
                ";
            }
        } else {
            $data['message'] = "Maaf, NIM yang kamu masukkan tidak terdaftar";
        }

        return redirect('/pengumuman')->with($data);

    }
}
