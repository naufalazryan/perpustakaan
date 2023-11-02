<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Detail Petugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-md p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Petugas:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $petugas->nomor_petugas }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nama Petugas:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $petugas->nama_petugas }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Alamat Petugas:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $petugas->alamat_petugas }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Telepon:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $petugas->nomor_telepon }}</p>
                    </div>
                   
                    <!-- Tambahkan detail buku lainnya di sini -->
                </div>
                <div class="mt-6">
                    <a href="{{ route('petugas.edit', $petugas->id) }}" class="text-blue-500 hover:underline mr-4">Edit</a>
                    <a href="{{ route('petugas.index') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
