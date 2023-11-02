<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Petugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                    <form method="POST" action="{{ route('petugas.update', $petugas->id) }}" class="mt-4 space-y-4">
                        @csrf
                    
                        @method('PUT')
                        <div class="space-y-2">
                            <label for="nomor_petugas" class="block text-sm font-medium text-gray-700">Nomor
                                Petugas</label>
                            <input type="text" name="nomor_petugas" id="nomor_petugas" value="{{ old('nomor_petugas', $petugas->nomor_petugas)}}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="nama_petugas" class="block text-sm font-medium text-gray-700">Nama
                                Petugas</label>
                            <input type="text" name="nama_petugas" id="nama_petugas" value="{{ old('nama_petugas', $petugas->nama_petugas)}}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="alamat_petugas" class="block text-sm font-medium text-gray-700">Alamat Petugas</label>
                            <textarea name="alamat_petugas" id="alamat_petugas" dir="ltr" class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('alamat_petugas', $petugas->alamat_petugas) }}</textarea>
                        </div>
                        
                        

                        <div class="space-y-2">
                            <label for="nomor_telepon" class="block text-sm font-medium text-gray-700">Nomor
                                Telepon</label>
                            <input type="number" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon', $petugas->nomor_telepon)}}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
