<x-dashboard.layout :$title>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 lg:py-0">
            <div
                class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Tambah Petugas
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="" method="post">
                        @csrf
                        <div>
                            <label for="kode_buku"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Buku</label>
                            <input type="text" name="kode_buku" id="kode_buku" value="{{ old('kode_buku') }}"
                                class="{{ $errors->has('kode_buku') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="123456-123456-123456" />
                            @error('kode_buku')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="judul"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                                class="{{ $errors->has('judul') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="Hari Poter" />
                            @error('judul')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="pengarang"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" value="{{ old('pengarang') }}"
                                class="{{ $errors->has('pengarang') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="Lah Wong Saya Ngarang" />
                            @error('pengarang')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="penerbit"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}"
                                class="{{ $errors->has('penerbit') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="Lah Wong Saya Nerbitin ini" />
                            @error('penerbit')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="harga"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="number" name="harga" id="harga" value="{{ old('harga') }}"
                                class="{{ $errors->has('harga') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="100000" />
                            @error('harga')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="stok"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                            <input type="number" name="stok" id="stok" value="{{ old('stok') }}"
                                class="{{ $errors->has('stok') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="100" />
                            @error('stok')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Buat Buku
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-dashboard.layo>