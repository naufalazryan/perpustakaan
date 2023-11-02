<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-md p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Cover Buku:</p>
                        <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Buku" class="mt-2 max-w-full">
                    </div>
                    
                    <x-details :label="'Kode Buku'" :value="$buku->kode_buku" />
                    <x-details :label="'Judul Buku'" :value="$buku->judul_buku" />
                    <x-details :label="'Jenis Buku'" :value="$buku->jenis_buku" />
                    <x-details :label="'Pengarang'" :value="$buku->pengarang" />
                    <x-details :label="'Tahun Penerbit'" :value="date('d F Y', strtotime($buku->tahun_penerbit))" />
                    <x-details :label="'Penerbit'" :value="$buku->penerbit" />
                    <x-details :label="'Status Buku'" :value="$buku->status == 0 ? 'Tersedia' : 'Dipinjam'" />
                </div>
                <div class="mt-6">
                    <button id="printButton" class="text-blue-500 hover:underline mr-2">Print</button>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                    <a href="{{ route('buku.index') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>
                <script>
                    document.getElementById('printButton').addEventListener('click', function() {
                        window.print();
                    });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
