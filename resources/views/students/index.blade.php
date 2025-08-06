@extends('layouts.app')

@section('title', 'Daftar Pengguna')
@section('content')

<div style="border: 1px solid grey; padding: 10px; margin: 40px; background-color: white; border-radius: 20px;">
<div class="flex flex-wrap container mx-auto p-4">
    @foreach($students as $user)
        <a href="/students/{{$user['id']}}"><x-card nama="{{$user['nama']}}" studentname="{{$user['studentname']}}" deskripsi="{{$user['deskripsi']}}"/></a>
    @endforeach

</div>
</div>
@endsection