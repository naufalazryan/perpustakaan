<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Detail Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-md p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Anggota:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $anggota->nomor_anggota }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nama Anggota:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $anggota->nama_anggota }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Alamat Anggota:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $anggota->alamat_anggota }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Jenis Kelamin:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $anggota->jenis_kelamin }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Telepon:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $anggota->nomor_telepon }}</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="text-blue-500 hover:underline mr-4">Edit</a>
                    <a href="{{ route('anggota.index') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
