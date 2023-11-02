<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Buku') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                    <div class="fixed top-0 right-0 mt-4 mr-4 p-4 bg-red-500 text-white rounded shadow-md" id="error-alert" style="display: none;">
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-semibold">Error</span>
                            <button class="text-xl font-semibold" id="close-error-alert">×</button>
                        </div>
                        <ul class="mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    

                    <form method="POST" action="{{ route('buku.update', $buku->id) }}" class="mt-4 space-y-4">
                        @csrf
                        @method('PUT')


                        <div class="space-y-2">
                            <label for="judul_buku" class="block text-sm font-medium text-gray-700">Kode Buku</label>
                            <input type="text" name="kode_buku" id="kode_buku"
                                value="{{ old('judul_buku', $buku->kode_buku) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="judul_buku" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                            <input type="text" name="judul_buku" id="judul_buku"
                                value="{{ old('judul_buku', $buku->judul_buku) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="jenis_buku" class="block text-sm font-medium text-gray-700">Jenis Buku</label>
                            <select name="jenis_buku" id="jenis_buku"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <option value="komedi"
                                    {{ old('jenis_buku', $buku->jenis_buku) === 'komedi' ? 'selected' : '' }}>Komedi
                                </option>
                                <option value="horror"
                                    {{ old('jenis_buku', $buku->jenis_buku) === 'horror' ? 'selected' : '' }}>Horror
                                </option>
                                <option value="romantis"
                                    {{ old('jenis_buku', $buku->jenis_buku) === 'romantis' ? 'selected' : '' }}>Romantis
                                </option>
                                <option value="petualangan"
                                    {{ old('jenis_buku', $buku->jenis_buku) === 'petualangan' ? 'selected' : '' }}>
                                    Petualangan</option>
                                <option value="pertarungan"
                                    {{ old('jenis_buku', $buku->jenis_buku) === 'pertarungan' ? 'selected' : '' }}>
                                    Pertarungan</option>

                            </select>
                        </div>

                        <div class="space-y-2">
                            <label for="pengarang" class="block text-sm font-medium text-gray-700">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang"
                                value="{{ old('pengarang', $buku->pengarang) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div class="space-y-2">
                            <label for="tahun_penerbit" class="block text-sm font-medium text-gray-700">Tahun
                                Penerbit</label>
                            <input type="date" name="tahun_penerbit" id="tahun_penerbit"
                                value="{{ old('tahun_penerbit', $buku->tahun_penerbit) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit"
                                value="{{ old('penerbit', $buku->penerbit) }}"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 shadow-md rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Simpan</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
