<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Peminjaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                    <form method="POST" action="{{ route('peminjaman.update', $peminjaman->id) }}" class="mt-4 space-y-4">
                        @csrf
                        @method('PUT')

                        <div class="space-y-2">
                            <label for="nomor_pinjam" class="block text-sm font-medium text-gray-700">Nomor
                                Peminjaman</label>
                            <input type="text" name="nomor_pinjam" id="nomor_pinjam"
                                value="{{ old('nomor_pinjam', $peminjaman->nomor_pinjam) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 {{ $peminjaman->id ? 'cursor-not-allowed' : '' }}"
                                {{ $peminjaman->id ? 'disabled' : '' }}>
                            @if ($peminjaman->id)
                                <p class="text-xs text-red-500 mt-2">Anda tidak dapat mengubah nomor pinjam yang sudah
                                    ada dalam peminjaman.</p>
                            @endif
                        </div>


                        <div class="space-y-2">
                            <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">Tanggal
                                Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                                value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 {{ $peminjaman->id ? 'cursor-not-allowed' : '' }}"
                                {{ $peminjaman->id ? 'disabled' : '' }}>
                            @if ($peminjaman->id)
                                <p class="text-xs text-red-500 mt-2">Anda tidak dapat mengubah tanggal pinjam yang sudah
                                    ada dalam peminjaman.</p>
                            @endif
                        </div>



                        <div class="space-y-2">
                            <label for="tanggal_kembali" class="block text-sm font-medium text-gray-700">Tanggal
                                Pengembalian</label>
                            <input type="date" name="tanggal_kembali" id="tanggal_kembali"
                                value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>


                        <div class="space-y-2">
                            <label for="judul_buku" class="block text-sm font-medium text-gray-700">Nama Buku</label>
                            <input type="text" name="judul_buku" id="judul_buku"
                                value="{{ old('judul_buku', $peminjaman->buku->judul_buku) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 {{ $peminjaman->id ? 'cursor-not-allowed' : '' }}"
                                {{ $peminjaman->id ? 'disabled' : '' }}>
                            @if ($peminjaman->id)
                                <p class="text-xs text-red-500 mt-2">Anda tidak dapat mengubah buku yang sudah ada dalam
                                    peminjaman.</p>
                            @endif
                        </div>


                        <div class="space-y-2">
                            <label for="nama_anggota" class="block text-sm font-medium text-gray-700">Nama
                                Anggota</label>
                            <input type="text" name="nama_anggota" id="nama_anggota"
                                value="{{ old('nama_anggota', $peminjaman->anggota->nama_anggota) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 {{ $peminjaman->id ? 'cursor-not-allowed' : '' }}"
                                {{ $peminjaman->id ? 'disabled' : '' }}>
                            @if ($peminjaman->id)
                                <p class="text-xs text-red-500 mt-2">Anda tidak dapat mengubah nama anggota yang sudah
                                    ada dalam peminjaman.</p>
                            @endif
                        </div>

                        <div class="space-y-2">
                            <label for="nama_petugas" class="block text-sm font-medium text-gray-700">Nama
                                Petugas</label>
                            <input type="text" name="nama_petugas" id="nama_petugas"
                                value="{{ old('nama_petugas', $peminjaman->petugas->nama_petugas) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 {{ $peminjaman->id ? 'cursor-not-allowed' : '' }}"
                                {{ $peminjaman->id ? 'disabled' : '' }}>
                            @if ($peminjaman->id)
                                <p class="text-xs text-red-500 mt-2">Anda tidak dapat mengubah nama petugas yang sudah
                                    ada dalam peminjaman.</p>
                            @endif
                        </div>


                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
