@extends('layouts.app')

@section('title', 'Daftar Pengguna')
@section('content')
<body style="background-image:url('https://i.pinimg.com/736x/3c/f0/ea/3cf0ea2ad51c519c9277a5ebfccdfd67.jpg');"> 
    <div class="container mx-auto flex flex-wrap p-4">
        <x-card1 :student="$student" />
    </div>
</body>
@endsection
