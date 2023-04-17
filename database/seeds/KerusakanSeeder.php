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
                'deskripsi' => 'Lakukan pengecekan pada bagian pembuangan sisa pembakaran pada Engine, kemudian periksa ring yang terdapat pada piston motor, apabila terdapat retakan, baret atau pecah maka sangat dianjurkan untuk segera mengganti ring piston atau pun piston dengan dengan yang baru.',
            ],
            [
                'kode'  => 'K002',
                'img'   => 'img-kerusakan/k002.jpg',
                'text'  => 'Kerusakan Pada Valve (Katup)',
                'deskripsi' => 'Lakukan pemeriksaan pada busi sepeda motor terlebih dahulu, kemudian perhatikan oli mesin, jika oli mesin sudah lama tidak diganti maka penyebabnya bisa berasal dari oli mesin karena mesin tidak bekerja dengan sempurna akibat pelumas yang jarang diganti, maka ganti oli mesin apabila dirasa valve atau katup masih dapat digunakan, namun apabila valve atau katup sudah dalam keadaan rusak parah maka lakukan penggantian part.',
            ],
            [
                'kode'  => 'K003',
                'img'   => 'img-kerusakan/k003.jpg',
                'text'  => 'Kerusakan Pada Speedometer Digital',
                'deskripsi' => 'Jika speedometer tidak berfungsi sama sekali maka periksa kabel yang terhubung dengan speedometer, jika terdapat kabel korslet atau kabel terputus maka ganti dengan kabel yang baru, cek juga sikring kelistrikan.  Lalu jika odometer atau indikator kecepatan tidak berfungsi alias hanya berada diangka nol ketika sepeda motor dijalankan makan periksa kabel speedsensor dan bersihkan jika dirasa kotor bagian piringan cakramnya jika masih tetap tidak befungsi makan solusinya ganti dengan part baru. Jika terdapat lampu indikator menyala seperti ABS atau engine check dan terdapat kode 42 maka dapat dipastikan terdapat kerusakan pada bagian speed sensor ataupun sistem ABS sepeda motor.',
            ],
            [
                'kode'  => 'K004',
                'img'   => 'img-kerusakan/k004.jpg',
                'text'  => 'Kerusakan Sistem ABS',
                'deskripsi' => 'Kerusakan pada ABS biasanya ditandai dengan lampu indikator ABS yang menyala walaupun motor sudah berjalan lebih dari 2 km, lakukan pemeriksaan pada saluran masuk daya dan massa pada ABS yang terdapat dibagian depan belakang headlamp. Lalu periksa juga lampu indikator ABS pada speedometer, apabila setelah motor berjalan lampu indikator mati dan tidak terdapat kode masalah pada speedometer lakukan pemeriksaan pada saluran sinyal lampu dari ECM ABS menuju panel indikator, jika terdapat kerusakan maka sebaiknya bawa ke bengkel terdekat untuk dilakukan pemeriksaan menggunakan alat.',
            ],
            [
                'kode'  => 'K005',
                'img'   => 'img-kerusakan/k005.jpg',
                'text'  => 'Kerusakan Pada Elektrik Starter',
                'deskripsi' => 'Langkah awal periksa saklar starter bongkar jika diperlukan untuk memastikan elektrik stater bebas dari debu atau lainnya, kemudian periksa juga sekring yang terhubung dengan aki motor apakah sekring dalam kondisi baik atau sudah putus, apabila terputus maka segera ganti dengan yang baru. Jika masalah belum selesai lakukan pemeriksaan dynamo starter, jika setelah diperiksa dinamo starter hangus maka ganti dengan yang baru dinamo starter yang baru.',
            ],
            [
                'kode'  => 'K006',
                'img'   => 'img-kerusakan/k006.jpg',
                'text'  => 'Kerusakan Pada CVT',
                'deskripsi' => 'Langkah awal periksa bagian CVT secara mendetail, seperti memeriksa V-belt, mangkok CVT dan roller. Pada V-belt lakukan pemeriksaan secara detail pastikan pada V-belt tidak terdapat retakan, air maupun debu yang menumpuk, jika terdapat retakan maka segera ganti V-belt. Lalu periksa roller jika terdapat roller yang sudah bengkok atau peyang maka ganti dengan part baru. Lalu pastikan tidak terdapat baret pada mangkok CVT dan jika suara cvt kasar maka lakukan pemeriksaan apakah spons penyaring debu pada cvt masih layak digunakan atau tidak dan jika filter CVT sudah tidak layak digunakan seperti terkena oli atau sudah banyak sobekan maka ganti dengan yang baru.',
            ],
            [
                'kode'  => 'K007',
                'img'   => 'img-kerusakan/k007.jpg',
                'text'  => 'Kerusakan Pada Injeksi',
                'deskripsi' => '',
            ],
        ];

        Kerusakan::insert($data);
    }
}
