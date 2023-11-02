<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-white flex justify-center text-2xl">
                <p class="mr-2">{{ __("Selamat Datang ") }}</p>
                <p class="font-bold">{{ Auth::user()->name }}</p>
            </div>
            <div id="lottie-container" class="flex justify-center"></div>
        </div>
    </div>
    <div class="container mx-auto mt-5">
        <div class="flex justify-between space-x-4">
            <div class="bg-blue-500 text-white shadow-md rounded p-5 flex-1 w-1/3 mx-4">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Buku</h3>
                    <p class="text-md">Total Buku: {{ $totalBuku }}</p>
                </div>
            </div>

            <div class="bg-green-500 text-white shadow-md rounded p-5 flex-1 w-1/3 mx-4">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Anggota</h3>
                    <p class="text-md">Total Anggota: {{ $totalAnggota }}</p>
                </div>
            </div>

            <div class="bg-yellow-500 text-white shadow-md rounded p-5 flex-1 w-1/3 mx-4">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Petugas</h3>
                    <p class="text-md">Total Petugas: {{ $totalPetugas }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <script src="{{ asset('lottie/readingbook.json') }}"></script>
    <script>
        var animationPath = "{{ asset('lottie/readingbook.json') }}";
        
        var container = document.getElementById('lottie-container');
      
        lottie.loadAnimation({
          container: container,
          renderer: 'svg', 
          loop: true, 
          autoplay: true,
          path: animationPath, 
        });
      </script>
</x-app-layout>
