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
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'studentname' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'studentname' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'studentname' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
    ];
        public function index()
    {
        // return "Ini adalah halaman daftar pengguna.";
        // $name = "fidel";
        // $address = "123";
        // return view('users.index', compact('name','address'));
    
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
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'studentname' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'studentname' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://placehold.co/400/png',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'studentname' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://placehold.co/400/png',
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
