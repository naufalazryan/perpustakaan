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
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Kode Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->kode_buku }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Judul Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->judul_buku }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Jenis Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->jenis_buku }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Pengarang:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->pengarang }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Tahun Penerbit:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->tahun_penerbit }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Penerbit:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $buku->penerbit }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Status Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">
                            @if ($buku->status == 0)
                                Tersedia
                            @elseif ($buku->status == 1)
                                Dipinjam
                            @endif
                        </p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('buku.edit', $buku->id) }}" class="text-blue-500 hover:underline mr-4">Edit</a>
                    <a href="{{ route('buku.index') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
