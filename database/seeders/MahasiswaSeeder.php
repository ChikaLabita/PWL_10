<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nim'=> '1941720064',
            'nama'=> 'ABDULLOH AQIL',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085608014111'
        ],
        [
            'nim'=> '1841720219',
            'nama'=> 'ALIF TEGOR SURYA FARIDZKI',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085104126953'
        ],
        [
            'nim'=> '1941720065',
            'nama'=> 'AWANG SYUKRIANSAH DIRGANTORO',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '08819324383'
        ],
        [
            'nim'=> '1941720018',
            'nama'=> 'CHIKA LABITA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085230956459'
        ],
        [
            'nim'=> '1941720206',
            'nama'=> 'DIMAS ILHAM RIVALDY',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081336464639'
        ],
        [
            'nim'=> '1941720184',
            'nama'=> 'DIVA ARDHIA RAHMANIA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081234614951'
        ],
        [
            'nim'=> '2041723016',
            'nama'=> 'FAREL PUTRA HIDAYAT',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081359375022'
        ],
        [
            'nim'=> '1941720199',
            'nama'=> 'HENDRI DAFFA ATHAYA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '082334951014'
        ],
        [
            'nim'=> '1941720180',
            'nama'=> 'ILHAM IBRAHIM',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '089676301281'
        ],
        [
            'nim'=> '1941720052',
            'nama'=> 'LULUK MUFIDA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085735523825'
        ],
        [
            'nim'=> '1941720204',
            'nama'=> 'MOCH FARCHAN AGIL',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081252137093'
        ],
        [
            'nim'=> '1941720013',
            'nama'=> 'MOCHAMMAD SYAIFUDDIN ZUHRI',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085648989767'
        ],
        [
            'nim'=> '1941720031',
            'nama'=> 'MUHAMMAD AUFUL KIROM',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '0822169117228'
        ],
        [
            'nim'=> '1941720103',
            'nama'=> 'MUHAMMAD RIEFKI ARIYANTO',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '0895398119225'
        ],
        [
            'nim'=> '1941720061',
            'nama'=> 'NADIA LAYRA AZIZA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081259347608'
        ],
        [
            'nim'=> '1941720044',
            'nama'=> 'NAILY IKMALUL INSIYAH',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081234967754'
        ],
        [
            'nim'=> '1941720150',
            'nama'=> 'OCTAVIA ALYA NABILLA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '082231385610'
        ],
        [
            'nim'=> '1941720108',
            'nama'=> 'PUTRI ALIVIA NUR KUSUMAWATI',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085749160443'
        ],
        [
            'nim'=> '1941720219',
            'nama'=> 'RIFKIE NURDIAN ADINUGROHO',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081332608579'
        ],
        [
            'nim'=> '1941720234',
            'nama'=> 'RISKY DWI RAMADHAN',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085731386071'
        ],
        [
            'nim'=> '1941720196',
            'nama'=> 'SELA AULIA SISWANTO',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '082244220960'
        ],
        [
            'nim'=> '1941720021',
            'nama'=> 'SHELYCA SURRAYENSIH',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '082142299447'
        ],
        [
            'nim'=> '1941720053',
            'nama'=> 'TITA WIJAYANTI',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081217743470'
        ],
        [
            'nim'=> '2041723013',
            'nama'=> 'VEGA ANGGARESTA',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '085236676633'
        ],
        [
            'nim'=> '1941720229',
            'nama'=> 'YUSYAC MIFTAHUL HUDA FI ALI',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '082334320334'
        ],
        [
            'nim'=> '1941720192',
            'nama'=> 'ZULFIKAR RAHMAN',
            'kelas'=> 'TI-2C',
            'jurusan'=> 'Teknik Informatika',
            'no_handphone'=> '081914741389'
        ]
    ];
    DB::table('mahasiswas')->insert($data);
    }
}
