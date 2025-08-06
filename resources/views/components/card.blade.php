<div
    style="border: 1px solid grey; padding: 10px; margin: 40px; background-color: white; border-radius: 20px; width: 450px; height:200px;">
    <div class="px-md-5 mb-4 flex flex-row items-center space-x-4">
        <div class="h-10 w-10 rounded-full bg-gray-100"><img class="rounded-full"src={{ $foto }}></div>
        <div class="flex flex-col">
            <h2><b>{{ $nama }}</b></h2>
            <h2 class="decoration-gray-400">{{ $studentname }}</h2>
        </div>
    </div>

    <p>{{ $deskripsi }}</p>
</div>
