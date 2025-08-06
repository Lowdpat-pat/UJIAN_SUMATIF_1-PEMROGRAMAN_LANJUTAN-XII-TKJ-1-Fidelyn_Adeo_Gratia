@extends('layouts.app')

@section('title', 'Daftar Pengguna')
@section('content')
<body style="background-image:url('https://i.pinimg.com/736x/3c/f0/ea/3cf0ea2ad51c519c9277a5ebfccdfd67.jpg');"> 
    <div class="mx-auto my-10 w-300 rounded-2xl border border-gray-300 bg-white p-6">
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ($students as $student)
                <a href="/students/{{ $student['id'] }}">
                    <x-card :students="$student" />
                </a>
            @endforeach
        </div>
    </div>
</body>
@endsection
