<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Anggota') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-md p-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Daftar Anggota</h1>
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-2 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="mt-4 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 rounded-lg text-center">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-100 dark:bg-gray-700  text-xs font-bold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Nama Anggota</th>
                                <th class="px-6 py-3 bg-gray-100 dark:bg-gray-700  text-xs font-bold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($anggota as $item)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $item->nama_anggota }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <a href="{{ route('anggota.show', $item->id) }}" class="text-blue-500 hover:underline dark:text-blue-400">Detail</a>
                                        
                                        <!-- Tombol Hapus -->
                                        <form class="inline" method="POST" action="{{ route('anggota.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline dark:text-red-400">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    <a href="{{ route('anggota.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Tambah Anggota</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
