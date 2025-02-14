<x-base-layout :$title>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 h-screen lg:py-0">
            <div
                class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Masuk ke akunmu
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="" method="post">
                        @csrf
                        <div>
                            <label for="username"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="{{ $errors->has('username') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none"
                                required="" placeholder="username" />
                            @error('username')
                                <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <div x-data="{ show: false }" class="relative">
                                <input :type="show ? 'text' : 'password'" name="password" id="password" required=""
                                    :placeholder="show ? 'password' : '••••••••'"
                                    class="{{ $errors->has('password') ? 'border-red-300 bg-red-50 focus:border-red-600 focus:ring-red-600 dark:border-red-600 dark:bg-red-700 dark:text-white dark:placeholder-red-400 dark:focus:border-red-500 dark:focus:ring-red-500' : 'border-gray-300 bg-gray-50 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500' }} block w-full rounded-lg border p-2.5 text-gray-900 outline-none" />
                                @error('password')
                                    <p class="ml-1 mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                                <span @click="show = !show"
                                    class="i-mdi-eye absolute right-2 top-3.5 cursor-pointer text-xl"></span>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Masuk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
