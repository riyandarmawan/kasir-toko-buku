<x-dashboard.layout :$title>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 lg:py-0">
            <div
                class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1
                        class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Transaksi
                    </h1>
                    <form class="transaction-form grid grid-cols-3 gap-4 space-y-4 md:space-y-6" action=""
                        method="post">
                        @csrf
                        <div>
                            <label for="kasir"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kasir</label>
                            <input type="text" name="kasir" id="kasir" readonly
                                value="{{ auth('pengguna')->user()->username }}"
                                class="{{ $errors->has('kasir') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" />
                        </div>
                        <div class="col-start-3">
                            <label for="tanggal"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="datetime-local" name="tanggal" id="tanggal" value="{{ date('Y-m-d\TH:i') }}"
                                readonly
                                class="{{ $errors->has('tanggal') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" />
                        </div>
                        <div class="relative col-span-3 my-4 overflow-x-auto">
                            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400 rtl:text-right">
                                <thead
                                    class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
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
                                            Jumlah
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Subtotal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="text" name="kode_barang" id="kode_barang"
                                                value="{{ old('kode_barang') }}"
                                                class="{{ $errors->has('kode_barang') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Kode Barang" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="text" name="pengarang" id="pengarang"
                                                value="{{ old('pengarang') }}" disabled
                                                class="{{ $errors->has('pengarang') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Pengarang" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="text" name="penerbit" id="penerbit"
                                                value="{{ old('penerbit') }}" disabled
                                                class="{{ $errors->has('penerbit') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Penerbit" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="text" name="harga" id="harga"
                                                value="{{ old('harga') }}" disabled
                                                class="{{ $errors->has('harga') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Harga" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="text" name="stok" id="stok"
                                                value="{{ old('stok') }}" readonly
                                                class="{{ $errors->has('stok') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Stok" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="number" name="jumlah" id="jumlah"
                                                value="{{ old('jumlah') }}"
                                                class="{{ $errors->has('jumlah') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Jumlah" />
                                        </td>
                                        <td scope="row"
                                            class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            <input type="number" name="subtotal" id="subtotal"
                                                value="{{ old('subtotal') }}" readonly
                                                class="{{ $errors->has('subtotal') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                                required="" placeholder="Subtotal" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-start-1">
                            <input type="number" name="total_harga" id="total_harga" value="0" readonly
                                class="{{ $errors->has('total_harga') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" />
                        </div>
                        <button type="submit"
                            class="col-start-3 rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Tambah Transaksi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </x-dashboard.layo>
