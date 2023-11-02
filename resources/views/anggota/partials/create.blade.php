<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Tambah Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                    <form method="POST" action="{{ route('anggota.store') }}" class="mt-4 space-y-4">
                        @csrf
                      

                        <div class="space-y-2">
                            <label for="nomor_anggota" class="block text-sm font-medium text-gray-700">Nomor
                                Anggota</label>
                            <input type="text" name="nomor_anggota" id="nomor_anggota"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="nama_anggota" class="block text-sm font-medium text-gray-700">Nama
                                Anggota</label>
                            <input type="text" name="nama_anggota" id="nama_anggota"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <label for="alamat_anggota" class="block text-sm font-medium text-gray-700">Alamat Anggota</label>
                            <textarea name="alamat_anggota" id="alamat_anggota" dir="ltr" class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                        </div>
                        

                        <div class="space-y-2">
                            <label for="nomor_telepon" class="block text-sm font-medium text-gray-700">Nomor
                                Telepon</label>
                            <input type="number" name="nomor_telepon" id="nomor_telepon"
                                class="block w-full px-4 py-2 rounded-md border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>

                        <div class="space-y-2">
                            <div class="main flex border rounded-md overflow-hidden select-none my-5 items-center">
                                <div class="title py-3 my-auto px-5 bg-blue-500 text-white text-sm font-semibold mr-3">
                                    Jenis Kelamin
                                </div>
                                <label class="flex radio p-2 cursor-pointer">
                                    <input
                                        class="my-auto transform scale-125 mr-2"
                                        type="radio"
                                        name="jenis_kelamin"
                                        id="jenis_kelamin_laki_laki"
                                        value="laki-laki"
                                        
                                    />
                                    Laki Laki
                                </label>
                                
                                <label class="flex radio p-2 cursor-pointer">
                                    <input
                                        class="my-auto transform scale-125 mr-2"
                                        type="radio"
                                        name="jenis_kelamin"
                                        id="jenis_kelamin_perempuan"
                                        value="perempuan"
                                        
                                    />
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        
                        





                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
