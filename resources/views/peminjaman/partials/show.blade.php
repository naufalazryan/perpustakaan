<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Detail Peminjaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-md p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Pinjam:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->nomor_pinjam }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Tanggal Pinjam:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->tanggal_pinjam }}</p>
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Tanggal Kembali:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->tanggal_kembali }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Peminjam:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->anggota->nomor_anggota }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nama Peminjam:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->anggota->nama_anggota }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Kode Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->buku->kode_buku }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nama Buku:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->buku->judul_buku }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nomor Petugas:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->petugas->nomor_petugas }}</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-400">Nama Petugas:</p>
                        <p class="text-lg text-gray-900 dark:text-white">{{ $peminjaman->petugas->nama_petugas }}</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="text-blue-500 hover:underline mr-4">Pengembalian</a>
                    <a href="{{ route('peminjaman.index') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
