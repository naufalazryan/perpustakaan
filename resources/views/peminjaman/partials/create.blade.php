<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Tambah Peminjaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                    <form method="POST" action="{{ route('peminjaman.store') }}" class="mt-4 space-y-4">
                        @csrf
                        <div class="space-y-2">
                            <label for="nomor_pinjam" class="block text-sm font-medium text-gray-700">Nomor Pinjam</label>
                            <input type="text" name="nomor_pinjam" id="nomor_pinjam"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                    
                        <div class="space-y-2">
                            <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                                class="block w-full px-4 py-2 rounded-md mt-3 border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                    
                        <div class="space-y-2">
                            <label for="id_buku" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                            <select class="w-full px-4 py-2 mt-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" name="id_buku" id="id_buku">
                                <option value="" disabled selected>Pilih Buku</option>
                                @foreach ($buku as $item)
                                    <option value="{{ $item->id }}">{{ $item->judul_buku }}</option>
                                @endforeach
                            </select>
                        </div>                        
                    
                        <div class="space-y-2">
                            <label for="id_anggota" class="block text-sm font-medium text-gray-700">Nama Anggota</label>
                            <select class="w-full px-4 py-2 mt-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" name="id_anggota" id="id_anggota">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($anggota as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_anggota }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="space-y-2">
                            <label for="id_petugas" class="block text-sm font-medium text-gray-700">Nomor Petugas</label>
                            <select class="w-full px-4 py-2 mt-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" name="id_petugas" id="id_petugas">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($petugas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_petugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <button type="submit" class="px-4 py-2 mt-5 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
