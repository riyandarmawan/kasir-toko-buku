<x-dashboard.layout :$title>
    <h3 class="mb-4 text-gray-900 dark:text-gray-100">Daftar Transaksi</h3>
    <a href="/dashboard/transaksi/tambah" class="btn-primary">Tambah Transaksi</a>

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
                        Kasir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                    <tr class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $transaksi->pengguna->username }}
                        </th>
                        <td class="px-6 py-4">
                                   Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->tanggal }}
                        </td>
                        <td class="flex px-6 py-4">
                            <a href="/dashboard/transaksi/detail/{{ $transaksi->id }}"
                                class="btn-safe flex items-center justify-center">
                                <span>Detail Transaksi</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $transaksis->links() }}

</x-dashboard.layout>
