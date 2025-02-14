<aside
    class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-14 transition-transform dark:border-gray-700 dark:bg-gray-800 md:translate-x-0"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="h-full overflow-y-auto bg-white px-3 py-5 dark:bg-gray-800">
        <form action="#" method="GET" class="mb-2 md:hidden">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                    placeholder="Search" />
            </div>
        </form>
        <ul class="space-y-2">
            <li>
                <a href="/dashboard"
                    class="{{ Request::is('dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }} group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <span class="{{ Request::is('dashboard') ? 'text-gray-900' : '' }} h-6 w-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white i-mdi-chart-pie"></span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/buku"
                    class="{{ Request::is('dashboard/buku*') ? 'bg-gray-100 dark:bg-gray-700' : '' }} group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <span class="{{ Request::is('dashboard/buku*') ? 'text-gray-900' : '' }} h-6 w-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white i-mdi-books"></span>
                    <span class="ml-3">Buku</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/transaksi"
                    class="{{ Request::is('dashboard/transaksi*') ? 'bg-gray-100 dark:bg-gray-700' : '' }} group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <span class="{{ Request::is('dashboard/transaksi*') ? 'text-gray-900' : '' }} h-6 w-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white i-mdi-cart"></span>
                    <span class="ml-3">Transaksi</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
