@props(['student'])

{{-- This component displays a student's profile card with their photo, name, class, and description. --}}
{{-- The component is styled with Tailwind CSS classes for layout and design. --}}
<div
    class="item-center mx-auto mt-10 flex flex-col justify-center rounded-lg border border-gray-300 bg-white p-8 shadow-lg">
    <div class="mb-4 flex flex-col items-center space-x-4">
        <div class="h-10 w-10 rounded-full bg-gray-100"><img src={{ $student['foto'] }}></div>
        <h2 class="decoration-gray-400"><b>{{ $student['nama'] }}</b></h2>
        <p>{{ $student['studentname'] }}</p>
        <p>{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <p>{{ $student['deskripsi'] }}</p>
    </div>
</div>
