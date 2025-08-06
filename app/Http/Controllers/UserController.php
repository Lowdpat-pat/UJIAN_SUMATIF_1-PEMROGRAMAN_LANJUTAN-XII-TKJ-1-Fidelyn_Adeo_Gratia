<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $students = [
            [
                'id' => 1,
                'studentname' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.pinimg.com/736x/72/02/1a/72021a40a1b12523b3b058a4981b8551.jpg',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'studentname' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.pinimg.com/736x/18/bc/65/18bc654b483c0adfc047ec60d62ecf5f.jpg',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'studentname' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.pinimg.com/736x/71/9e/b7/719eb7fa7b601decc347720b5d2d22c9.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'studentname' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.pinimg.com/736x/57/54/4d/57544deb488eacf16346247de261d0c9.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
    ];
        public function index()
    {
     $students = [
            [
                'id' => 1,
                'studentname' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.pinimg.com/736x/72/02/1a/72021a40a1b12523b3b058a4981b8551.jpg',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'studentname' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.pinimg.com/736x/18/bc/65/18bc654b483c0adfc047ec60d62ecf5f.jpg',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'studentname' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.pinimg.com/736x/71/9e/b7/719eb7fa7b601decc347720b5d2d22c9.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'studentname' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.pinimg.com/736x/57/54/4d/57544deb488eacf16346247de261d0c9.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
    ];
        return view('students.index', [
            'students' => $this->students
        ]);
        
    }

        public function show($id)
    {
        $students = [
            [
                'id' => 1,
                'studentname' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.pinimg.com/736x/72/02/1a/72021a40a1b12523b3b058a4981b8551.jpg',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'studentname' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.pinimg.com/736x/18/bc/65/18bc654b483c0adfc047ec60d62ecf5f.jpg',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'studentname' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.pinimg.com/736x/71/9e/b7/719eb7fa7b601decc347720b5d2d22c9.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'studentname' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.pinimg.com/736x/57/54/4d/57544deb488eacf16346247de261d0c9.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
    ];

        // $student = collect($students)->where('id', $id)->first();

        // return view('students.show', [
        //     'student' => $student
        // ]);

        return view('students.show', [  
            'student' => $this->students[$id-1],
        ]);

    }
}
