<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use App\Models\Iuran;
use App\Models\Komponen;
use App\Models\Penduduk;
use App\Models\Staff;
use \App\Models\Post;
use App\Models\Type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'penduduk_id' => 1,
            'name' => 'Fahmi',
            // 'username' => 'Fahmi',
            'password' => bcrypt('fahmi'),
            'email' => 'fahmi@gmail.com',
            // 'telp' => null,
            'is_admin' => '1'
        ]);

        User::create([
            'penduduk_id' => 2,
            'name' => 'Aisyah',
            // 'username' => 'Aisyah',
            'password' => bcrypt('aisyah'),
            'email' => 'aisyah@gmail.com',
            // 'telp' => null,
            'is_admin' => '0'
        ]);

        Type::create([
            'name' => 'Undangan',
        ]);
        Type::create([
            'name' => 'Program Rutin',
        ]);



        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Networking',
        //     'slug' => 'Networking'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);



        // Post::factory(20)->create();
        // Agenda::factory(20)->create();


        // Agenda::create([
        //     'user_id' => 1,
        //     'staff_id' => 1,
        //     'type_id' => 1,
        //     'komponen_id' => 3,
        //     'date' => '2022-09-01',
        //     'time' => '12:12',
        //     'title' => 'Rapat percepatan penurunan stunting',
        //     'slug' => 'Rapat-percepatan-penurunan-stunting',
        //     'location' => 'hotel aston jakarta',
        //     'description' => 'Rapat penurunan stunting tahun 2022',
        // ]);

        // Agenda::create([
        //     'user_id' => 2,
        //     'staff_id' => 2,
        //     'type_id' => 2,
        //     'komponen_id' => 2,
        //     'date' => '2022-09-01',
        //     'time' => '12:12',
        //     'title' => 'Rapat Dashboard PK',
        //     'slug' => 'Rapat-Dashboard-PK',
        //     'location' => 'hotel fave jakarta',
        //     'description' => 'Rapat penting',
        // ]);

        // Agenda::create([
        //     'user_id' => 1,
        //     'staff_id' => 3,
        //     'type_id' => 1,
        //     'komponen_id' => 1,
        //     'date' => '2022-09-01',
        //     'time' => '12:12',
        //     'title' => 'Rapat TMP2K Kominfo',
        //     'slug' => 'Rapat-TMP2K-Kominfo',
        //     'location' => 'hotel bali jakarta',
        //     'description' => 'rapat tetap',
        // ]);


        Komponen::create([
            'name' => 'BIHUKOR',
        ]);
        Komponen::create([
            'name' => 'BIKUB',
        ]);
        Komponen::create([
            'name' => 'BIREN',
        ]);
        Komponen::create([
            'name' => 'BIRUMAS',
        ]);
        Komponen::create([
            'name' => 'BSDM',
        ]);
        Komponen::create([
            'name' => 'DITBALNAK',
        ]);
        Komponen::create([
            'name' => 'DITDAMDUK',
        ]);
        Komponen::create([
            'name' => 'DITHANLAN',
        ]);
        Komponen::create([
            'name' => 'DITHANREM',
        ]);
        Komponen::create([
            'name' => 'DITJAKDUK',
        ]);
        Komponen::create([
            'name' => 'DITKESPRO',
        ]);
        Komponen::create([
            'name' => 'DITKIE',
        ]);
        Komponen::create([
            'name' => 'DITLAPTIK',
        ]);
        Komponen::create([
            'name' => 'DITLINLAP',
        ]);
        Komponen::create([
            'name' => 'DITPEMKON',
        ]);
        Komponen::create([
            'name' => 'DITPENDUK',
        ]);
        Komponen::create([
            'name' => 'DITRENDUK',
        ]);
        Komponen::create([
            'name' => 'DITSESYAN',
        ]);
        Komponen::create([
            'name' => 'DITAS',
        ]);
        Komponen::create([
            'name' => 'DITTEKDA',
        ]);
        Komponen::create([
            'name' => 'DITVOGA',
        ]);
        Komponen::create([
            'name' => 'DITYANSUS',
        ]);
        Komponen::create([
            'name' => 'ITWIL I',
        ]);
        Komponen::create([
            'name' => 'ITWIL II',
        ]);
        Komponen::create([
            'name' => 'ITWIL III',
        ]);
        Komponen::create([
            'name' => 'PULIN',
        ]);
        Komponen::create([
            'name' => 'PUSDIKLAT',
        ]);
        Komponen::create([
            'name' => 'PUSNA',
        ]);
        Komponen::create([
            'name' => 'PUSDU',
        ]);
        Komponen::create([
            'name' => 'TUWAS',
        ]);



        Penduduk::create([
            'nik' => '1234567890123456789',
            'nama' => 'Budi',
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '1981-01-01',
            'jk' => 'Laki-laki',
            'alamat' => 'Pancawarga',
            'RW' => '01',
            'RT' => '02',
            'agama' => 'islam',
            'telp' => '085532345323'
        ]);

        Penduduk::create([
            'nik' => '1234567890123456780',
            'nama' => 'Dian',
            'tmpt_lahir' => 'Bandung',
            'tgl_lahir' => '1982-02-02',
            'jk' => 'Perempuan',
            'alamat' => 'Durian',
            'RW' => '03',
            'RT' => '04',
            'agama' => 'islam',
            'telp' => '081245243625'
        ]);
            

        Iuran::create([
            'penduduk_id' => '1',
            'bayar_tahun' => '2024',
            'bayar_bulan' => '01',
            'nominal' => '30000',
            'bukti_bayar' => '',
            'tgl_bayar' => null,
            'keterangan' => '',
            'status' => '0'
        ]);

        Iuran::create([
            'penduduk_id' => '1',
            'bayar_tahun' => '2024',
            'bayar_bulan' => '02',
            'nominal' => '30000',
            'bukti_bayar' => '',
            'tgl_bayar' => null,
            'keterangan' => '',
            'status' => '0'
        ]);

        Iuran::create([
            'penduduk_id' => '2',
            'bayar_tahun' => '2024',
            'bayar_bulan' => '01',
            'nominal' => '30000',
            'bukti_bayar' => '12312321',
            'tgl_bayar' => '2023-01-01',
            'keterangan' => 'lunas',
            'status' => '1'
        ]);

        Iuran::create([
            'penduduk_id' => '2',
            'bayar_tahun' => '2024',
            'bayar_bulan' => '02',
            'nominal' => '30000',
            'bukti_bayar' => '',
            'tgl_bayar' => null ,
            'keterangan' => '',
            'status' => '0'
        ]);

        Staff::create([
            'komponen_id' => 20,
            'name' => 'Dr. MAHYUZAR, M.Si.',
            'position' => 'DIREKTUR',
            'level' => null,
            'email' => 'mahyuzar@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'REZKY MURWANTO S.Kom., M.PH',
            'position' => 'PRANATA KOMPUTER AHLI MADYA',
            'level' => null,
            'email' => 'rezky_m@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'BAIHAQI NUR, S.IP., M.Si.',
            'position' => 'PRANATA KOMPUTER AHLI MADYA',
            'level' => null,
            'email' => 'baihaqi.nur@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'RENI AZHAR, S.KM.',
            'position' => 'PUSTAKAWAN AHLI MUDA',
            'level' => null,
            'email' => 'r.azhar@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'RULIWATI DJAMALUDDIN, SE., M.Si.',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'ruliwati.dj@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'IIS SUPRIYANTI, S.Kom',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'iis_supriyanti@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'KHARISMA FITRIA PUSPA, ST',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'kharisma_fp@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'MEDY KURNIAWAN, S.Kom., M.Kom',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'medy.kurniawan@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'FAJAR SIDDIQ, S.Kom.',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'fajar.siddiq@bkkbn.go.id',
            'telp' => null
        ]);
        Staff::create([
            'komponen_id' => 20,
            'name' => 'PEMBANGUNAN GULTOM, S.Kom.',
            'position' => 'PRANATA KOMPUTER AHLI MUDA',
            'level' => null,
            'email' => 'pembangunan@bkkbn.go.id',
            'telp' => null
        ]);
    }
}
