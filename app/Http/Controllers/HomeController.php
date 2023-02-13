<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'faq' => [
                'questions' => [
                    'Siapa saja yang boleh mendaftar menjadi staff HMIF 2023?',
                    'Bagaimana cara mendaftar untuk bergabung dengan HMIF?',
                    'Apakah boleh mendaftar dengan bidang yang sama di opsi 1 dan opsi 2?',
                    'Apakah dinas yang kita pilih di formulir akan mutlak ditempatkan disana?',
                    'Kalau tidak mengikuti salah satu tahapan, apakah dinyatakan tidak lulus?',
                    'Apabila ada berkas atau informasi yang salah apakah boleh submit ulang?',
                    'Apakah ada kuota tertentu untuk Open Recruitment ini?',
                    'Saya sudah memiliki organisasi di internal dan eksternal kampus, apakah saya masih boleh ikut HMIF?',
                    'Apakah calon pendaftar HMIF harus memiliki pengalaman organisasi sebelumnya?',
                    'Terdapat dinas apa saja dalam organisasi HMIF?',
                    'Apakah bisa mendaftar HMIF dan BEM secara bersamaan?',
                ],
                'answers' => [
                    'Seluruh Mahasiswa aktif Teknik Informatika UNSRI angkatan 2021 dan 2022.',
                    'Dapat dilakukan dengan membuka link pendaftaran Daftar sekarang kemudian memilih menu registrasi dan mengisi identitas dan data yang diperlukan pada formulir yang disediakan. Setelah mengisi identitas dan data, dapat melakukan submit untuk mengirim formulir yang telah di isi.',
                    'Boleh, akan tetapi lebih disarankan untuk memilih bidang yang berbeda agar masih ada pilihan opsi kedua jika dibidang pertama tidak memenuhi syarat.',
                    'Kemungkinan besar iya, tapi tidak menutup kemungkinan akan dipindahkan ke posisi lain. Semua tergantung dari hasil dan proses pada saat wawancara dan FGD.',
                    'Tergantung dari kesepakatan dan ketegasan dari kepala dinas dan inti HMIF (akan dimusyawarahkan lagi oleh para BPH).',
                    'Dapat menghubungi contact person dan memberikan nim atau email yang terdaftar serta memberi tahu hal apa yang ingin di ubah karena tidak bisa dilakukan submit ulang.',
                    'Sejauh ini, HMIF masih membuka secara terbuka tanpa batasan kuota.',
                    'Diperbolehkan, kecuali DPM (tidak disarankan).',
                    'Untuk mendaftar HMIF tidak harus memiliki pengalaman berorganisasi, karena semua yang menjadi bagian HMIF akan berproses dan belajar bersama di HMIF.',
                    'Dalam HMIF terdapat 7 dinas yaitu Administrasi, Akademik, Kajian Strategi dan Advokasi, Kewirausahaan, Komunikasi dan Informasi, Pengembangan Minat dan Bakat, dan Pengembangan Sumber Daya Manusia. Untuk informasi selengkapnya mengenai masing-masing dinas dapat dilihat pada akun instagram HMIF @hmif.unsri dan juga pada saat mengikuti sosialisasi HMIF.',
                    'Staff periode kali ini diperbolehkan untuk mengikuti rangkaian open recruitment dari HMIF maupun BEM, nantinya akan diseleksi oleh kedua organisasi dan staff terpilih akan masuk ke salah satu diantara organisasi tersebut.',
                ],
            ],
        ];
        return view('home.index', $data);
    }
}
