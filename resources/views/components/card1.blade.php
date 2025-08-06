@props(['student'])

{{-- This component displays a student's profile card with their photo, name, class, and description. --}}
{{-- The component is styled with Tailwind CSS classes for layout and design. --}}
<div
    class="item-center mx-auto mt-10 flex flex-col justify-center rounded-lg border border-gray-300 bg-red-50 p-8 shadow-lg">
    <div class="mb-4 flex flex-col items-center space-x-4">
        <div class="h-50 w-50 rounded-full bg-gray-100"><img class="rounded-full"src={{ $student['foto'] }}></div>
        <h2 class="decoration-gray-400"><b>{{ $student['nama'] }}</b></h2>
        <p style="color: rgb(109, 91, 91)">{{ $student['studentname'] }}</p>
        <p>{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <p>{{ $student['deskripsi'] }}</p>
        <div class="flex flex-row mt-5">
        <x-button type="submit" color="gray">Edit Profile</x-button>
        <x-button type="submit" color="red">Delete Account</x-button>
        </div>
    </div>
</div>
