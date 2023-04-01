<?php

use App\Models\Kerusakan;
use Illuminate\Database\Seeder;

class KerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode'  => 'K001',
                'img'   => 'img-kerusakan/k001.jpg',
                'text'  => 'Kerusakan Pada Piston',
                'deskripsi' => 'Komponen yang satu ini terletak di dalam tabung mesin pembakaran. Perannya juga sangat krusial. Piston motor yang sudah rusak akan membuat kendaraan roda dua tersebut tak bisa dinyalakan dan bisa mogok sewaktu-waktu.
                Piston motor yang rusak akan berdampak pada kinerja motor itu sendiri. Pengendara mungkin bisa merasakan adanya perbedaan performa pada motornya jika komponen yang satu ini bermasalah.',
            ],
            [
                'kode'  => 'K002',
                'img'   => 'img-kerusakan/k002.jpg',
                'text'  => 'Kerusakan Pada Valve (Katup)',
                'deskripsi' => 'Untuk tugas dari Valve (Katup) itu sendiri sangatlah berat dan sangat vital, karena bila ada suatu kebocoran atau gangguan sedikit saja maka pada Valve (Katup) tersebut akan dapat mengakibatkan tenaga mesin pun menjadi menurun atau dalam istilahnya performa mesin menjadi ngedrop. ',
            ],
            [
                'kode'  => 'K003',
                'img'   => 'img-kerusakan/k003.jpg',
                'text'  => 'Kerusakan Pada Speedometer Digital',
                'deskripsi' => 'Pada speedometer tipe analog, masalah ini umumnya bisa diatasi dengan cara ganti kabel speedometer atau gigi nanas di pelek.
                Sedangkan untuk tipe digital, proses pembacaan speedometer dan odometer bekerja secara elektronik sehingga solusinya pun berbeda.
                Jika pilihannya perbaikan kabel, maka bengkel akan membuat rangkaian kabel tambahan agar lebih panjang.
Selain pembacaan dapat berfungsi kembali, hal tersebut bertujuan agar jarak main kabel lebih bebas sehingga lebih aman.',
            ],
            [
                'kode'  => 'K004',
                'img'   => 'img-kerusakan/k004.jpg',
                'text'  => 'Kerusakan Sistem ABS',
                'deskripsi' => 'Bagi pengguna motor dengan rem berteknologi ABS (Anti-lock Braking System), ada beberapa cara simpel untuk mengenali sistem pengereman itu jika terjadi masalah.
                Ini berguna untuk mencegah terjadinya kejadian yang tidak diinginkan untuk kalian yang mengandalkan fungsi ABS di motor.
                Apalagi, peran sistem pengereman dalam kendaraan menjadi kunci untuk mendapatkan keselamatan.',
            ],
            [
                'kode'  => 'K005',
                'img'   => 'img-kerusakan/k005.jpg',
                'text'  => 'Kerusakan Pada Elektrik Starter',
                'deskripsi' => 'Menghidupkan mesin sepeda motor dengan elektrik starter memang mudah. Namun bagaimana bila perangkat ini tiba-tiba tidak berfungsi?

                Bagi pengguna motor ber-cc kecil bisa jadi tidak masalah karena masih ada sistem engkol untuk menghidupkan mesin. Namun ini akan menjadi masalah bagi pengguna motor sport atau moge.
                
                Ada empat komponen yang menjadi penyebab elektrik starter tidak berfungsi. Utama adalah aki, kemudian rangkaian starter (tombol starter dan kabel-kabel), bendik, dan dinamo.',
            ],
            [
                'kode'  => 'K006',
                'img'   => 'img-kerusakan/k006.jpg',
                'text'  => 'Kerusakan Pada CVT',
                'deskripsi' => 'Komponen tersebut memiliki fungsi meneruskan putaran yang dihasilkan oleh mesin motor pada bagian roda ban sehingga motor dapat berjalan dan digunakan berkendara. Melihat fungsinya tersebut, jelas komponen ini memegang peran vital dalam operasional sebuah kendaraan.',
            ],
            [
                'kode'  => 'K007',
                'img'   => 'img-kerusakan/k007.jpg',
                'text'  => 'Kerusakan Pada Injeksi',
                'deskripsi' => 'Masalah ini biasanya akan muncul dengan kode sensor lampu tertentu. Istilahnya adalah Malfunction Indicator Light (MIL) yang berkedip. Jadi, jika lampu sensor ini berkedip jangan justru dimatikan, tetapi mulailah dengan mencari sumber permasalahannya.                ',
            ],
        ];

        Kerusakan::insert($data);
    }
}
