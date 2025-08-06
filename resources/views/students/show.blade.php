@extends('layouts.app')

@section('title', 'Daftar Pengguna')
@section('content')

    <div class="container mx-auto flex flex-wrap p-4">
        <x-card1 :student="$student" />
    </div>
@endsection
