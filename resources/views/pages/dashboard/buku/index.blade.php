<x-dashboard.layout :$title>
    <h3 class="mb-4">Daftar Buku</h3>
    <a href="/dashboard/buku/tambah" class="btn-primary">Tambah Buku</a>

    @if (session('success'))
        <div class="mb-6 mt-2 w-full rounded bg-green-500/50 px-4 py-2 shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="relative my-4 overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400 rtl:text-right">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pengarang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Penerbit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $buku->judul }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $buku->pengarang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $buku->penerbit }}
                        </td>
                        <td class="px-6 py-4">
                            Rp {{ number_format($buku->harga, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $buku->stok }}
                        </td>
                        <td class="flex px-6 py-4">
                            <a href="/dashboard/buku/ubah/{{ $buku->kode_buku }}"
                                class="btn-warning flex items-center justify-center !p-2">
                                <span class="i-mdi-pen text-gray-900"></span>
                            </a>
                            <form action="/dashboard/buku/hapus/{{ $buku->kode_buku }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah anda ingin menghapus buku ini?')"
                                    class="btn-danger flex items-center justify-center !p-2">
                                    <span class="i-mdi-trash text-gray-100"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $bukus->links() }}

</x-dashboard.layout>
