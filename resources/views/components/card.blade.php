    @props(['students'])
    <div
        style="border: 1px solid grey; padding: 10px; margin: 40px; background-color: rgb(255, 236, 242); border-radius: 20px; width: 450px; height:200px;"
        class="shadow-lg">
        <div class="px-md-5 m-4 flex flex-row items-center space-x-4">
            <div class="h-10 w-10 rounded-full bg-gray-100"><img class="rounded-full"src="{{ $students['foto'] }}""></div>
            <div class="flex flex-col">
                <h2><b>{{ $students['nama'] }}</b></h2>
                <h2 style="color: rgb(81, 67, 67)">{{ $students['studentname'] }}</h2>
            </div>
        </div>

        <p>{{ $students['deskripsi'] }}</p>
    </div>
